<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;

class LeavesController extends Controller
{
    //

    public function addLeave(Request $request){

        $this->validate($request,[
            'pnum'=>'required',
            'ltype'=>'required',
            'sdate'=>'required',
            'edate'=>'required',
            'rdate'=>'required',
            'ldays'=>'required',
            'handname'=>'required',
            'handphone'=>'required',
            'handdpt'=>'required',
            'ltaken'=>'required',


        ]);
        $leaves=Leave::create([
            'payroll_num'=>$request->pnum,
            'leave_type'=>$request->ltype,
            'startdate'=>$request->sdate,
            'enddate'=>$request->edate,
            'return_date'=>$request->rdate,
            'days'=>$request->ldays,
            'handOver_name'=>$request->handname,
            'handOver_phone'=>$request->handphone,
            'department'=>$request->handdpt,
            'approved_by'=>$request->lapprove,
            'status'=>$request->lstatus,
            'date'=>$request->date,
            'signature'=>$request->lsignature,
            'reason'=>$request->lreason,
            'last_taken'=>$request->ltaken,


        ]);
        return redirect()->back()->with('success','Leave applied successfully');
    }
    public function viewLeave($id){
        $leave=Leave::find($id);
        return view('pages.viewLeave',compact('leave'));

    }
    public function approveLeave($id){
        $user=auth()->user()->name;
        $leave=Leave::find($id)->update([
            'status'=>'Yes',
            'approved_by'=>$user,
            'date'=> now(),
            'signature'=>$user,
        ]);
        return redirect()->back()->with('success','Leave approved successfully');
    }
 
}
