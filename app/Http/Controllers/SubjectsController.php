<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Department;
use App\Subject;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges=College::all();
        $departments=Department::all();
        return view('subjects.create', compact('colleges', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
        
        'college' => 'required|',
        'department' => 'required|',
        'semester' =>'required ',
        'code' => 'required|',
        'name' => 'required|',
        ]);

       if(Subject::create([
            'department_code'=>$request->department,
            'semester'=>$request->semester,
            'code'=>$request->code,
            'name'=>$request->name,            
            ]))        
            return "Successfully Added Subject";
       
       // $file=public_path('questionpapers/1CSE6B14_NCS-601.doc');
       // $userfile='abc.doc';
       // return response()->download($file, $userfile);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
