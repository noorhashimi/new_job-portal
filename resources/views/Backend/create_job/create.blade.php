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
<div class="card">
<div class="card-body">
  
                    <h4 class="card-title">Job Post Section</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" method ="post" action ="{{route('store.jobs')}}">
                      @csrf
                        <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">	job_title</label>
                        <input type="text" class="form-control" id="exampleInputName1"   name ="job_title" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">job_location</label>
                        <input type="text" class="form-control" id="exampleInputName1" name ="job_location" >
                      </div>
</div>


<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                      <select class="form-control" id="exampleSelectGender" name = "category_id">
                     
                          <option disabled =" " selected=" ">--select category</option>
                          @foreach( $categories as $row)
                          <option value = "{{ $row->id }}">{{ $row->{'category-name'} }}</option>
                          @endforeach
                        </select>
                        
                      </div>
                      <div class="form-group col-md-6">
                      <select class="form-control" id="exampleSelectGender" name = "job_type_id">
                          <option disabled = "" selected =" ">--select job nature</option>
                          @foreach($job_type as $row)
                          <option value="{{$row->id}}">{{ $row->{'job_types'} }}</option>
                          @endforeach
                        </select>
                      </div>
</div>
<!-- for job status -->


<div class="form-group col-md-6">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name ="status">
                          <option value =1>active</option>
                          <option value = 2>disactive</option>
                        </select>
                      </div>

















<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">announced_date</label>
                        <input type="date" class="form-control" name = "announced_date" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">close_date</label>
                        <input type="date" class="form-control" id="exampleInputName1" name ="close_date" >
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">nationality</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "nationality" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">salary</label>
                        <input type="number" class="form-control" id="exampleInputName1"  name = "salary" >
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">vacancy_number</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "vacancy_number" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">no_of_Jobs</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "no_of_Jobs" >
                      </div>
</div>
<!-- end of row -->
<div class="row">
<div class="form-group col-md-6">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender" name ="gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                     
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">organization</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "organization" >
                      </div>
</div>
<!-- end of row -->



<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">experience</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "experience" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">contact_duration</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "contact_duration" >
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">company_name</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "company_name" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">company_website</label>
                        <input type="url" class="form-control" id="exampleInputName1"  name = "company_website" >
                      </div>
</div>
<!-- end of row -->
<div class="form-group">
                        <label for="exampleTextarea1">company_location</label>
                        <textarea class="form-control" id="exampleTextarea1" name = "company_location" rows="4"></textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">company_info</label>
                        <textarea class="form-control" name="company_info" id="summernote" ></textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">responsibility</label>
                        <textarea class="form-control" name="responsibility" id="summernote1"></textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">education</label>
                        <textarea class="form-control" name="education" id="summernote2"></textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">job_description</label>
                        <textarea class="form-control" name="job_description" id="summernote3" ></textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">job_requirement</label>
                        <textarea class="form-control" name="job_requirement" id="summernote4"></textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">submission guide line</label>
                        <textarea class="form-control" name="submission_guide_line" id="summernote5"></textarea>
                 </div>




                      <div class="form-group">
                        <label for="exampleInputName1">submission link</label>
                        <input type="email" class="form-control" id="exampleInputName1"  name = "submission_email" >
                      </div>
</div>
</div>
<!-- end of row -->


                     
                      



<div class="form-group">
 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>

           



            @endsection