<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Post;
use App\Dwop;

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('/', function () {

        //$straz = \App\Dwop::find(1);
        //var_dump($straz->nazwa);

        //$dwop = App\Dwop::all();
       // foreach ($dwop as $dwop) {
        //echo $dwop->nazwa;
        //}
        return 'Hello World';

        //echo '<h2>'.$dwop->adres.'</h2>';



});

Route::get('/dwop', 'DwopController@wsp');
Route::get('/create', 'DwopController@create');

Route::get('strazaki', function()
{
    return 'Czesc uzytkowniku!';
});

Route::get('test/{id}', function($id)
{
    $post = App\Post::find($id);

    $komentarze = Post::find($id)->komentarz;

    echo '<h2>'.$post->tytul.'</h2>';
    echo '<p>'.$post->tresc.'</p>';

    foreach ($komentarze as $c)
    {
        echo '<li>'.$c->komentarz.'</li>';
    }

});


