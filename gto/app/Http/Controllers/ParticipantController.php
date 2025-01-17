<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ParticipantController extends Controller
{
    public function index()
    {
        // Получаем все участники
        $participants = Participant::all(); // Здесь ты получаешь данные из базы

        // Передаем переменную participants в представление
        return view('welcome', compact('participants'));
    }
}
