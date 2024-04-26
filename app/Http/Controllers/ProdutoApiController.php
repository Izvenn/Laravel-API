<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutoApiController 
{
    public function index()
    {
        $produtos = Produto::all();

        return response()->json($produtos, 200);
    }


    public function obter($id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['erro' => 'Produto não encontrado'], 404);
        }

        return response()->json($produto, 200);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['erro' => 'Produto não encontrado'], 404);
        }

        $produto->update($request->all());

        return response()->json($produto, 200);
    }

    public function delete($id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['erro' => 'Produto não encontrado'], 40);
        }
    }

    public function store(Request $request)
    { {
            $produto = Produto::create($request->all());

            return response()->json($produto, 201);
        }
    }
}
