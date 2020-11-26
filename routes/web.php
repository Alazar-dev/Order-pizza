<?php




Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function(){
    $pizza = [
        'type' => 'yummy',
        'base' => 'cheesy-crust',
        'price' => 16
    ];
    return view('pizzas', $pizza);
});