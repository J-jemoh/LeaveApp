<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //

    public function addEmployee(Request $request){

        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'location'=>'required',
            'role'=>'required',
            'email'=>'required',
            'payroln'=>'required',
            'empid'=>'required',
            'dept'=>'required',
            'designation'=>'required',
            'dateemp'=>'required',
            'phonenumber'=>'required'


        ]);
        $employee=Employee::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'location'=>$request->location,
            'role'=>$request->role,
            'email'=>$request->email,
            'empId'=>$request->empid,
            'payroll_num'=>$request->payroln,
            'department'=>$request->dept,
            'designation'=>$request->designation,
            'employ_date'=>$request->dateemp,
            'phonenumber'=>$request->phonenumber,


        ]);
        return redirect()->back()->with('success','Employee added successfully');

    }
    public function viewEmployee($id){
        $emp=Employee::find($id);
        return view('pages.viewEmployee',compact('emp'));

    }
    public function editEmployee($id){
        $emp=Employee::find($id);
        return view('pages.editEmployee',compact('emp'));

    }
    public function updateEmployee(Request $request,$id){
        $emp=Employee::find($id);
        $emp->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'location'=>$request->location,
            'role'=>$request->role,
            'email'=>$request->email,
            'empId'=>$request->empid,
            'payroll_num'=>$request->payroln,
            'department'=>$request->dept,
            'designation'=>$request->designation,
            'employ_date'=>$request->dateemp,
            'phonenumber'=>$request->phonenumber,
        ]);
        return redirect()->back()->with('success',$emp->firstname.' details have been updated successfully.');

    }
    public function deleteEmployee($id){

            $emp=Employee::find($id);
            $emp->delete();
            return redirect()->back()->with('success','Employee details deleted successfully from the system');
    }

}
