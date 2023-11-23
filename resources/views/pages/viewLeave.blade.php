@extends('layouts.main')
@section('content')
<div class="main-panel">
      <div class="content-wrapper bg-secondary">
      	<div class="page-header">
              <h3 class="text-dark">LEAVE FOR EMPLOYEE {{$leave->payroll_num}}</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">EMPLOYEE {{$leave->payroll_num}} </li>
                </ol>
              </nav>
            </div>
             @include('messages.flash-message')
          <div class="card bg-light">
              <div class="card-header bg-info"><b>YOU ARE VIEWING LEAVE FOR EMPLOYEE {{$leave->payroll_num}}</b></div>
              <div class="card-body text-dark">
                  <div class="row">
                      <div class="col-md-4">
                          <p>Employee Name: </p>
                          <p>Payroll Number: <b>{{$leave->payroll_num}}</b></p>
                          <p>Leave Type: <b>{{$leave->leave_type}} leave.</b></p>
                      </div>
                      <div class="col-md-4">
                          <p>Start Date: <b>{{$leave->startdate}}</b></p>
                          <p>End Date: <b>{{$leave->enddate}}.</b></p>
                          <p>No of Days: <b>{{$leave->days}} days.</b></p>
                      </div>
                      <div class="col-md-4">
                          <p>Hand over to: <b>{{$leave->handOver_name}}</b></p>
                          <p>Hand over phone: <b>{{$leave->handOver_phone}}.</b></p>
                          <p>Department: <b>{{$leave->department}} department.</b></p>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <p><b>Leave application Status</b></p>
                              <p><b class="text-info">Pending</b></p>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="card-footer">
                  <div class="row">
                      <div class="col-md-3 offset-md-1">
                          <button class="btn btn-danger w-100" type="submit">Reject</button>
                      </div>
                      <div class="col-md-3">
                          <a class="btn btn-success w-100 " href="{{route('admin.approve.leave',$leave->id)}}" type="submit">Approve</a>
                      </div>
                      <div class="col-md-3">
                          <a class="btn btn-warning w-100" type="submit" href="{{route('admin.allLeaves')}}">Cancel</a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>


@endsection
