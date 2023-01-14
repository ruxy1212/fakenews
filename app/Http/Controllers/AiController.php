<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class AiController extends Controller
{
    public function index(){
        return view('ai.index');
    }
    public function result(Request $request){
        $topic = $request->topic;
        $keyword = "Create 5 fake news topics about $topic";
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));
        $open_ai_output = $open_ai->complete([
            'engine' => 'davinci-instruct-beta-v3',
            'prompt' => $keyword,
            'temperature' => 0.9,
            "max_tokens" => 150,
            "frequency_penalty" => 0,
            "presence_penalty" => 0.6,
        ]);

        $output = json_decode($open_ai_output, true);

        return view('ai.index', ['result' => $output['choices'][0]['text']]); //"Yessir";
    }
    public function chat(Request $request){
        $topic = $request->chat;
        $keyword = $topic;
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));
        $open_ai_output = $open_ai->complete([
            'engine' => 'davinci-instruct-beta-v3',
            'prompt' => $keyword,
            'temperature' => 0.9,
            "max_tokens" => 150,
            "frequency_penalty" => 0,
            "presence_penalty" => 0.6,
        ]);

        $output = json_decode($open_ai_output, true);

        return view('ai.index', ['chat' => $output['choices'][0]['text']]); //"Yessir";
    }
}
