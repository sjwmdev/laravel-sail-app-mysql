<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lsdm - Password Reset</title>
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
                <img src="/images/lsdm-logo.png" alt="Logo" width="120px"
                    height="120px">
            </td>
        </tr>
        <tr>
            <td class="title">
                <h2>LSDM</h2>
            </td>
        </tr>
        <tr>
            <td class="content">
                <p>Hello</p>
                <p>It seems you have requested to reset your password. To proceed with the password reset, please click
                    the link below:</p>
                <p><a href="{{-- {{ .Url }} --}}" style="color:blue; text-decoration: none;">Click Here to Reset
                        Password</a>
                </p>
                <p>If you did not initiate this request, no further action is required.The link will expire in 30Minutes
                </p>
                <p>Best regards,</p>
                <p>LSDM</p>
            </td>
        </tr>
        <tr>
            <td class="footer">
                <p>&copy; Lsdm. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>

</html>
