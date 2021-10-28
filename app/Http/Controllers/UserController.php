<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $user = User::find($id);
        $param = [
            'user' => $user
        ];
        return view('users.show', $param);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($user->name !== $request->name) {
            $user->name = $request->name;
        }

        if ($user->email !== $request->email) {
            $user->email = $request->email;
        }

        if ($user->introduction !== $request->introduction) {
            $user->introduction = $request->introduction;
        }

        if (!is_null(request()->file('avatar'))) {
            // アップロードされた時のファイル名を取得
            $fileName = request()->file('avatar')->getClientOriginalName();

            // public/imagesにアップロードされた時の名前で保存
            request()->file('avatar')->storeAs('public/images', $fileName);
        } else {
            $fileName = $user->avatar;
        }
        $user->avatar = $fileName;
        $user->save();
        return redirect()->route('user.update', $user->id);
    }
}
