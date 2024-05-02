<?php

namespace App\Http\Controllers;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class AiController extends Controller
{
    //
    public function View()
    {
        return View('ai');
    }

    public function ask(Request $request)
    {
        
        $request->validate([
            'message' => "required|string"
        ]);

        $result = OpenAI::completions()->create([
            'model' => 'davinci-002',
            'prompt' => $request->message . " the response should be only 100 chars",
        ]);

        return response()->json(["content" => $result['choices'][0]['text']]);
    
 }
}
