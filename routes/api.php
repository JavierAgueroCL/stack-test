<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| auth:api


Para enviar en el post desde el Cliente REST, agregar el Header:
X-Requested-With = XMLHttpRequest

Route::middleware('api')->get('clientes', function (Request $request) {
	$datos = array();

	for($i=0; $i < 22; $i++){
		array_push($datos, array(
			"RecordID"			=>	$i+1,
			"OrderID"				=>	"53150-422",
			"ShipCountry"		=>	"AF",
			"ShipCity"			=>	"Qaram Qōl",
			"ShipName"			=>	"Welch Group",
			"ShipAddress"		=>	"45 Nova Road",
			"CompanyEmail"	=>	"jbutner0@de.vu",
			"CompanyAgent"	=>	"John Butner",
			"CompanyName"		=>	"Bosco-Turner",
			"Currency"			=>	"AFN",
			"Notes"					=>	"platea dictumst morbi ve…ondimentum neque sapien",
			"Department"		=>	"Baby",
			"Website"				=>	"dropbox.com",
			"Latitude"			=>	36.533333,
			"Longitude"			=>	69.016667,
			"ShipDate"			=>	"5/20/2017",
			"PaymentDate"		=>	"2017-03-17 07:39:53",
			"TimeZone"			=>	"Asia/Kabul",
			"Status"				=>	4,
			"Type"					=>	3,
			"TotalPayment"	=>	"80,238.30 AFN"
		));
	}

	$array = array(
		'meta'	=> array(
			'page'		=>	1,
			'pages'		=>	1,
			'perpage'	=>	-1,
			'total'		=>	21,
			'sort'		=>	"asc",
			'field'		=>	"RecordID",
		),
		'data'	=> $datos
	);

	return response()->json($array);
});
*/


Route::resource('clientes', 'ClientesController',['only' => ['index', 'show']]);
