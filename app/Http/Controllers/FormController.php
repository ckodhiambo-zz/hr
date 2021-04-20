<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use App\Models\KinInfo;
use App\Models\HelbInfo;


use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('multi-step-form');
    }

    public function formSubmit(Request $request)
    {
//        $request->file->store('public');
//        return "Details have been uploaded succesfully!";
        $request->session()
            ->reflash();
        $personalInfo = PersonalInfo::create($request->all());

        return "Details have been uploaded succesfully!";


//        return $request->all();
    }
}
