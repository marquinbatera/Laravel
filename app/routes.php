<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'HomeController');
Route::resource('produtos', 'TesteController@show');
// Route::resource('/', 'HomeController');
// Route::get('/', function()
// {
// 	// return View::make('hello');
// 	return 'olá';
// });
// Route::get('/', function(){
	// pegar todos os registros
	// $cursos = DB::table('tb_cursos')->get();
	
	// Pegar somente um registro da tabela
	// $cursos = DB::table('tb_cursos')->where('cod', 2)->first();
	
	// Pegar somente um campo do registro
	// $cursos = DB::table('tb_cursos')->where('cod', 2)->pluck('curso');
	// $cursos = DB::table('tb_cursos')->where('cod', 2)->lists('curso');

	// $cursos = DB::table('tb_cursos')
	// ->where('cod', 1)
	// ->orWhere('curso', 'Matemática')
	// ->first();

	// $cursos = DB::table('tb_cursos')
	// ->join('tb_aulas', 'tb_aulas.id_curso', '=', 'tb_cursos.cod')
	// ->select('tb_cursos.curso', 'tb_aulas.aula')
	// ->get();

	// $cursos = DB::table('tb_cursos')->whereIn('cod',array(1,2,3))->get();

	// $dados = array(
	// 	'curso' => 'Física'
	// );
	// $cursos = DB::table('tb_cursos')->insert($dados);

	// $dados = array(
	// 	'curso' => 'Química'
	// );
	// $cursos = DB::table('tb_cursos')->where('cod', 4)->update($dados);

	// $cursos = DB::table('tb_cursos')->where('cod', 4)->delete();

	// echo DB::getPdo()->lastInsertId();
	
	// echo '<pre>';
	// print_r($cursos);
// });
