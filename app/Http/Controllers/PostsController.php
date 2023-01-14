<?php

namespace App\Http\Controllers;

use CsvParser;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function myUpload(Request $request){
        // $csv = new CsvParser();
        // // $file = $request->file('filename'); 
        // // if ($file) {
        // //     $filename = $file->getClientOriginalName();
        // //     $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
        // //     $tempPath = $file->getRealPath();
        // //     $fileSize = $file->getSize(); //Get size of uploaded file in bytes

        // //     return $filename.', '.$extension.', '.$tempPath.', '.$fileSize;
        //     // $payload = json_decode($file->getContent(), true);
        //     // return $payload;
        //     <?php

        //     namespace App\Http\Controllers;
            
        //     use CsvParser;
        //     use Illuminate\Http\Request;
        //     use App\Http\Controllers\Response;
        //     use App\Models\Employee;
            
        //     class EmployeeController extends Controller
        //     {
        //         public function addEmpCSV(Request $request)
        //         {
        //             //$requst->query('type');
        //             $file = $request->file('file');
            
        //             if($file){
        //                 // $this->validate($request, [
        //                 request()->validate([
        //                     'file' => 'mimes:csv,txt'
        //                 ]);
        //                 //return $file; exit;
            
        //                 $filename = $file->getClientOriginalName();
        //                 $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
        //                 $tempPath = $file->getRealPath();
        //                 // return $extension; exit;
                        
        //                 if($extension == "csv"){
        //                     $file = file($tempPath);
        //                     //remove first line
        //                     $data = array_slice($file, 1);
        //                     $parts = (array_chunk($data, 1000));
        //                     $i = 1;
        //                     foreach($parts as $line) {
        //                         $filename = base_path('resources/pendingemployee/'.date('y-m-d-H-i-s').$i.'.csv');
        //                         file_put_contents($filename, $line);
        //                         $i++;
        //                     }
            
                            //set the path for the csv files
                    //         $path = base_path("resources/pendingemployee/*.csv");
            
                    //         //run 2 loops at a time
                    //         foreach (array_slice(glob($path),0,2) as $file) {
            
                    //         //read the data into an array
                    //         $data = array_map('str_getcsv', file($file));
            
                    //         //loop over the data
                    //         foreach($data as $row) {
            
                    //             //insert the record or update if the email already exists to avoid duplicate invites
                    //             Employee::updateOrcreate([
                    //                 'email' => $row[0],
                    //                 'fullname' => $row[1],
                    //                 'username' => $row[2]
                    //             ]);
                    //         }
            
                    //         // delete the file
                    //         $final_action = unlink($file);
            
                    //         if($final_action){
                    //             return "yes";
                    //         }else {
                    //             return "no";
                    //         }
                    //     }
            
            
            
            
            
                    //         // $payload = file_get_contents($file);
                    //         // return $payload;
                    //         // $array = array_map('str_getcsv', explode(PHP_EOL, $payload));
                    //         // return $array;
                    //         // $json = json_decode($array, true);
                    //         // return $json;
                    //     }            
                        
            
            
            
            
                    // }
            
            
                    // $csv = new CsvParser;
                    // // $payload = $request->all(); //getContent();
                    // $payload = $request->getContent();
                    // $payload = json_decode($payload, true);
            
                    // $content = json_decode($request->file('attachments'), true);
                    // $responsee = $csv->parseEmployeeCsv($content);
                    // // return $responsee;
                    // return $content;
                    // return $content;
                    // $content = $request->getContent();
                    // $payload = json_decode($request->all(), true);
            
                    // dd($content);
                    // $payload = json_decode($content, true);
                    // dd($payload);
                    // $payload = json_decode($request->getContent(), true);
            
            
                    // return $csv->parseEmployeeCsv($payload);
            
                    // $file = $request->file('filename');
                    // $csvv = file_get_contents($file);
                    // $payload = $csvv;
                    // return $csv->parseEmployeeCsv($payload);
            
                    // $array = array_map('str_getcsv', explode(PHP_EOL, $csv));
                    // $json = json_encode($array);
                    // return $json;
                    // return $csv;
                    // if ($file) {
                    //     $filename = $file->getClientOriginalName();
                    //     $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
                    //     $tempPath = $file->getRealPath();
                    //     $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            
                    //     if($extension == 'csv'){
            
                    //     }
                    // }
            
            
                    // $payload = json_decode($request->getContent(), true);
                    // return $csv->parseEmployeeCsv($payload);
                    // return $filename.$extension.' : '.$tempPath.$fileSize; //$payload;
                    // return response()->json([
                    //     'slackUsername' => 12,//$second_index.",,".count($num_arr), //"ruxy1212",
                    //     'result' => 32,//$result,
                    //     'operation_type' => 32//$op
                    // ]);
                    
                // }
            
                // public function testCSV(Request $request) 
                // {
                //     $file = $request->file('file');
                //     if($file){
                //         $filename = $file->getClientOriginalName();
                //         $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
                //         $tempPath = $file->getRealPath();
                //         $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            
                //         $this->checkUploadedFileProperties($extension);
            
                //         $file = fopen($filename, "r");
                //         $importData_arr = array();
                //         $i=0;
                //         while(($filedata = fgetcsv($file, 1000, ",")) !== FALSE){
                //             if($i==0){ 
                //                 $i++;
                //                 continue;
                //             }
                //             for ($c = 0; $c < $num; $c++){
                //                 $importData_arr[$i][] = $filedata[$c];
                //             }
                //             $i++;
                //         }
                //         fclose($file);
            
                //         $j=0;
                //         foreach($importData_arr as $importData){
                //             $name = $importData[i];
                //             $email = $importData[2];
                //             //...
                //             $j++;
                //             try{
                //                 DB::beginTransaction();
                //                 Employee::create([
                //                     'email' => $importData[0],
                //                     'fullname' => $importData[1],
                //                     'username' => $importData[2]
                //                 ]);
                //                 DB::commit();
                //             }
                //             catch(\Exception $e){
                //                 DB::rollback();
                //             }
                //         }
                //         return response()->json([
                //             'message' => "$j records successfully uploaded"
                //         ]);
                //     } else {
                //         throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
                //     }
            
                // }
            
                // public function checkProperties($request_extension){
                //     $valid_extension = ['csv', 'xlsx'];
                //     if(!in_array(strtolower($request_extension), $valid_extension)){
                //         throw new \Exception();
                //     }       
                // }
            
            //     public function base64(Request $request){
            //         // $file = $request->file('csv_file');
            //         $csv = new CsvParser();
            //         $file = json_decode($request->getContent(), true);
                    
            //         // $file = $request->input('file');
            //         if($file){
            //             $file = $file['csv_file']; //$request->input('file');
            //             $res = $csv->parseEmployeeCsv($file);
                        
            //             $json = $res['data'];
            //             // return $json;
            
            //             return Employee::create($json);
            
            
            //             // $pos = strpos($b64, ';');
            //             // if($pos !== FALSE){
            //             //     $b64  = base64_decode(preg_replace('#^data:text/\w+;base64,#i', '', $b64));
            //             // }
            
            //             //$array = str_getcsv($b64);
            //             // return $array;
            //             // return response()->json([
            //             //     'message' => "Records successfully uploaded"
            //             // ]); exit;
            //         }
                    
            //     }
            // }
            
            // $payload = json_decode($csv->getContent(), true);
            // return $csv->parseEmployeeCsv($payload);
            // return $payload; exit;

        //     exit;
        // }
    // // $csv = CsvParser::class, 'parseEmployeeCsv';
    // // return $request; //$csv->parseEmployeeCsv($payload);
    // return $payload; exit;


//     <?php

// namespace App\Http\Controllers;

// use CsvParser;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Response;
// use App\Models\Employee;

// class EmployeeController extends Controller
// {
//     public function addEmpCSV(Request $request)
//     {
//         if($request->query('type') == "csv"){
//             $csv = new CsvParser();
//             $file = json_decode($request->getContent(), true);
            
//             if($file){
//                 $file = $file['csv_file'];
//                 $result = $csv->parseEmployeeCsv($file); 
//                 if($result["error"] == false && $result["message"] == "csv parsed"){
//                     $json = $result['data'];
//                     $employee = Employee::create($json);
//                     if($employee){
//                         return sendResponse(true, 200, "Employee CSV Uploaded Successfully", $employee);
//                     }else{
//                         return sendResponse(true, 500, "Database Insert Error", $employee);
//                     }
//                 } else {
//                     //invalid file type
//                     return sendResponse(true, 400, "Invalid File Type", $result["error"]);
//                 }
//             }   
//         }     
//     }
// }

    
    }

    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}









