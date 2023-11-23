@extends('layouts.main')
@section('content')

   <div class="main-panel">
          <div class="content-wrapper bg-secondary">
            <div class="page-header">
              <h3 class="text-dark">LEAVES </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All LEAVES</li>
                </ol>
              </nav>
            </div>

            <div class="card bg-light text-dark">
            	<div class="card-header bg-info">
            		<div class="row">
            			<div class="col-6">
            				<b>All LEAVES</b>
            			</div>
            			<div class="col-6">
            				<a href="{{route('admin.addLeave')}}" class="btn btn-danger text-white float-end">Add LEAVE</a>
            			</div>
            		</div>
            	</div>
            	<div class="card-body">
            		<div class="table-responsive">
                      <table class="table table-bordered table-contextual" id="myTable">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Leave Type </th>
                            <th>Employee </th>
                            <th>Start Date </th>
                            <th>End Date </th>
                            <th>Days</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($leaves as $leave)
                          <tr class="table-info">
                            <td> {{$leave->id}} </td>
                            <td> {{$leave->leave_type}} </td>
                            <td> {{$leave->payroll_num}} </td>
                            <td> {{$leave->startdate}}</td>
                            <td> {{$leave->enddate}} </td>
                            <td> {{$leave->days}} </td>
                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                  <a type="button" class="btn btn-info" href="{{route('admin.leave.view',$leave->id)}}}}"><i class="mdi mdi-eye"></i></a>
                                  <a type="button" class="btn btn-warning" href="#"><i class="mdi mdi-pencil"></i> </a>
                                  <a type="button" class="btn btn-danger" href="#" onclick="event.preventDefault(); confirmDelete(this);"> <i class="mdi mdi-delete"></i></a>
                                </div>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
            	</div>
            </div>
            </div>
        </div>


@endsection
