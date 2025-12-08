<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=$user::paginate(10);
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|string|min:6|confirmed',
    ], [
        'name.required' => 'O campo nome é obrigatório.',
        'name.max' => 'O campo nome deve ter no máximo 255 caracteres.',
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'Digite um e-mail válido.',
        'email.unique' => 'Esse e-mail já está cadastrado.',
        'email.max' => 'O campo e-mail deve ter no máximo 255 caracteres.',
        'password.required' => 'O campo senha é obrigatório.',
        'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
        'password.confirmed' => 'As senhas não coincidem.',
    ]);
         

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

      return redirect()->route('login')->with('success','User registered successfully. Please login.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, User $user)
{
    // Validação
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        'password' => 'nullable|string|min:6|confirmed', // senha opcional
    ], [
        'name.required' => 'O campo nome é obrigatório.',
        'name.max' => 'O campo nome deve ter no máximo 255 caracteres.',
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'Digite um e-mail válido.',
        'email.unique' => 'Esse e-mail já está cadastrado.',
        'email.max' => 'O campo e-mail deve ter no máximo 255 caracteres.',
        'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
        'password.confirmed' => 'A confirmação da senha não confere.',
    ]);

    // Atualizar campos
    $user->name = $request->name;
    $user->email = $request->email;

    // Atualizar senha apenas se preenchida
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('users.edit', $user)
                     ->with('success', 'Perfil atualizado com sucesso.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
