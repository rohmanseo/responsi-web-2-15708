<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Employees;
use App\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    public function index()
    {
        $data = Employees::limit(10)->get();
    
        return response()->json($data);
    }


    public function show($id)
    {
        $data = Employees::findOrFail($id);
    
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job'=>'required',
            'nama'=>'required|min:5|max:255',
            'email'=>'required|email|unique:employees',
            'kontak'=>'required',
            'alamat'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $data = [
            'id_jobs' => $request->input('job'),
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('kontak'),
            'address' => $request->input('alamat')
        ];

        Employees::create($data);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'job'=>'required',
            'nama'=>'required|min:5|max:255',
            'email'=>'required|email',
            'kontak'=>'required',
            'alamat'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $data = [
            'id_jobs' => $request->input('job'),
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('kontak'),
            'address' => $request->input('alamat')
        ];

        Employees::where('id_employees',$id)->update($data);
        
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {
        Employees::where('id_employees',$id)->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
