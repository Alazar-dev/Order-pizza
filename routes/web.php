<?php




Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function(){
    $pizza = [
        'type' => 'yummy',
        'base' => 'cheesy',
        'price' => 10
    ];
    return view('pizzas', $pizza);
});