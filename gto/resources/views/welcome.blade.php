<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГТО - Главный экран</title>

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Подключение Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-light">

    <!-- Заголовок с навигацией -->
    <header class="bg-success text-white">
        <div class="text-center py-4">
            <h1 class="display-4">ГТО - Участники и их результаты</h1>
            <p class="lead">Здесь отображаются данные участников, их результаты и достижения.</p>
        </div>
        <div class="navbar navbar-expand-lg navbar-light align-items-center">
            <div class="navbar-nav ms-auto align-items-center justify-content-center">
                <div class="nav-item">
                    <a class="nav-link active" href="#">Участники</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">Список участников</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">Регистрация</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">Вход</a>
                </div>
        </div>
    </header>

    <!-- Основной контент -->
    <section class="container mt-5">
        <div class="row">
            <!-- Карточки участников -->
            <div class="col-md-4">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body text-center">
                        <h2 class="card-title">Иван Иванов</h2>
                        <p class="card-text">Результат: 90 баллов</p>
                        <p class="card-text">Дисциплины: Бег, Прыжки в длину</p>
                        <p class="card-text">Знак отличия: Золотой</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body text-center">
                        <h2 class="card-title">Мария Петрова</h2>
                        <p class="card-text">Результат: 85 баллов</p>
                        <p class="card-text">Дисциплины: Силовые упражнения, Бег</p>
                        <p class="card-text">Знак отличия: Серебряный</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body text-center">
                        <h2 class="card-title">Алексей Смирнов</h2>
                        <p class="card-text">Результат: 92 балла</p>
                        <p class="card-text">Дисциплины: Лыжи, Бег</p>
                        <p class="card-text">Знак отличия: Золотой</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Подключение JS для Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
