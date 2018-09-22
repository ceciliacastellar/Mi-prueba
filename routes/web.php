<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Ruta de empleados*/
/**moatrar empleados*/
Route::get('empleados', function () {
	$empleados = empleados::all();
    return view('layouts.empleados', ['empleados'=>$empleados]);
});
/*Agregar empleadoss*/
Route::post('empleados', function(Request $request){
	$validator = validator::make($request->all(), [
		'nombre'=> 'required│max:100',
		'apellido'=>'required│max:100',
		'edad'=>'max:3',
		'cargo'=>'required│max:100',
		'email'=>'email',
		'telefono'=>'digits:11',
		'oficina'=>'required│max:100',
		'salario'=>'digits:10'
	]);
	if($validator->fails()){
		return redirect('layouts.empleados')
		->withInput()
		->withErrors($validator);
	}

	$empleados = new empleados;
	$empleados->nombre = $request->nombre;
	$empleados->apellido = $request->apellido;
	$empleados->edad = $request->edad;
	$empleados->cargo = $request->cargo;
	$empleados->direccion = $request->direccion;
	$empleados->email = $request->email;
	$empleados->telefono = $request->telefono;
	$empleados->oficina = $request->oficina;
	$empleados->fecha_inicio = $request->fecha_inicio;
	$empleados->salario = $request->salario;

	$empleados->save();
	return redirect('layouts.empleados');

});
/*Eliminar empleado existente*/
Route::delete('empleados/{id}', function ($id){
	return view('layouts.empleados');

});
/*Route::get('productos', function(){

	return view('layouts.productos')
});*/