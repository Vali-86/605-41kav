<?php

namespace App\Http\Controllers;

use App\Models\Discipline;

class DisciplineController extends Controller
{
    public function index()
    {
        // Получаем все дисциплины из базы данных
        $disciplines = Discipline::paginate(5);

        // Передаем дисциплины в представление
        return view('disciplines', compact('disciplines'));
    }
}
