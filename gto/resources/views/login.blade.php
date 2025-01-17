<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему - ГТО</title>

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Заголовок с навигацией -->
    <header class="bg-success text-white">
        <div class="text-center py-4">
            <h1 class="display-4">Вход в систему</h1>
            <p class="lead">Введите свои данные для входа в систему.</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('welcome') }}" class="text-white mx-3">На главную</a> <!-- Ссылка на главную -->
        </div>
    </header>

    <!-- Основной контент -->
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Вход в систему') }}</div>

                    <div class="card-body">
                        <!-- Отображение ошибок, если они есть -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" required />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input type="password" id="password" name="password" class="form-control" required />
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Подключение JS для Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
