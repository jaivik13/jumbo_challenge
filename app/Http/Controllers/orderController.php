<?php

namespace App\Http\Controllers;

use App\model\store\order;

use Illuminate\Http\Request;

class orderController extends Controller
{
    
    public function inventory()
    {
        $order = order::select('status', 'quantity')->get();
        return response()->json($order,200);
    }

    public function create(Request $request)
    {
        $order = order::create($request->all());
        return response()->json(["message" => "Successful"], 200);
    }

    public function view($id)
    {
        $order =  order::where('id', "=", $id)->first();
        if ($id >= 1 && $id <= 10 && $id != 0) {
            if (is_null($order)) {
                return response()->json(["message" => "Record not found"], 404);
            }
            return response()->json($order, 200);
        } else {
            return response()->json(["message" => "integer IDs with value >= 1 and <= 10"], 400);
        }
    }

    public function delete($id)
    {
        $order =  order::where('id', "=", $id)->first();
        if (is_null($order)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        $order->delete();
        return response()->json(["message" => "Remove Successfully"], 200);
    }
}
