<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jobs::all();
//        var_dump($data);
        return view('jobs.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
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
            'nama'=>'required',
        ]);
        $jobs = new Jobs([
            'name' => $request->input('nama')
        ]);
        $jobs->save();

        return redirect('jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Jobs::where('id_jobs', '=', $id)->firstOrFail();
        return view('jobs.edit')->with('jobs', $jobs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required',
        ]);
        $data = [
            'name' => $request->nama,
        ];
        Jobs::where('id_jobs',$id)->update($data);
        return redirect('jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jobs::where('id_jobs',$id)->delete();
        return redirect('jobs');
    }
}
