<?php




Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function(){
    
    $pizzas = [
        ['type' => 'romi', 'base' =>'crust', 'price' =>15],
        ['type' => 'lomi', 'base' => 'lust', 'price' =>10],
        ['type' => 'yummy', 'base' => 'furst', 'price' => 5]
    ];

    return view('pizzas', ['pizzas' => $pizzas]);
});