@extends('layouts.main')
@section('content')

   <div class="main-panel">
          <div class="content-wrapper bg-secondary">
            <div class="page-header">
              <h3 class="text-dark">REJECTED LEAVES </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">REJECTED LEAVES</li>
                </ol>
              </nav>
            </div>

            <div class="card bg-light text-dark">
            	<div class="card-header bg-info">
            		<div class="row">
            			<div class="col-6">
            				<b>REJECTED LEAVES</b>
            			</div>
            			<div class="col-6">
            				{{-- <a href="{{route('admin.addLeave')}}" class="btn btn-danger text-white float-end">Add LEAVE</a> --}}
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
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-info">
                            <td> 1 </td>
                            <td> 1 </td>
                            <td> 1 </td>
                            <td> 1 </td>
                            <td> May 15, 2015 </td>
                            <td> May 15, 2015 </td>
                            <td> May 15, 2015 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
            	</div>
            </div>
            </div>
        </div>


@endsection