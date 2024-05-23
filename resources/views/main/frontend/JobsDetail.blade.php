@extends('main.home_master')

@section('content')
@if ($message = session('danger'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<section class="section-4 bg-2">    
    <div class="container pt-5">
        
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="jobs.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Back to Jobs</a></li>
                    </ol>
                </nav>
            </div>
        </div> 
    </div>
    <div class="container job_details_area">
        <div class="row pb-5">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                
                                <div class="jobs_conetent">
                                    <a href="#">
                                    <h4 name = "job_title" >{{$job->{'job_title'} }}</h4>
                                    </a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> {{$job->{'job_location'} }}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> {{$job->{'job_types'} }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Job description</h4>
                            <p>{!!$job->{'job_description'} !!}</p>
                            
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            
                                <li>{!!$job->{'responsibility'} !!}</li>
                                
                           
                        </div>
                        <div class="single_wrap">
                            <h4>Requirement</h4>
                            
                                {!!$job->{'job_requirement'} !!}
                                
                           
                        </div>
                        <div class="single_wrap">
                            <h4>Education</h4>
                            <p>{!!$job->{'education'} !!}</p>
                        </div>
                        <div class="border-bottom"></div>
                        <div class="pt-3 text-end">
                            <!-- <a href="#" class="btn btn-secondary">Save</a> -->
                            <!-- //before appllyig first user should login only login person can Apply
                            but now i will remain this -->
<!-- the new conditin thaat i added -->




    @if ($job->close_date >= $currentDate)
        <a href="{{route('apply.jobs',$job->id) }}" class="btn btn-primary">Apply</a>
    @else
    <div style="margin-top: -800px;">
        <p style="color: red;">You cannot apply for this job as the application deadline has passed.</p>
        </div>
    @endif


                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0">
                    <div class="job_sumary">
                        <div class="summery_header pb-1 pt-4">
                            <h3>Job Summery</h3>
                        </div>
                        <div class="job_content pt-3">
                            <ul>
                                <li>Published on: <span>{{ \Carbon\Carbon::parse($job->created_at)->format('Y-m-d') }}</span></li>
                                <li>Vacancy: <span>{{$job->{'vacancy_number'} }}</span></li>
                                <li>Salary: <span>{{$job->{'salary'} }}</span></li>
                                <li>Location: <span>{{$job->{'salary'} }}</span></li>
                                <li>Job Nature: <span>{{$job->{'job_types'} }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-0 my-4">
                    <div class="job_sumary">
                        <div class="summery_header pb-1 pt-4">
                            <h3>Company Details</h3>
                        </div>
                        <div class="job_content pt-3">
                            <ul>
                                <li>Name: <span>{{$job->{'company_name'} }}</span></li>
                                <li>Locaion: <span>{{$job->{'company_location'} }}</span></li>
                                <li>Webite: <span><a href = "{{$job->{'company_website'} }}">{{$job->{'company_website'} }}</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection