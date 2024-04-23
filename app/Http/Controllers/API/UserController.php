<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $arr =[
            'data' => $user,
            'status' => 200,
            'message' => 'List of Users'
        ];
        return response()->json($arr, Response::HTTP_OK);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $arr =[
            'data' => $user,
            'status' => 201,
            'message' => 'User created successfully'
        ];
        return response()->json($arr, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['message' => 'User not found'], 404);
        }
        $arr =[
            'data' => $user,
            'status' => 200,
            'message' => 'User retrieved successfully'
        ];
        return response()->json($arr, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $input = $request->all();
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['message' => 'User not found'], 404);
        }
        $input['password'] = Hash::make($input['password']);
        $user->update($input);
        $arr =[
            'data' => $user,
            'status' => 200,
            'message' => 'User updated successfully'
        ];
        return response()->json($arr, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->delete();
        $arr =[
            'data' => $user,
            'status' => 200,
            'message' => 'User deleted successfully'
        ];
        return response()->json($arr, Response::HTTP_OK);
    }
}
