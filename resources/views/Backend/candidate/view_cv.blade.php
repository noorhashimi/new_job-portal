<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>HPL | Honest Public LTD</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">CareerVibe</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.html">Home</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="jobs.html">Find Jobs</a>
					</li>										
				</ul>				
				<!-- <a class="btn btn-outline-primary me-2" href="login.html" type="submit">Login</a>
				<a class="btn btn-primary" href="post-job.html" type="submit">Post a Job</a> -->
			</div>
		</div>
	</nav>
</header>

<section class="section-4 bg-2">    
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{route('show.info')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Back to Jobs</a></li>
                    </ol>
                </nav>
            </div>
        </div> 
    </div>
    <div class="container job_details_area">
        <div class="row pb-5">
            <div class="col-md-12">
                <div class="card shadow border-0">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                
                                <div class="jobs_conetent">
                                    <a href="#">
                                        <h4>Candidate CV</h4>
                                    </a>
                                    <div class="links_locat d-flex align-items-center">
                                        <th>
                                        <div class="">Name:
                                            <p> <i class=""></i>Father Name: </p>
                                        </div>
                                        <div class="">{{ $view_info->{'name'} }}
                                            <p> <i class="fa fa-person-o"></i> {{ $view_info->{'Father name'} }}</p>
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
                        <div class="single_wrap" class = "col-md-12">
                            <h4>CV</h4>
                            <p><iframe  hieght ="1000" width = "1000" src="/assets/{{$view_info->{'cv_file'} }}"></iframe></p>
                           
                        </div>
                        <!-- <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <ul>
                                <li>The applicants should have experience in the following areas.</li>
                                <li>Have sound knowledge of commercial activities.</li>
                                <li>Leadership, analytical, and problem-solving abilities.</li>
                                <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                            </ul>
                        </div> -->
                        <!-- <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>The applicants should have experience in the following areas.</li>
                                <li>Have sound knowledge of commercial activities.</li>
                                <li>Leadership, analytical, and problem-solving abilities.</li>
                                <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                        </div>
                        <div class="border-bottom"></div>
                        <div class="pt-3 text-end"> -->
                            <!-- <a href="#" class="btn btn-secondary">Save</a>
                            <a href="#" class="btn btn-primary">Apply</a> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image"  name="image">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark py-3 bg-2">
<div class="container">
    <p class="text-center text-white pt-3 fw-bold fs-6">© 2023 xyz company, all right reserved</p>
</div>
</footer> 
<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.5.1.3.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/instantpages.5.1.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lazyload.17.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>
</html>











