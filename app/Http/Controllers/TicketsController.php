<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ticket;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('inc.content')->with('tickets', $tickets);
    }
}
