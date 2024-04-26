<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criar(Request $request)
    {
        $produto = Produto::create($request->all());

        return response()->json($produto, 201);
    }
}
