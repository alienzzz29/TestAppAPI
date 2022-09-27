<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BarangayController;
use App\Http\Controllers\Api\CommunityTaxCertificateController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\PoliceClearanceCertificateController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\PurposeController;
use App\Http\Controllers\Api\RankController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserTypeController;
use App\Http\Controllers\Api\ZoneController;
use App\Http\Controllers\Api\ApplicantController;
use App\Http\Controllers\Api\ApplicantDetailsController;
use App\Http\Controllers\Api\CrimeOffenseController;
use App\Http\Controllers\Api\CriminalRecordsController;
use App\Http\Controllers\Api\OICController;
use App\Http\Controllers\Api\PoliceClearanceCertificateDetailsController;
use App\Http\Controllers\Api\PoliceOfficerController;

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
// Route::middleware(['auth:sanctum' , 'verified'])->group(function () {
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);
// });

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
Route::delete('/zones/{id}', [ZoneController::class, 'destroy']);
// Barangay
Route::get('/barangays/{id}', [BarangayController::class, 'show']);
Route::get('/barangays', [BarangayController::class, 'index']);
Route::post('/barangays', [BarangayController::class, 'store']);
Route::put('/barangays/{id}', [BarangayController::class, 'update']);
Route::delete('/barangays/{id}', [BarangayController::class, 'destroy']);
// Rank
Route::get('/ranks/{id}', [RankController::class, 'show']);
Route::get('/ranks', [RankController::class, 'index']);
Route::post('/ranks', [RankController::class, 'store']);
Route::put('/ranks/{id}', [RankController::class, 'update']);
Route::delete('/ranks/{id}', [RankController::class, 'destroy']);
// Position
Route::get('/positions/{id}', [PositionController::class, 'show']);
Route::get('/positions', [PositionController::class, 'index']);
Route::post('/positions', [PositionController::class, 'store']);
Route::put('/positions/{id}', [PositionController::class, 'update']);
Route::delete('/positions/{id}', [PositionController::class, 'destroy']);
//Address
Route::get('/addresses/{id}', [AddressController::class, 'show']);
Route::get('/addresses', [AddressController::class, 'index']);
Route::post('/addresses', [AddressController::class, 'store']);
Route::put('/addresses/{id}', [AddressController::class, 'update']);
Route::delete('/addresses/{id}', [AddressController::class, 'destroy']);
//Police Clearance Certificate
Route::get('/pcc/{id}', [PoliceClearanceCertificateController::class, 'show']);
Route::get('/pcc', [PoliceClearanceCertificateController::class, 'index']);
Route::post('/pcc', [PoliceClearanceCertificateController::class, 'store']);
Route::put('/pcc/{id}', [PoliceClearanceCertificateController::class, 'update']);
Route::delete('/pcc/{id}', [PoliceClearanceCertificateController::class, 'destroy']);
//Purpose
Route::get('/purposes/{id}', [PurposeController::class, 'show']);
Route::get('/purposes', [PurposeController::class, 'index']);
Route::post('/purposes', [PurposeController::class, 'store']);
Route::put('/purposes/{id}', [PurposeController::class, 'update']);
Route::delete('/purposes/{id}', [PurposeController::class, 'destroy']);
//Community Tax Certificate
Route::get('/ctc/{id}', [CommunityTaxCertificateController::class, 'show']);
Route::get('/ctc', [CommunityTaxCertificateController::class, 'index']);
Route::post('/ctc', [CommunityTaxCertificateController::class, 'store']);
Route::put('/ctc/{id}', [CommunityTaxCertificateController::class, 'update']);
Route::delete('/ctc/{id}', [CommunityTaxCertificateController::class, 'destroy']);
//Payment
Route::get('/payments/{id}', [PaymentController::class, 'show']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::post('/payments', [PaymentController::class, 'store']);
Route::put('/payments/{id}', [PaymentController::class, 'update']);
Route::delete('/payments/{id}', [PaymentController::class, 'destroy']);
//Applicant
Route::get('/applicants/{id}', [ApplicantController::class, 'show']);
Route::get('/applicants', [ApplicantController::class, 'index']);
Route::post('/applicants', [ApplicantController::class, 'store']);
Route::put('/applicants/{id}', [ApplicantController::class, 'update']);
Route::delete('/applicants/{id}', [ApplicantController::class, 'destroy']);
// //Findings
// Route::get('/findings/{id}', [FindingsController::class, 'show']);
// Route::get('/findings', [FindingsController::class, 'index']);
// Route::post('/findings', [FindingsController::class, 'store']);
// Route::put('/findings/{id}', [FindingsController::class, 'update']);
// Route::delete('/findings/{id}', [FindingsController::class, 'destroy']);
//Police Clearance Certificate Details
Route::get('/pccd/{id}', [PoliceClearanceCertificateDetailsController::class, 'show']);
Route::get('/pccd', [PoliceClearanceCertificateDetailsController::class, 'index']);
Route::post('/pccd', [PoliceClearanceCertificateDetailsController::class, 'store']);
Route::put('/pccd/{id}', [PoliceClearanceCertificateDetailsController::class, 'update']);
Route::delete('/pccd/{id}', [PoliceClearanceCertificateDetailsController::class, 'destroy']);
//OIC
Route::get('/oic/{id}', [OICController::class, 'show']);
Route::get('/oic', [OICController::class, 'index']);
Route::post('/oic', [OICController::class, 'store']);
Route::put('/oic/{id}', [OICController::class, 'update']);
Route::delete('/oic/{id}', [OICController::class, 'destroy']);
//Police Officer
Route::get('/police/{id}', [PoliceOfficerController::class, 'show']);
Route::get('/police', [PoliceOfficerController::class, 'index']);
Route::post('/police', [PoliceOfficerController::class, 'store']);
Route::put('/police/{id}', [PoliceOfficerController::class, 'update']);
Route::delete('/police/{id}', [PoliceOfficerController::class, 'destroy']);
//Criminal Records
Route::get('/cr/{id}', [CriminalRecordsController::class, 'show']);
Route::get('/cr', [CriminalRecordsController::class, 'index']);
Route::post('/cr', [CriminalRecordsController::class, 'store']);
Route::put('/cr/{id}', [CriminalRecordsController::class, 'update']);
Route::delete('/cr/{id}', [CriminalRecordsController::class, 'destroy']);
//Applicant Details
Route::get('/applicant-details/{id}', [ApplicantDetailsController::class, 'show']);
Route::get('/applicant-details', [ApplicantDetailsController::class, 'index']);
Route::post('/applicant-details', [ApplicantDetailsController::class, 'store']);
Route::put('/applicant-details/{id}', [ApplicantDetailsController::class, 'update']);
Route::delete('/applicant-details/{id}', [ApplicantDetailsController::class, 'destroy']);
// //Criminal Records Details
// Route::get('/crd/{id}', [CriminalRecordsDetailsController::class, 'show']);
// Route::get('/crd', [CriminalRecordsDetailsController::class, 'index']);
// Route::post('/crd', [CriminalRecordsDetailsController::class, 'store']);
// Route::put('/crd/{id}', [CriminalRecordsDetailsController::class, 'update']);
// Route::delete('/crd/{id}', [CriminalRecordsDetailsController::class, 'destroy']);
//Crime Offense
Route::get('/co/{id}', [CrimeOffenseController::class, 'show']);
Route::get('/co', [CrimeOffenseController::class, 'index']);
Route::post('/co', [CrimeOffenseController::class, 'store']);
Route::put('/co/{id}', [CrimeOffenseController::class, 'update']);
Route::delete('/co/{id}', [CrimeOffenseController::class, 'destroy']);