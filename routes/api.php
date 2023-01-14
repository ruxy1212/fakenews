<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use Util\CsvParser;
// @include("../util/csv_parser.php");

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

Route::post("/test", function(Request $request){
    // $csv = new CsvParser();
    // $csv = new CsvParser();
    // $file = $request->file('filename'); 
    // // $csv = CsvParser::class, 'parseEmployeeCsv';
    // $payload = json_decode($file->getContent(), true);
    // // return $request; //$csv->parseEmployeeCsv($payload);
    // return $payload; exit;
    // if ($file) {
        // $filename = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
        // $tempPath = $file->getRealPath();
        // $fileSize = $file->getSize(); //Get size of uploaded file in bytes
});

Route::post('/upload-content',[HomeController::class,'uploadContent'])->name('import.content');

Route::post('/uploading',[PostsController::class,'myUpload'])->name('import.content');
