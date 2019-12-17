<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Jobs;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $da = Employees::all();
        return view('')->with('', $ta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $da = Jobs::all();
        return view('')->with('', $ta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'kontak'=>'required',
            'alamat'=>'required',
        ]);
        $employees = new Employees([
            'id_jobs' => $request->input('job'),
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('kontak'),
            'address' => $request->input('alamat')
        ]);
        $employees->save();
        return redirect('employe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Jobs::all();
        $data = Employees::where('id_employees', '=', $id)->firstOrFail();
        return view('')->with('employees', $data)->with('jobs', $jobs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'kontak'=>'required',
            'alamat'=>'required'
        ]);
        $data = [
            'id_jobs' => $request->input('job'),
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('kontak'),
            'address' => $request->input('alamat')
        ];
        Employees::where('id_employees',$id)->update($data);
        return redirect('employ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employees::where('id_employees',$id)->delete();
        return redirect('employe');
    }
}
