<?php




Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function(){
    
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
});