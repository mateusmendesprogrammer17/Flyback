<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
class RememberPasswordController extends Controller
{
    
    public function showRememberForm()
    {
        return view('auth.remember');
    }
    public function handleRemember(Request $request)
    {
        // Lógica para lidar com o pedido de recuperação de senha
            $request->validate([
            'email' => 'required|email',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Aqui você pode adicionar a lógica para enviar o e-mail de recuperação de senha
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);

    }
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }
    public function handleReset(Request $request)
    {
        // Lógica para lidar com a redefinição de senha
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
