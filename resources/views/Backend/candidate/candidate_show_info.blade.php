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

<form method = "get" action = "" >
<input type = "text"  class = "form-controll" name = "keyword" id ="keyword" placeholder = "keyword">
<button class = "btn btn-primary">Search </button>
</form>








<div class = "card">

            <div class="card-body">
            <td><a href=" {{ route('export') }} "  class="btn btn-success" style ="float:right;" >export to excel</a></td>
                    <h4 class="card-title">Candidte Job Info Section</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="template-demo">
                      <!-- <a href="{{route('create.jobs')}}"><button type ="button" class="btn btn-primary btn-fw" style ="float:right;">Add jobs</button></a> -->
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Job Title</th>
                            <th> Name</th>
                            <th> Father Name </th>
                            <th> Emial </th>
                            <th>Phone Number</th>
                            <th>City</th>
                            <th>Gender</th>
                            <th>PExperience</th>
                            <th>Skills</th>
                            <th>View</th>
                            <th>donwload</th>
                           

                    
                            <!-- <th> Action </th> -->
                            
                          </tr>
                        </thead>
                        <tbody>
                          @php($i=1)
                        @foreach($candidate_info as $row)
    <tr>
        <td>{{$i++}}</td>
        <td>{{ $row->{'job_title'} }}</td>
        <td>{{ $row->{'name'} }}</td>
        <td>{{ $row->{'Father name'} }}</td>
        <td>{{ $row->{'email'} }}</td>
        <td>{{ $row->{'Phone number'} }}</td>
        <td>{{ $row->{'city'} }}</td>	
        <td>{{ $row->{'Gender'} }}</td>
        <td>{{ $row->{'experience'} }}</td>
        <td>{{ $row->{'skills'} }}</td>
        <td><a href="{{url('/download',$row->cv_file)}}"  class="btn btn-info" >VIEW</a></td> 
        <td><a href="{{url('/view',$row->id)}}"  class="btn btn-success" >Download cv file</a></td>
 
       
      
      
        <!-- <td>
            <a href=""  class="btn btn-danger" >View</a>
            <a href="" class="btn btn-info">Download</a>
        </td> -->
    </tr>
@endforeach
                          
                        </tbody>
                      </table>
                    </div>
                    <a href=" {{ route('export') }} "  class="btn btn-success" >export to excel</a>
                  </div>  
                  
@endsection