<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobsController extends Controller
{
    public function index()
    {
        $data = Jobs::limit(10)->get();
    
        return response()->json($data);
    }


    public function show($id)
    {
        $data = Jobs::findOrFail($id);
    
        return response()->json($data);
    }
}
