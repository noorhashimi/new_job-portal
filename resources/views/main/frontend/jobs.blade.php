@extends('main.home_master')
@section('content')
<section class="section-3 py-5 bg-2 ">
    <div class="container">     
        <div class="row">
            <div class="col-6 col-md-10 ">
                <h2>Find Jobs</h2>  
            </div>
            <div class="col-6 col-md-2">
                <div class="align-end">
                    <select name="sort" id="sort" class="form-control">
                        <option value="">Latest</option>
                        <option value="">Oldest</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4 col-lg-3 sidebar mb-4">
                <form action = "" name = "SearchForm"  id = "SearchForm">
                <div class="card border-0 shadow p-4">
                    <!-- <div class="mb-4">
                        <h2>Keywords</h2>
                        <input type="text" placeholder="Keywords" name = "" class="form-control">
                    </div> -->

                    <div class="mb-4">
                        <h2>Location</h2>
                        <input type="text" placeholder="Location"  nama = "job_location" class="form-control">
                    </div>

                    <div class="mb-4">
                        <h2>Category</h2>
                        
                        <select name="category" id="category" class="form-control">
                       
                            <option value="">Select a Category</option>
                            @foreach($categories as $row)
                            <option value="{{$row->id }}">{{$row->{'category-name'} }}"</option>
                            @endforeach
                          
                           
                            
                        </select>
                    </div>                   

                    <div class="mb-4">
                        <h2>Job Type</h2>
                        @if($job_type->isNotEmpty())
                        @foreach($job_type as $row)
                        <div class="form-check mb-2"> 
                    
                         
    <input class="form-check-input" name="job_type" type="checkbox" value="{{$row->id}}" id="job_type-{{$row->id}}">
    <label class="form-check-label" for="job_type-{{$row->id}}">{{$row->{'job_types'} }}</label>

                        </div>
                        @endforeach
                        @endif

                         
                    </div>

                    <div class="mb-4">
                        <h2>Experience</h2>
                        <select name="experience" id="experience" class="form-control">
                            <option value="">Select Experience</option>
                            <option value="">1 Year</option>
                            <option value="">2 Years</option>
                            <option value="">3 Years</option>
                            <option value="">4 Years</option>
                            <option value="">5 Years</option>
                            <option value="">6 Years</option>
                            <option value="">7 Years</option>
                            <option value="">8 Years</option>
                            <option value="">9 Years</option>
                            <option value="">10 Years</option>
                            <option value="">10+ Years</option>
                        </select>
                    </div> 
                    <button  type = "submit"class="btn btn-primary">Search</button>
                    </div> 
                    </form>                
                
            </div>
            <!-- the job part -->
            <div class="col-md-8 col-lg-9 ">
                <div class="job_listing_area">                    
                    <div class="job_lists">
                    <div class="row">
                        @if($jobs->isNotEmpty())
                        @foreach($jobs as $row)
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0" name = "job_title">  {{$row->{'job_title'} }}</h3>
                                    <p> {!! str_limit(strip_tags($row->job_description), $limit = 70, $end = '') !!}</p>
                                   

                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">  {{$row->{'job_location'} }}</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">{{$row->{'job_types'} }}</span>
                                        </p>
                                        

                                        @if(!is_null($row->salary))
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">{{$row->{'salary'} }}</span>
                                        </p>
                                        @endif
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="{{route('jobs.detail',$row->id)}}" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                          
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
<!-- @section('customJs')
<script>
    $("#SearchForm").submit(function(e){
        e.preventDefault();
        var url= '{{route("jobs") }}?';
        var keyword = $(#keyword).val();
        var job_location = &(#job_location).val();
        //if keyword has a value
        if(keyword !=""){
            url+= '&keyword='+keyword;
        }
        //if location has a value
        if(job_location !=""){
            url += '&job_locationord='+job_location;
        }
         
        window.location.hrf.url;


    })
    </script>
@endssection -->
