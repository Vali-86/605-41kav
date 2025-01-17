<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ParticipantController extends Controller
{
    public function index()
    {
        // Получаем всех участников
        $participants = Participant::all(); 

        // Передаем участников в представление welcome
        return view('welcome', compact('participants'));
    }
}