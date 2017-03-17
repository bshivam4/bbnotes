<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Department;
use App\Subject;
use App\Questionpaper;

use Input;

class QuestionpapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questionpapers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges=College::all();
        $subjects=Subject::all();
        return view('questionpapers.create', compact('colleges','subjects'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $sess=substr($request->session, 5, 2);
        $sub_code=$request->sub_code;
        $exam=$request->exam;
        $semester=$request->semester;
        $sub_name=Subject::where('code',$sub_code)->first();

        $name=$request->college_id.$request->department.$request->semester.$exam.$sess.'_'.$sub_code;

       //dd($ans);

        $filename=$name.'.'. $request->filename->getClientOriginalExtension();

        Questionpaper::create([
            'name'=>$name,
            'college_id'=>$request->college_id,
            'branch'=>$request->department,
            'semester'=>$request->semester,
            'subject'=>$sub_name->name,
            'code'=>$sub_code,
            'exam'=>$request->exam,
            'session'=>$request->session,
            'file'=>$filename,
            ]);

        

        $request->filename->move(public_path('questionpapers'),$filename);
        
        return "Successfully upoaded QP";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$exam.$sess.'_'.$semester.$sub_id
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
