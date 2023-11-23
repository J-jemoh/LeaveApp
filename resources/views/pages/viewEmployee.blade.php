@extends('layouts.main')
@section('content')
  <div class="main-panel">
      <div class="content-wrapper bg-secondary">
      	<div class="page-header">
              <h3 class="text-dark">EMPLOYEE  {{$emp->firstname}} {{$emp->lastname}} </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">EMPLOYEE {{$emp->firstname}} {{$emp->lastname}} </li>
                </ol>
              </nav>
            </div>
            <div class="card bg-light">
            	<div class="card-header bg-info"><b>You are viewing {{$emp->firstname}} {{$emp->lastname}} Profile </b></div>
            	<div class="card-body text-dark">
            		<div class="row">
            			<div class="col-4">
            				<p><b>Firstname:</b> {{$emp->firstname}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Lastname:</b> {{$emp->lastname}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>D.O.B:</b> {{$emp->dob}}</p>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-4">
            				<p><b>Location:</b> {{$emp->location}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Role:</b> {{$emp->role}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Email address:</b> {{$emp->email}}</p>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-4">
            				<p><b>Payrol Number:</b> {{$emp->payroll_num}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Employee Id:</b> {{$emp->empId}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Department:</b> {{$emp->department}}</p>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-4">
            				<p><b>Designation:</b> {{$emp->designation}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Employ Date:</b> {{$emp->employ_date}}</p>
            			</div>
            			<div class="col-4">
            				<p><b>Contact:</b> {{$emp->phonenumber}}</p>
            			</div>
            		</div>
            	</div>
            </div>
          </div>
    </div>

@endsection