<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notification</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    <tr style="background-color: #4CAF50;">
                        <td style="padding: 20px; color: #ffffff; font-size: 24px; text-align: center;">
                            📩 Notification Email
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px; color: #333333; font-size: 16px; line-height: 1.6;">
                            <p>Dear User,</p>
                            <p>{{ $message }}</p>
                            <p style="margin-top: 30px;">Regards,<br><strong>Laravel Notification Team</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #eeeeee; padding: 15px; text-align: center; font-size: 12px; color: #888888;">
                            © {{ date('Y') }} All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
