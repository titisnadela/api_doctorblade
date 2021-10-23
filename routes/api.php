<?php

use App\Http\Controllers\DoctorbladeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('doctorblade', DoctorbladeController::class);
Route::post('/doctorblade',[DoctorbladeController::class, 'store']);
Route::get('/doctorblade/search/{nik}', [DoctorbladeController::class, 'search']);

// Route::get('/doctorblade', [DoctorbladeController::class, 'index']);
// function (){
//     //return 'doctorblade';
    
// });


// function(){
//     return Doctorblade::create([
//         'tanggal/jam' => '2021-10-08 14:25:05',
//         'nik' => '1048',
//         'no mesin' => 'P2',
//         'panjang' => '35'
//     ]);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
