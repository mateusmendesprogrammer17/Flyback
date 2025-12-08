<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fly;
use App\Models\Contribution;

class ContributionController extends Controller
{
    public function store(Request $request, Fly $fly)
    {
        $request->validate([
            'contribution' => 'required|string',
        ]);

        $contribution = Contribution::create([
            'fly_id' => $fly->id,
            'user_id' => auth()->id(), // usuário autenticado
            'content' => $request->contribution
        ]);

        return redirect()->back()->with('success', 'Contribuição criada com sucesso!');
    }

    public function update(Request $request, Contribution $contribution)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $contribution->update([
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Contribuição atualizada!');
    }

    public function destroy(Contribution $contribution)
    {
        $contribution->delete();

        return redirect()->back()->with('success', 'Contribuição deletada!');
    }
}
