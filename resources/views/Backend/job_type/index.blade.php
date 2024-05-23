@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
                    <h4 class="card-title">Category Page</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="template-demo">
                      <a href="{{route('add.jobs_type')}}"><button type ="button" class="btn btn-primary btn-fw" style ="float:right;">Add job Types</button></a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> job types </th>
                            <th> Action </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @php($i= 1)
                        @foreach($job_type as $row)
    <tr>
        <td>{{$i++}}</td>
        <td>{{ $row->{'job_types'} }}</td>
        <td>
            <a href="{{route('delete.job_type',$row->id)}}" onclick ="return confirm('are you sure you want to delte this category name')" class="btn btn-danger" style = "float:right;">Delete</a>
            <a href="{{route('edit.job_type',$row->id)}}" class="btn btn-info" >Edit</a>
        </td>
    </tr>
@endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>  
                  
@endsection