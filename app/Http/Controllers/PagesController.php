<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Leave;
class PagesController extends Controller
{
    //

    public function dashboard(){
        $leaves=Leave::get();
        return view('pages.index',compact('leaves'));
    }

    public function allEmployees(){
        $employee=Employee::get();
        return view('pages.allemployees',compact('employee'));
    }
    public function addEmployee(){
        return view('pages.addEmployee');
    }
    public function allLeaves(){
        $leaves=Leave::get();
        return view('pages.allLeaves',compact('leaves'));
    }
    public function addLeave(){
        return view('pages.addLeave');
    }
    public function approvedLeave(){
        $approvedleaves=Leave::where('status','Yes')->get();
        return view('pages.approvedLeave',compact('approvedleaves'));
        
    }
    public function pendingLeave(){
        $pendingleaves=Leave::where('status','!=','Yes')->get();
        return view('pages.pendingLeaves',compact('pendingleaves'));
    }
    public function rejectedLeave(){
        return view('pages.rejectedLeave');
    }
}
