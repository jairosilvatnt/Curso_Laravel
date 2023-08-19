<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        // $fornecedores  = ['Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3','Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3','Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3','Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3'];

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ' => '00.000.000/000-00'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',

            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'CNPJ' => ''
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'N',

            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
