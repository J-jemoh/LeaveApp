@extends('layouts.main')
@section('content')

   <div class="main-panel">
          <div class="content-wrapper bg-secondary">
            <div class="page-header">
              <h3 class="text-dark"> Add LEAVE </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add LEAVE</li>
                </ol>
              </nav>
            </div>
            @include('messages.flash-message')
            <div class="card bg-light">
            	<div class="card-header bg-info"><b>Add a Leave</b></div>
            	<div class="card-body text-dark">
            		<form class="form-sample" method="POST" action="{{route('admin.leave.apply')}}">
            			@csrf
                      <p class="card-description"> <b>Leave details</b> </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Payroll Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="pnum" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Leave Type</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="ltype" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9">
                              <input class="form-control text-white" placeholder="dd/mm/yyyy"  type="date" name="sdate"  required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9">
                              <input class="form-control text-white" placeholder="dd/mm/yyyy"  type="date" name="edate" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Return Date</label>
                            <div class="col-sm-9">
                               <input class="form-control text-white" placeholder="dd/mm/yyyy"  type="date" name="rdate" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No of days</label>
                            <div class="col-sm-9">
                             <input type="text" class="form-control text-white" name="ldays" required />
                            </div>
                            
                          </div>
                        </div>
                      </div>
                           <p class="card-description"> <b>Hand Over section</b> </p>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hand over to?(Name)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="handname" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="handphone" required />
                            </div>
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                       
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="handdpt" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Taken date</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control text-white" name="ltaken" required />
                            </div>
                          </div>
                        </div>
                      </div> 
                      <p class="card-description"> <b>Supervisor Section</b> </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Approve/Reject</label>
                            <div class="col-sm-9">
                              <select class="form-control text-white" name="lstatus">
                                
                                <option value="approved">Aproved</option>
                                <option value="rejected">Rejected</option>
                              </select>
                            
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date </label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control text-white" name="dapprove" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6" >
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Supervisor Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="lapprove"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Signature</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="lsignature"  />
                            </div>
                          </div>
                        </div>
                      
                      </div>
                      <div class="row">
                        <div class="col-md-6" >
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Reason</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="lreason" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-4 offset-md-9">
                      		<button type="submit" class="btn btn-danger btn-lg">APPLY LEAVE</button>
                      	</div>
                      </div>
                    </form>
            	</div>
            </div>
        </div>
    </div>

    @endsection
  
 