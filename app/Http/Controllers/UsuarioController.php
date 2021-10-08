<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;

class UsuarioController extends Controller
{
    // Muestra la vista del index
    public function index()
    {   
        return view('admin.usuarios.index', [
            'usuarios' => User::get()
        ]);
    }

    // Muestra la vista del index
    public function show(User $user)
    {   
        return view('admin.usuarios.show', [
            'usuario' => $user
        ]);
    }

    // Muestra la vista del index
    public function create()
    {   
        return view('admin.usuarios.create', [
            'usuario' => new User
        ]);
    }

    // Muestra la vista del index
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Se encripta la contraseña usando la función bcrypt().
        $user->save(); // Se guarda el registro en la base de datos.

        return redirect()->route('usuarios.index');
    }

    // Muestra la vista del index
    public function edit(User $user)
    {  
        return view('admin.usuarios.edit', [
            'usuario' => $user
        ]);
    }

    // Muestra la vista del index
    public function update(User $user, SaveUserRequest $request)
    {  
        $user->update($request->validated());

        return redirect()->route('usuarios.show', $user);
    }

    // Muestra la vista del index
    public function destroy(User $user)
    {  
        $user->delete();

        return redirect()->route('usuarios.index');
    }
}
