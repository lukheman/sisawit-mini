<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Sistem Penjualan Bibit Kelapa Sawit</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font (optional, untuk tampilan lebih clean) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
        }
        .logo img {
            width: 80px;
            margin-bottom: 20px;
        }
        .form-control {
            border: none;
            border-bottom: 2px solid #e0e0e0;
            border-radius: 0;
            padding: 12px 0;
            font-size: 1rem;
            background: transparent;
        }
        .form-control:focus {
            box-shadow: none;
            border-bottom-color: #2e7d32;
        }
        .btn-login {
            background-color: #2e7d32;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-login:hover {
            background-color: #1b5e20;
            transform: translateY(-2px);
        }
        .text-muted {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

        {{ $slot }}
<!-- Bootstrap 5 JS (optional kalau butuh komponen interaktif) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
