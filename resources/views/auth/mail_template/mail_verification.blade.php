<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            padding: 0px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-collapse: collapse;
        }

        .logo {
            text-align: center;
            padding: 0px;
        }

        .title {
            text-align: center;
            padding: 0px;
            color: #333333;
        }

        .content {
            padding: 20px;
            color: #333333;
        }

        .footer {
            background-color: #f6f6f6;
            padding: 0px;
            text-align: center;
        }

        .footer p {
            color: #888888;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <table class="container">
        <tr>
            <td class="logo">
                <img src="https://www.costech.or.tz/storage/settings/1646987587.png" alt="Logo" width="120px"
                    height="120px">
            </td>
        </tr>
        <tr>
            <td class="title">
                <h2>Tanzania Commission for Science and Technology</h2>
            </td>
        </tr>
        <tr>
            <td class="content">
                <p>Dear {{-- {{ .Name }} --}}</p>
                <p>Thank you for signing up. To complete your registration, please click the
                    link below to verify your email address:</p>
                <p><a href="{{-- {{ .Url }} --}}" style="color: blue;">Click Here for email verification</a>
                </p>
                <p style="color: #333333;">If you did not create an account, you can ignore this email.</p>
                <p>Best regards,</p>
                <p>Tanzania Commission for Science and Technology</p>
            </td>
        </tr>
        <tr>
            <td class="footer">
                <p>&copy; Costech. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>

</html>
