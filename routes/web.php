<!--
A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view `welcome.blade.php` e creiamo una nostra homepage. Facciamo quindi sì che la rotta `/` visualizzi `home.blade.php`
Inizialmente stampiamo un *Hello World*, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
-Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione `route()`
- Almeno in una pagina passare dei $data dalla rotta e stamparli in pagina facendo uso di istruzioni blade
-->

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $data = [
        'squads' => ["Inter", "Juventus", "Milan"]
    ];
        
    return view('home', $data);
})-> name('home');

Route::get('/Inter', function () {
    
    $data = [
        'players' => ["Handanovic", "Skriniar", "Barella", "Sanchez", "Martinez"]
    ];
        
    return view('inter', $data);
})-> name('inter');
