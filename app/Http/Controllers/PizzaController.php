<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'romi', 'base' => 'furst', 'price' => 30],
            ['type' => 'romi', 'base' => 'burst', 'price' => 20],
            ['type' => 'yummy', 'base' => 'crust', 'price' => 10]
        ];
    
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')    
        ]);
    }
    public function show($id){
        return view('details', [
            'id' => $id
        ]);
    }
}
