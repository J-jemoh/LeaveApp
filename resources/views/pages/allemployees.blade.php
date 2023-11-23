@extends('layouts.main')
@section('content')

   <div class="main-panel">
          <div class="content-wrapper bg-secondary">
            <div class="page-header">
              <h3 class="text-dark"> Employees </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All employees</li>
                </ol>
              </nav>
            </div>

            <div class="card bg-light text-dark">
            	<div class="card-header bg-info">
            		<div class="row">
            			<div class="col-6">
            				<b>All Employees</b>
            			</div>
            			<div class="col-6">
            				<a href="{{route('admin.addEmployee')}}" class="btn btn-danger text-white float-end">Add Employee</a>
            			</div>
            		</div>
            	</div>
            	<div class="card-body">
            		<div class="table-responsive">
                      <table class="table table-bordered table-contextual" id="myTable">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Employee ID </th>
                            <th> Employee Name </th>
                            <th> Payroll Number </th>
                            <th> Department </th>
                            <th>Location</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($employee as $emp)
                          <tr class="table-info">
                            <td> {{$emp->id}} </td>
                            <td> {{$emp->empId}} </td>
                            <td> {{$emp->firstname}} {{$emp->lastname}} </td>
                            <td> {{$emp->payroll_num}} </td>
                            <td> {{$emp->department}} </td>
                            <td> {{$emp->location}} </td>
                            <td> 

                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a type="button" class="btn btn-info" href="{{route('admin.emp.view',$emp->id)}}"><i class="mdi mdi-eye"></i></a>
                                  <a type="button" class="btn btn-warning" href="{{route('admin.emp.edit',$emp->id)}}"><i class="mdi mdi-pencil"></i> </a>
                                  <a type="button" class="btn btn-danger" href="{{route('admin.emp.delete',$emp->id)}}" onclick="event.preventDefault(); confirmDelete(this);"> <i class="mdi mdi-delete"></i></a>
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
        <script>
      function confirmDelete(link) {
          if (confirm("Are you sure you want to delete this employee?")) {
              window.location.href = link.href;
          }
      }
</script>

@endsection