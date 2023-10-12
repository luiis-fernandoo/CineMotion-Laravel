<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    
    public function index(Session $session){
        
        $sessions = Session::join('films', 'sessions.film_id', '=', 'films.id')
        ->select('films.*', 'sessions.*')
        ->get();
        
        /*if(Auth::check()){
            
        }*/

        return view('Index/index', compact('sessions'));
    }

}
