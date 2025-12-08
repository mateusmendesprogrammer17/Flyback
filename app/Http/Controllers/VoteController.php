<?php

namespace App\Http\Controllers;

use App\Models\Fly;
use App\Models\FlyVotes;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Registra um voto (like ou unlike) para um fly.
     */
    public function vote(Request $request, Fly $fly)
    {
        // Valida o tipo de voto enviado pelo formulário
        $request->validate([
            'vote_type' => 'required|in:like,unlike',
        ]);

        $userId = $request->user()->id;

        // Atualiza ou cria o voto, garantindo que o usuário não vote duas vezes
        FlyVotes::updateOrCreate(
            [
                'fly_id' => $fly->id,
                'user_id' => $userId,
            ],
            [
                'type_vote' => $request->vote_type,
            ]
        );
         
        // Retorna para a página anterior com mensagem de sucesso
        return redirect()->back()->with('success', 'Voto registrado com sucesso!');
    }
}
