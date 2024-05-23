@extends('admin.admin_master')
@section('admin')
@php 
$category = DB::table('categories')->where('id',$job->category_id)->get();
$job_type = DB::table('job_type')->where('id',$job->job_type_id)->get();
@endphp
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
                    <h4 class="card-title">Edit post</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" method ="post" action ="{{route('update.jobs',$job->id)}}">
                      @csrf
                        <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">	job_title</label>
                        <input type="text" class="form-control"    name ="job_title" value = "{{$job->job_title}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">job_location</label>
                        <input type="text" class="form-control" name ="job_location" value = "{{$job->job_location}}">
                      </div>
</div>


<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                      <select class="form-control" id="exampleSelectGender" name = "category_id">
                     
                          <option disabled =" " selected=" ">--select category--</option>
                          
                          @foreach( $category as $row)
                          
                          <option value = "{{ $row->id }}" <?php if($row->id==$job->category_id)
                          {echo "selected";} ?> >{{ $row->{'category-name'} }}</option>
                          @endforeach 
                        </select>
                        
                      </div>
                      <div class="form-group col-md-6">
                      <select class="form-control" id="exampleSelectGender" name = "job_type_id">
                          <option disabled = "" selected ="" >--select job nature--</option>
                          @foreach($job_type as $row)
                          
                          <option value ="{{ $row->id }}"
                          <?php if($row->id==$job->job_type_id)
                          {echo "selected";} ?> >{{ $row->{'job_types'} }}</option>
                          @endforeach
                        </select>
                      </div>
</div> 






<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName">announced_date</label>
                        <input type="date" class="form-control"   name = "announced_date" value = "{{$job->announced_date}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">close_date</label>
                        <input type="date" class="form-control" id="exampleInputName1" name ="close_date" value = "{{$job->close_date}}">
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">nationality</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "nationality" value = "{{$job->nationality}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">salary</label>
                        <input type="number" class="form-control" id="exampleInputName1"  name = "salary" value = "{{$job->salary}}">
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">vacancy_number</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "vacancy_number" value = "{{$job->vacancy_number}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">no_of_Jobs</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "no_of_Jobs"  value = "{{$job->no_of_Jobs}}">
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">job location</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "job_location" value = "{{$job->job_location}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">organization</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "organization" value = "{{$job->organization}}">
                      </div>
</div>
<!-- end of row -->
<div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender" name ="gender" value = "{{$job->gender}}">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>


<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">experience</label>
                        <input type="text" class="form-control"  name = "experience" value = "{{$job->experience}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">contact_duration</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name = "contact_duration" value = "{{$job->contact_duration}}">
                      </div>
</div>
<!-- end of row -->
<div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">company_name</label>
                        <input type="text" class="form-control"   name = "company_name" value = "{{$job->company_name}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">company_website</label>
                        <input type="url" class="form-control"  name = "company_website" value = "{{$job->company_website}}">
                      </div>
</div>
<!-- end of row -->
<div class="form-group">
                        <label for="exampleTextarea1">company_location</label>
                        <textarea class="form-control" id="exampleTextarea1" name = "company_location"  rows="4">
                        {{$job->company_location}}
                        </textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">company_info</label>
                        <textarea class="form-control" name="company_info" id="summernote">
                        {{ $job->company_info }}
                        </textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">responsibility</label>
                        <textarea class="form-control" name="responsibility"  id="summernote1">
                        {{$job->responsibility}}
                        </textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">education</label>
                        <textarea class="form-control" name="education"  id="summernote2">
                       {{$job->education}}
                        </textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">job_description</label>
                        <textarea class="form-control" name="job_description"  id="summernote3">
                        {!!$job->{'job_description'}!!}
                        </textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">job_requirement</label>
                        <textarea class="form-control" name="job_requirement"  id="summernote4">
                        <div>{{ strip_tags($job->job_requirement) }}</div> 
                        </textarea>
                 </div>
                 <div class="form-group">
                        <label for="exampleTextarea1">submission_guide_line</label>
                        <textarea class="form-control" name="submission_guide_line"   id="summernote5">
                       {{$job->submission_guide_line}}
                        </textarea>
                 </div>




                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">submission_email</label>
                        <input type="email" class="form-control" id="exampleInputName1"  name = "submission_email" value ="{{$job->submission_email}}">
                      </div>
</div>
<!-- end of row -->


                     
                      
                      </div>


<div>
                      <button type="submit" class="btn btn-primary mr-2">update</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>

           



            @endsection