<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <!-- Подключение Tailwind CSS через CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="bg-white shadow-lg rounded-lg">
                    <div class="bg-green-600 text-white text-center py-4 rounded-t-lg">
                        <h3 class="text-xl">Регистрация</h3>
                    </div>
                    <div class="p-6">
                        <!-- Форма регистрации -->
                        <form method="POST" action="{{ route('register.submit') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="full_name" class="block text-gray-700">Полное имя</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="full_name" name="full_name" placeholder="Введите полное имя" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Электронная почта</label>
                                <input type="email" class="w-full p-2 border border-gray-300 rounded-md" id="email" name="email" placeholder="Введите email" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Пароль</label>
                                <input type="password" class="w-full p-2 border border-gray-300 rounded-md" id="password" name="password" placeholder="Введите пароль" required>
                            </div>
                            <button type="submit" class="w-full bg-green-600 text-white p-2 rounded-md hover:bg-green-700 transition duration-200">Зарегистрироваться</button>
                        </form>
                    </div>
                    <div class="bg-gray-100 text-center py-4 rounded-b-lg">
                        <p class="text-gray-700">Уже есть аккаунт? <a href="{{ route('login') }}" class="text-green-600">Войти</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
