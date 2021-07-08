<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegistroController extends Controller
{
    public function create()
    {
        return view('registro.create');
    }

    public function store(RegistroFormRequest $request)
    {
        $data = $request->except('_token');
        $email=$data['email'] ;
        $data['password'] = Hash::make($data['password']);

        $user = User::where('email', $email)->first();
       
        if($user){
            return redirect()
                ->back()
                ->withErrors('E-mail já cadastrado');
         
        }
        $user = User::create($data);

         Auth::login($user);

         return redirect()->route('listar_series');
        
    }
}


