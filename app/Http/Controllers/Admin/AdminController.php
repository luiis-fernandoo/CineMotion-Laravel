<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Index(Session $session, Film $film){

        $sessions = Session::join('films', 'sessions.film_id', '=', 'films.id')
        ->select('films.*', 'sessions.*')
        ->get();
        $film = Film::all();
        
        
        return view('Admin/admin_page', compact('sessions', 'film'));
    }

    public function addFilm(){

        return view('Admin/addFilm');
    }

    public function saveFilm(Film $film, Request $request){

        $request->validate([
            'title' => 'required|string',
            'gender' => 'required|string',
            'duration' => 'required',
            'director' => 'required|string',
            'path_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'release_date' => 'required|date',

        ]);

        if($request->has('path_img')){
            $image = $request->file('path_img');
            $path_img = time() . '_' . $image->getClientOriginalName();
            $path = public_path('resources/img_film');
            $image->move($path, $path_img);
        }
        $film->fill($request->all());
        $film->path_img = 'img_film/' . $path_img;
        $film->save();

        return redirect()->route('admin.Index');
    }

    public function editFilm(Film $film, $id)
    {
        $filmEdit = Film::find($id);
        
        return view('Admin/editFilm', compact('filmEdit'));
    }

    public function updateFilm(Request $request, Film $film, $id)
    {

        $film = Film::find($id);
        $request->validate([
            'title' => 'required|string',
            'gender' => 'required|string',
            'duration' => 'required',
            'director' => 'required|string',
            'path_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'release_date' => 'required|date',

        ]);
        if ($request->has('path_img')) {
            $image = $request->file('path_img');
            $path_img = time() . '_' . $image->getClientOriginalName();
            $path = public_path('resources/img_film');
            $image->move($path, $path_img);
        }
        $film->fill($request->all());
        $film->path_img = 'img_film/' . $path_img;
        $film->update();

        return redirect()->route('admin.Index');
    }

    public function deleteFilm(Film $film, $id)
    {
        $film = Film::find($id);
        $film->delete();

        return redirect()->route('admin.Index');
    }

    public function addSession(Film $films){
    
        $film = Film::all();

        return view('Admin/addSession', compact('film'));
    }

    public function saveSession(Session $session, Request $request){
    
        $request->validate([
            'film_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'room' => 'required|numeric',
            'num_session' => 'required|numeric',
            'price' => 'required|numeric',

        ]);

        $session->fill($request->all());
        $session->save();

        return redirect()->route('admin.Index');
    }

    public function editSession(Session $session, Film $film , $id){
        $sessionEdit = $session->find($id);
        $film = Film::all();
        
        return view('Admin/editSession', compact('sessionEdit', 'film'));
    }

    public function updateSession(Request $request, Session $session, $id)
    {
        $session = Session::find($id);
        $request->validate([
            'film_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'room' => 'required|numeric',
            'num_session' => 'required|numeric',
            'price' => 'required|numeric',

        ]);
        $session->fill($request->all());
        $session->update();

        return redirect()->route('admin.Index');
    }

    public function deleteSession(Session $session, $id){
        $session = Session::find($id);
        $session->delete();

        return redirect()->route('admin.Index');

    }

}
