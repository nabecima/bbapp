<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $tweet = new Tweet();
        $tweet->body = $request->body;
        $tweet->user_id = Auth::id();
        $tweet->save();
        return response()->json([
            'id' => $tweet->id,
            'user_id' => $tweet->user->id,
            'body' => $tweet->body,
            'name' => $tweet->user->name,
            'avatar' => $tweet->user->avatar
        ]);
    }

    public function destroy($id)
    {
        Tweet::destroy($id);
        return response()->json([
            'message' => 'ok'
        ]);
    }
}
