<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidate;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', ['users' => $users]);

    }

    public function create()
    {

        return view('user.create');
    }

    public function store(RequestValidate $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->idade = $request->idade;
        $user->cep = $request->cep;
        $user->rua = $request->rua;
        $user->numero = $request->numero;
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('user.edit', ['user' => $user]);
    }

    public function update(RequestValidate $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->idade = $request->idade;
        $user->cep = $request->cep;
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $users = User::where('id',$id)->first();
        $users->delete();
        return redirect()->route('user.index');
    }
}
