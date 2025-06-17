<?php

namespace App\Http\Controllers;

use App\Models\Bichinho;
use Illuminate\Http\Request;

class BichinhosController extends Controller
{
    public readonly Bichinho $bichinho;
    public function __construct()
    {
        $this->bichinho = new Bichinho();
    }

    public function index()
    {
        $bichinhos = $this->bichinho->all();
        return view('bichinhos', ['bichinhos' => $bichinhos]);
    }


    public function create()
    {
        return view('pages.bichinhos.create');
    }

    /**
     * Store a  created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'raca' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
            'ultimo_local' => 'nullable|string',
            'nome_responsavel' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // max 10MB
        ]);

        // Upload da foto
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $path = $request->file('foto')->store('fotos_bichinhos', 'public');
            $validated['foto'] = $path;
        }

        Bichinho::create($validated);

        return redirect()->route('home')->with('success', 'Bichinho cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}
}
