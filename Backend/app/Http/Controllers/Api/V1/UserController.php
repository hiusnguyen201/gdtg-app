<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!$id || is_int($id) || (int)$id < 1) {
            return response()->json([
                "status" => "error",
                "msg" => "Bad request from Id"
            ], 400);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                "status" => "error",
                "msg" => "User not found"
            ], 404);
        }

        return response()->json([
            "status" => "success",
            "data" => $user
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
