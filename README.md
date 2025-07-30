# LaravelMailQueue
Queue system to handle email notifications

A simple Laravel app to send notification emails using queues."

Features
#----------------
-Send notification emails asynchronously via job queue
-Email templating using Blade
-Laravel validation and success feedback
-Flash message auto-dismissal
-Cleanly separated CSS/JS assets

Folder Structure (important ones)
#----------------------------------
app/
├── Controller/
│   └── NotificationController.php
├── Jobs/
│   └── SendNotificationEmailJob.php
├── Mail/
│   └── NotifyUserMail.php
resources/
├── views/
│   └── notification_form.blade.php
│   └── notification.blade.php
public/
├── css/
│   └── notification.css
├── js/
│   └── notification.js
routes/
└── web.php
.env

Getting Started
#---------------

#1. Clone the repository
    git clone https://github.com/swarajsugunan/LaravelMailQueue
    cd LaravelMailQueue

#2. Install dependencies
    composer install
    npm install && npm run dev

#3. Set up .env
    rename .env.example to .env
    php artisan key:generate

    Edit .env for mail credentials:

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_mailtrap_username
    MAIL_PASSWORD=your_mailtrap_password
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=your@email.com
    MAIL_FROM_NAME="Laravel Notification"

    Edit database credentials

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=password

#4. Run migrations
    php artisan migrate

#5. Start the server
    php artisan serve

Sending Emails
#----------------
    Visit the form at /send-notification to trigger email dispatch via queue.

Make sure to run the queue worker:

    php artisan queue:work



