<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chatSend(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required|max:10000',
        ]);

        $messages = collect([
            'Salam!',
            'Nə tərsən Coni?',
            'Size necə kömək edə bilərəm?',
        ]);

        return response()->json([
            'message' => $messages->random(),
        ]);
    }
}
