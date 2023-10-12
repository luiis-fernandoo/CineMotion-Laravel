<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Login(User $user, Client $client){

        $clients = User::join('clients', 'users.id', '=', 'clients.user_id')
        ->select('users.*', 'clients.*')
        ->get();

        return view('User/Login', compact('clients'));
    }

    public function Create_user()
    {
        return view('User/Client_Form');
    }

    
    public function Save_Client(User $user, Client $client, Request $request){
    
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'cpf' => 'required|string',
            'birth_date' => 'date',
            'phone' => 'string'
        ]);

        $user->fill($request->all());
        $user->save();

        $client->fill($request->all());
        $client->user_id = $user->id;
        $client->save();

        return redirect()->route('login.Login')->with('sucess', 'cadastrado');

    }
        

    public function Authentication(Request $request){
        $credentials = $request->only('username', 'password');
            
        if(Auth::attempt($credentials)){
            $request->session()->put('user_id', Auth::user()->id);
                
            return redirect()->route('index.index')->with('Login efetuado!');
        }
        else{
            return redirect()->route('login.Login')->with('errors', 'usuário e/ou senha inválidas');
        }
    }

    public function Create_Employee()
    {
        return view('User/Employee_Form');
    }

    public function Save_Employee(User $user, Employee $employee, Request $request)
    {
    
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'function' => 'required|string',
            'cpf' => 'required|string',
            'salary' => 'required|numeric',
            'address' => 'required|string'
    
        ]);
    
        $user->fill($request->all());
        $user->save();
        $employee->fill($request->all());
        $employee->user_id = $user->id;
        $employee->save();
    
    
        return redirect()->route('login.Login')->with('sucess', 'cadastrado');
    }
}
