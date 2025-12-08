<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fly;
use App\Models\Departament;
use App\Models\Contribution;

class FlyController extends Controller
{
    protected $departaments;

    public function __construct()
    {
        // Disponível para create() e edit()
        $this->departaments = Departament::all();
    }

    /**
     * Exibe todas as sugestões ordenadas por likes.
     */
    public function index()
    {
       $flies= Fly::all();

        return view('flies.index', compact('flies'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        return view('flies.create', [
            'departaments' => $this->departaments
        ]);
    }

    /**
     * Armazena uma nova Fly.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string',
            'description'    => 'required|string',
            'status'         => 'nullable|string',
            'departament_id' => 'required|exists:departaments,id',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['status']  = $validated['status'] ?? 'analysis';

        Fly::create($validated);

        return redirect()
            ->route('flies.index')
            ->with('success', 'Fly criada com sucesso.');
    }

    /**
     * Exibe uma Fly específica.
     */
    public function show(Fly $fly)
    {
        $fly->loadCount([
            'votes as likes_count' => fn($q) => $q->where('type_vote', 'like'),
            'votes as dislikes_count' => fn($q) => $q->where('type_vote', 'dislike'),
        ]);
        $contributions = Contribution::where('fly_id', $fly->id)->get();
        return view('flies.show', compact('fly'),compact('contributions'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Fly $fly)
    {
        return view('flies.edit', [
            'fly'          => $fly,
            'departaments' => $this->departaments
        ]);
    }

    /**
     * Atualiza uma sugestão.
     */
    public function update(Request $request, Fly $fly)
    {
        $validated = $request->validate([
        'title'          => 'required|string',
        'description'    => 'required|string',
        'departament_id' => 'required|exists:departaments,id',
        ]);

        if (!$request->has('departament_id') || empty($request->input('departament_id'))) {
        return back()->withErrors(['departament_id' => 'Selecione o departamento, ou sua sugestão não será criada.'])->withInput();
    }
        
        $fly->update($validated);

        return redirect()
            ->route('flies.index')
            ->with('success', 'Fly atualizada com sucesso.');
    }

    /**
     * Exclui uma sugestão.
     */
    public function destroy(Fly $fly)
    {
        $fly->delete();

        return redirect()
            ->route('flies.index')
            ->with('success', 'Fly deletada com sucesso.');
    }
}
