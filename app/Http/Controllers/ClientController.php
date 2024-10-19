<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
     public function showWelcome()
    {
        // Retourner la vue située dans resources/views/client/welcome.blade.php
        return view('client.welcome');
    }
}
