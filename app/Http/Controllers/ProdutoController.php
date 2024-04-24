<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index () {
        $produtos = Produto::all();

        return ProdutoResource::collection($produtos);
    }

    public function store(Request $request) {
        $produtos = new Produto();

        $imagePath = $request->file('img_url')->store('images', 'public');

        $produtos->titulo = $request->titulo; 
        $produtos->valor = $request->valor;
        $produtos->categoria = $request->categoria;
        $produtos->img_url = $imagePath;

        $produtos->save();
    }

    public function show($id) {
        $produto = Produto::findOrFail($id);

        return new ProdutoResource($produto);
    }
}