<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BarangayController;
use App\Http\Controllers\Api\CommunityTaxCertificateController;
use App\Http\Controllers\Api\PoliceClearanceCertificateController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\PurposeController;
use App\Http\Controllers\Api\RankController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserTypeController;
use App\Http\Controllers\Api\ZoneController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/auth/register', [AuthController::class, 'createUser']);
// Auth
Route::post('/auth/login', [AuthController::class, 'loginUser']);

//User
Route::middleware(['auth:sanctum' , 'verified'])->group(function () {
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);

});

// UserType
Route::get('/usertypes/{id}', [UserTypeController::class, 'show']);
Route::get('/usertypes', [UserTypeController::class, 'index']);
Route::post('/usertypes', [UserTypeController::class, 'store']);
Route::put('/usertypes/{id}', [UserTypeController::class, 'update']);

// Zone
Route::get('/zones/{id}', [ZoneController::class, 'show']);
Route::get('/zones', [ZoneController::class, 'index']);
Route::post('/zones', [ZoneController::class, 'store']);
Route::put('/zones/{id}', [ZoneController::class, 'update']);

// Barangay
Route::get('/barangays/{id}', [BarangayController::class, 'show']);
Route::get('/barangays', [BarangayController::class, 'index']);
Route::post('/barangays', [BarangayController::class, 'store']);
Route::put('/barangays/{id}', [BarangayController::class, 'update']);

// Rank
Route::get('/ranks/{id}', [RankController::class, 'show']);
Route::get('/ranks', [RankController::class, 'index']);
Route::post('/ranks', [RankController::class, 'store']);
Route::put('/ranks/{id}', [RankController::class, 'update']);

// Position
Route::get('/positions/{id}', [PositionController::class, 'show']);
Route::get('/positions', [PositionController::class, 'index']);
Route::post('/positions', [PositionController::class, 'store']);
Route::put('/positions/{id}', [PositionController::class, 'update']);

//Address
Route::get('/addresses/{id}', [AddressController::class, 'show']);
Route::get('/addresses', [AddressController::class, 'index']);
Route::post('/addresses', [AddressController::class, 'store']);
Route::put('/addresses/{id}', [AddressController::class, 'update']);

//Police Clearance Certificate
Route::get('/pcc/{id}', [PoliceClearanceCertificateController::class, 'show']);
Route::get('/pcc', [PoliceClearanceCertificateController::class, 'index']);
Route::post('/pcc', [PoliceClearanceCertificateController::class, 'store']);
Route::put('/pcc/{id}', [PoliceClearanceCertificateController::class, 'update']);

//Purpose
Route::get('/purposes/{id}', [PurposeController::class, 'show']);
Route::get('/purposes', [PurposeController::class, 'index']);
Route::post('/purposes', [PurposeController::class, 'store']);
Route::put('/purposes/{id}', [PurposeController::class, 'update']);

//Community Tax Certificate
Route::get('/ctc/{id}', [CommunityTaxCertificateController::class, 'show']);
Route::get('/ctc', [CommunityTaxCertificateController::class, 'index']);
Route::post('/ctc', [CommunityTaxCertificateController::class, 'store']);
Route::put('/ctc/{id}', [CommunityTaxCertificateController::class, 'update']);