<?php

namespace App\Http\Controllers;

use App\model\pet;
use Illuminate\Http\Request;


class petController extends Controller
{


    public function viewPet($id)
    {

        $pet =  pet::where('id', "=", $id)->first();
        if (is_null($pet)) {
            return response()->json(["message" => "Record not found"], 404);
        }

        return response()->json($pet, 200);
    }


    public function updatePet(Request $request, $id)
    {

        $pet =  pet::where('id', "=", $id)->first();
        if (is_null($pet)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        $pet->update($request->all());
        return response()->json(["message" => "update successfully"], 200);
    }


    public function deletPet($id)
    {
        $pet =  pet::where('id', "=", $id)->first();
        if (is_null($pet)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        $pet->delete();
        return response()->json(["message" => "delete successfully"], 200);
    }


    public function uploadimgPet(Request $request, $id)
    {

        $pet =  pet::where('id', "=", $id)->first();
        if (is_null($pet)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        $pet->update($request->all());
        return response()->json(["message" => "update successfully"], 200);
    }



    public function createPet(Request $request)
    {
        $order = pet::create($request->all());
        return response()->json(["message" => "created successfully"], 200);
    }


    public function updateallPet(Request $request, $id)
    {

        $pet =  pet::where('id', "=", $id)->first();
        if (is_null($pet)) {
            return response()->json(["message" => "Record not found"], 404);
        }

        $pet->update($request->all());

        return response()->json(["message" => "update successfully"], 200);
    }



    public function findByStatus($Status)
    {

        $pet =  pet::where('Status', "=", $Status)->first();
        if (is_null($pet)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        return response()->json($pet,200);
    }
}
