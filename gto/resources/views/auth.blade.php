<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Регистрация</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Имя</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Введите имя" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Фамилия</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Введите фамилию" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Электронная почта</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Введите email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
