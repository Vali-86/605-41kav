<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дисциплины - ГТО</title>

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Заголовок с навигацией -->
    <header class="bg-success text-white">
        <div class="text-center py-4">
            <h1 class="display-4">Дисциплины</h1>
            <p class="lead">Здесь отображаются данные о дисциплинах для сдачи ГТО.</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('welcome') }}" class="text-white mx-3">На главную</a>
        </div>
    </header>

    <!-- Основной контент -->
    <section class="container mt-5">
        <div class="row">
            <!-- Карточки дисциплин -->
            @foreach($disciplines as $discipline)
            <div class="col-md-4">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body text-center">
                        <h2 class="card-title">{{ $discipline->name }}</h2>
                        <p class="card-text">{{ $discipline->description }}</p>
                        <p class="card-text">Максимальный балл: {{ $discipline->max_score }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Пагинация -->
        <div class="mt-4">
            {{ $disciplines->links() }}
        </div>
    </section>

    <!-- Подключение JS для Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
