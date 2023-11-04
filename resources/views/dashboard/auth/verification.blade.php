<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email Address</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
            padding: 1.25rem;
            border-bottom: 1px solid #343a40;
        }

        .card-header h1 {
            font-size: 24px;
            font-weight: 600;
            margin: 0;
        }

        .card-body {
            padding: 20px;
        }

        .btn-link {
            color: #007bff;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ $pageTitle }}</h1>
                    </div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                A fresh verification link has been sent to your email address.
                            </div>
                        @endif

                        <p>
                            Before proceeding, please check your email for a verification link. If you did not receive
                            the email,
                        <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="d-inline btn btn-link p-0">
                                click here to request another
                            </button>.
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>

</html>
