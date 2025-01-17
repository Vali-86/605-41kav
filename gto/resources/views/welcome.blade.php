<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГТО - Главный экран</title>

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Заголовок с навигацией -->
    <header class="bg-success text-white">
        <div class="text-center py-4">
            <h1 class="display-4">ГТО - Участники и их результаты</h1>
            <p class="lead">Здесь отображаются данные участников, их результаты и достижения.</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('disciplines') }}" class="text-white mx-3">Список дисциплин</a>
            <a href="{{ route('register') }}" class="text-white mx-3">Регистрация</a>
            <a href="{{ route('login') }}" class="text-white mx-3">Вход</a>
            <!-- Проверка авторизации -->
            <!-- @auth
                <div>Юзер: {{ Auth::user()->full_name }}</div>
            @else -->
                <!-- <div><a style="color: white;" href="{{ route('login') }}">Войдите</a></div> -->
            @endauth
        </div>
    </header>

    <!-- Основной контент -->
    <section class="container mt-5">
        <div class="row">
            <!-- Карточки участников -->
            @foreach($participants as $participant)
            <div class="col-md-4">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body text-center">
                        <h2 class="card-title">{{ $participant->full_name }}</h2>
                        <p class="card-text">Дата рождения: {{ \Carbon\Carbon::parse($participant->birth_date)->format('d.m.Y') }}</p>
                        <p class="card-text">Пол: {{ $participant->gender }}</p>
                        <p class="card-text">Медицинское одобрение: {{ $participant->medical_approval ? 'Да' : 'Нет' }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Подключение JS для Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
