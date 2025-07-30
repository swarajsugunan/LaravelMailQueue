<?php

namespace App\Jobs;

use App\Mail\NotifyUserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Throwable;

class SendNotificationEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $email;
    public string $message;

    public int $tries = 3;
    public int $backoff = 10;

    /**
     * Create a new job instance.
     */
    public function __construct(string $email, string $message)
    {
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $html = view('emails.notification', [
                    'email' => $this->email,
                    'message' => $this->message,
                ])->render();

                Mail::html($html, function ($mail) {
                    $mail->to($this->email)
                        ->subject('Notification Message');
                });
    }

    public function failed(Throwable $exception): void
    {
        logger()->error("Email job failed for {$this->email}", [
            'error' => $exception->getMessage(),
        ]);
    }
}
