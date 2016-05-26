<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class TournamentController extends Controller
{

	public function getCreateTournament()
    {
        return view('adminControls.createTournament');
    }
}