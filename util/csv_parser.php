<?php

// namespace Util;
/**
 * Parse CSV file to JSON.
 * 
 * The below method converts a valid csv file from a base64 string having the following fields (S/N, full name, username, email) to a valid json output.
 * 
 * It returns an object with the following properties
 * 
 * - error <boolean>
 * - data <array || null>
 * - message <status message>
 * 
 * If an invalid csv file is uploaded, it set error property to true and a message with 'invalid csv file".
 * 
*/

class CsvParser{

    private $res = [
        "error"=> false,
        "data"=> null,
        "message"=>""
    ];

    private function parseBase64($b64){
        // extract file type from base64 url
        $data = explode(",",  $b64);
        $type = $data[0];

        if(!str_contains($type, "text/csv")){
            $this->res["error"] = true;
            $this->res["message"] = "Invalid file type";
            return $this->res;
        }

        // extract base64 part of the string
        $csvData = $data[1];
        $this->res["error"] = false;
        $this->res["data"] = base64_decode($csvData);
        return $this->res;
    }
    
    public function parseEmployeeCsv($b64){
        
        $oup = $this->parseBase64($b64);
        
        if($oup["error"]){
            return $oup;
        }
        $csvData = $oup["data"];
        $splitData = explode("\n", $csvData);
        $slicedData = array_slice(array_chunk($splitData, 4)[0], 1);
        $finalJsonData = [];

        foreach($slicedData as $val){
            $ext = explode(",", str_replace("\r", "", $val));
            $item = array_slice($ext, 1);
            $arr = [
                "fullname"=> $item[0],
                "username"=> $item[1],
                "email"=> $item[2]
            ];
            array_push($finalJsonData, $arr);
        }
        
        $this->res["error"] = false;
        $this->res["message"] = "csv parsed";
        $this->res["data"] = $finalJsonData;

        return $this->res;
    }

}