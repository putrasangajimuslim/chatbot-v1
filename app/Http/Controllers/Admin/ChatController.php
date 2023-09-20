<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function index() {
        return view('admin.chat.index');
    }

    public function getQuestionAnswerOpenAi(Request $request) {
        $apiKeyOpenAi = '';

        // $prompt = 'perbedaan sapi dan kerbau';

        $openaiApiUrl = 'https://api.openai.com/v1/chat/completions';

        $data = [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                ["role" => "user", "content" => "Say this is a test!"]
            ],
            "temperature" => 0.7
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiKeyOpenAi,
        ])->post($openaiApiUrl, $data);

        $responseData = $response->json();

        // Handle the response data as needed
        return response()->json($responseData);
    }
}
