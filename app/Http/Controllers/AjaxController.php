<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class AjaxController extends Controller
{
    public function getsem(Request $request)
    {
    	$sem=Subject::select('semester')->where([
            ['department_code', $request->departmentcode],
            ])->distinct()->orderBy('semester')->get();
    	return view('ajax.getsem', compact('sem'));    	
    	
    }

    public function getsubject(Request $request)
    {
    	$subjects=Subject::where([
    		['department_code', $request->departmentcode],
    		['semester', $request->semester],
    		])->distinct()->get();
    	return view('ajax.getsubject', compact('subjects'));    	
    	
    }

    public function demo($data)
    {
        return "ABC".$data;      
        
    }
}
