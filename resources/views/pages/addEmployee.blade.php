@extends('layouts.main')
@section('content')
  
   <div class="main-panel">
          <div class="content-wrapper bg-secondary">
            <div class="page-header">
              <h3 class="text-dark"> Add Employee </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add employees</li>
                </ol>
              </nav>
            </div>
            @include('messages.flash-message')
            <div class="card bg-light">
            	<div class="card-header bg-info"><b>Add an Employee</b></div>
            	<div class="card-body text-dark">
            		<form class="form-sample" method="POST" action="{{route('admin.emp.add')}}">
            			@csrf
                      <p class="card-description"> <b>Personal info</b> </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="firstname" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="lastname" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control text-white" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control text-white" placeholder="dd/mm/yyyy"  type="date" name="dob" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Location</label>
                            <div class="col-sm-9">
                                <input class="form-control text-white" placeholder="location"  type="text" name="location" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="role" id="membershipRadios1" value="supervisor" checked>Supervisor </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="role" id="membershipRadios2" value="manager">Manager </label>
                              </div>
                            </div>
                             <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="role" id="membershipRadios2" value="employee">Normal Employee </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone number</label>
                            <div class="col-sm-9">
                                <input class="form-control text-white" placeholder="phone"  type="text" name="phonenumber" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> <b>Job Details</b> </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control text-white" name="email" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Payroll Number</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control text-white" name="payroln" required value="{{rand(10001,99999)}}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Employee ID</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="empid" required value="{{rand(1000,9999)}}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="dept" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Designation</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="designation" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date employed</label>
                            <div class="col-sm-9">
                               <input class="form-control text-white" placeholder="dd/mm/yyyy" type="date" name="dateemp" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-4 offset-md-9">
                      		<button type="submit" class="btn btn-danger btn-lg">SAVE EMPLOYEE</button>
                      	</div>
                      </div>
                    </form>
            	</div>
            </div>
        </div>
    </div>
    @endsection