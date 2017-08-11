<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthController extends Controller
{

	private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    
    public function index() {
    	return response()->json([
    		'message' => 'Hi bro'
    	]);
    }

    public function register(Request $request) {

        $user = $this->user->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'data' => $user
        ]);
    }


   	public function signin(Request $request) {

        $credentials = $request->only('email', 'password');
        $access_token = null;

        try {
            if (! $access_token = JWTAuth::attempt($credentials))
            {
                return response()->json([
                    'error' => 'invalid_credentials'
                ], 401);
            }
        } catch (JWTException $ex) {
            return response()->json([
                'error' => 'could_not_create_token'
            ], 500);
        }

        $token_type = 'bearer';
        $expires_in = JWTAuth::getPayload($access_token)->get('exp');

        return response()->json(
            compact(['access_token', 'token_type', 'expires_in'])
        );
    }

    public function getAuthUser(Request $request) {
    	
        $user = JWTAuth::toUser($request->access_token);
        return response()->json(['result' => $user]);
    }


}
