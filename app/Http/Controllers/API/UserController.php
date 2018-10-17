<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            $user = User::where("email", $email)->first();
            if ($user) {
                if (Hash::check($password, $user->password)) {
                    return response()->json([
                        'error' => false
                    ], 201);
                } else {
                    return response()->json([
                        'error' => true,
                        'error_msg' => 'رمز عبور نادرست است'
                    ], 201);
                }
            } else {
                return response()->json([
                    'error' => true,
                    'error_msg' => 'چنین کاربری ثبت نشده است'
                ], 201);
            }
        } catch (Exception$exception) {
            return response()->json([
                'error' => true,
                'error_msg' => 'مشکلی بوجود آمده است!'
            ], 201);
        }
    }

    public function register(Request $request)
    {
        try {
            $name = $request->get('name');
            $email = $request->get('email');
            $password = $request->get('password');

            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
            $user->save();

            return response()->json([
                'error' => false
            ], 200);
        } catch (Exception$exception) {
            return response()->json([
                'error' => true,
                'error_msg' => 'مشکلی بوجود آمده است!'
            ], 200);
        }
    }

    public function show($user)
    {
        $user = User::find($user);

        return response()->json([
            'error' => false,
            'user' => $user
        ], 200);
    }

    public function index()
    {
        $users = User::all();

        return response()->json([
            'error' => false,
            'users' => $users
        ], 200);
    }
}
