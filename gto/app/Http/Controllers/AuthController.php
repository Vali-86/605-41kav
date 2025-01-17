<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Participant;

class AuthController extends Controller
{
    // Отображение формы входа
    public function showLoginForm()
    {
        return view('login'); // Представление для входа
    }

    // Обработка формы входа
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Найти пользователя по email
        $participant = Participant::where('email', $credentials['email'])->first();

        if (!$participant) {
            return redirect()->back()->withErrors(['email' => 'Пользователь с таким email не найден.']);
        }

        // Проверка пароля
        if (!Hash::check($credentials['password'], $participant->password)) {
            return redirect()->back()->withErrors(['password' => 'Неверный пароль.']);
        }

        // Авторизация успешна
        Auth::login($participant);

        return redirect()->route('welcome')->with('status', 'Вы успешно вошли!');
    }

    // Выход из системы
    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Перенаправляем на главную страницу
    }
}
