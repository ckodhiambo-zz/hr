<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;



class EmpController extends Controller
{
    //
    public function getAllEmployees()
    {
        $employees = Employee::all();
        return view('single-post',compact('employees'));
    }
    public function downloadPDF($id)
    {
        $employee = Employee::find($id);
        $pdf = PDF::loadView('single-post', compact('employee'));
        return $pdf -> download('employee_details.pdf');
    }
}
