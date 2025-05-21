<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #d9e9f8, #9bc6ce);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            background-color: #ffffffdd;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(45, 105, 130, 0.15);
            max-width: 500px;
            width: 100%;
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c5d73;
            font-weight: 700;
            font-size: 28px;
            letter-spacing: 1px;
        }

        .form-label {
            font-weight: 600;
            color: #2c5d73;
        }

        .form-control {
            border-radius: 10px;
            border: 1.5px solid #bcd2de;
            padding: 12px 15px;
            font-size: 15px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #5a96c7;
            box-shadow: 0 0 8px rgba(147, 197, 237, 0.25);
            outline: none;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            background-color: #8dbeea;
            border: none;
            transition: background-color 0.3s ease;
            color: white;
        }

        .btn-primary:hover {
            background-color: #5a96c7;
        }

        .alert {
            font-size: 14px;
            padding: 10px 15px;
            border-radius: 10px;
        }

        @media (max-width: 480px) {
            .container {
                padding: 25px 20px;
            }

            h3 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
    <h3><i class="bi bi-lock-fill me-2"></i>Login</h3>

        <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/login') ?>" method="post" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">👤Username/Email address</label>
                <input id="email" name="username" type="text" class="form-control" value="<?= old('username') ?>" required autofocus />
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">🔑Password</label>
                <div class="input-group">
                    <input id="password" name="password" type="password" class="form-control" required />
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="bi bi-eye-slash" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-lock-fill me-1"></i> Login
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            togglePassword.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                eyeIcon.classList.toggle('bi-eye');
                eyeIcon.classList.toggle('bi-eye-slash');
            });
        });
    </script>
</body>
</html>