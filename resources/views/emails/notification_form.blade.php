<!DOCTYPE html>
<html>
<head>
    <title>Send Notification</title>
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
</head>
<body>
    <form action="{{ route('send.notification') }}" method="POST">
        @csrf

        @if (session('success'))
            <div id="success-message">
                {{ session('success') }}
            </div>
        @endif

        <h2>Send Notification</h2>
        <label for="email">Recipient Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" rows="4" required></textarea>

        <button type="submit">Send</button>
    </form>
    <script src="{{ asset('js/notification.js') }}"></script>
</body>
</html>