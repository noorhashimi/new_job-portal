@extends('main.home_master')
@section('content')

<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">

 <!-- i want to add the success message -->
<!--  
        @if(session('success'))
        <script>
        
        Swal.fire({
  icon: "success",
  title: "WOW...",
  text: "{{session('success')}}",
  timer:1400
 
})
       
        </script>
    @endif
     -->

            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                    <input type="text" class="" name ="jobtitle" value = "{{$job->{'job_title'} }}"> 
                        <!-- <li class="breadcrumb-item active">Post a Job</li> -->
                    </ol>
                </nav>
            </div>
        </div>
       


        
       


        <div class="row" >
           
            <div class="col-lg-12">
            <form class="forms-sample" method = "POST" action ="{{route('submit.info')}}" enctype="multipart/form-data" 
                    >
                    @csrf
                <div class="card border-0 shadow mb-4 ">
                    <div class="card-body card-form p-4">
                        <h3 class="fs-4 mb-1">personal information</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Name<span class="req">*</span></label>
                                <input type="text"  id="title" name="name"  value="{{ old('name') }}" required class="form-control">
                                @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Father name<span class="req">*</span></label>
                                <input type="text"   name="father_name"   value="{{ old('father_name') }}" required class="form-control">
                                @error('father_name')
            <span class="error">{{ $message }}</span>
        @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Email<span class="req">*</span></label>
                                <input type="email" name="email"   value="{{ old('email') }}" required class="form-control">
                                @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Phone Number<span class="req">*</span></label>
                                <input type="number"   name="phone_number" value="{{ old('phone_number') }}" required  class="form-control">
                                @error('phone_number')
            <span class="error">{{ $message }}</span>
        @enderror
                           
   
    </div>
    <div class="col-md-6 mb-4">
                            <label for="" class="mb-2" > Gender  <span class="req">*</span></label>
                                <select class="form-select" name = "gender"  value="{{ old('gender') }}" required>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    
                                </select>
                            </div>
        <!-- the new one for category  -->
        <div class="col-md-6 mb-4">
                            <label for="" class="mb-2" > Please Select your job Category  <span class="req">*</span></label>
                                <select class="form-select" name = "category_id"  value="" required>
                                    @foreach( $categories as $row)
                                <option value= "{{ $row->id }}"> {{ $row->{'category-name'} }} </option>
                                    
                                    @endforeach
                                </select>
                            </div>
                         

<!-- end of category -->
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Current home location <span class="req">*</span></label>
                                <input type="text"  name="city"   value="{{ old('city') }}" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Highest Education<span class="req">*</span></label>
                                <input type="text"   name="levalof_education"   value="{{ old('levalof_education') }}" required class="form-control">
                                @error('level of_education')
            <span class="error">{{ $message }}</span>
        @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">language<span class="req">*</span></label>
                                <input type="text"   name="levalof_education"   value="{{ old('levalof_education') }}" required class="form-control">
                                @error('level of_education')
            <span class="error">{{ $message }}</span>
        @enderror
                            </div>




                            <div class="col-md-6 mb-4">
                            <label for="" class="mb-2" > What is your current employment status  <span class="req">*</span></label>
                                <select class="form-select" name = "employment_status"  value="{{ old('employment_status') }}" required>
                                    <option value="Employed">Employed</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Student">Student</option>
                                    
                                </select>
                            </div>
      





                            




                            

                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">experience<span class="req">*</span></label>
                                <select  class = "form-select" name="experience" id="experience" value="{{ old('experience') }}">
                            <option value="">Select Experience</option>
                            <option value="1 Year">1 Year</option>
                            <option value="2Years">2 Years</option>
                            <option value="3Years">3 Years</option>
                            <option value="4Years">4 Years</option>
                            <option value="5 Years">5 Years</option>
                            <option value="6Years">6 Years</option>
                            <option value="7 Years">7 Years</option>
                            <option value=" 8Years">8 Years</option>
                            <option value="9 Years">9 Years</option>
                            <option value=" 10Years">10 Years</option>
                            <option value=" 10+Years">10+ Years</option>
                        </select> 
                                @error('experience')
            <span class="error">{{ $message }}</span>
        @enderror
                            </div>

                                <div class="col-md-6 mb-4">
                        <label for="exampleTextarea1">skills</label>
                        <textarea class="form-control" name="skills" id="summernote6" style = "height :200px;" >
                       {{ old('skills') }}
                        </textarea>
                 </div>

                      
                        


                        <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Prefered Qualification<span class="req">*</span></label>
                                <textarea class="form-control" name="cover_latter" id="summernote8" <textarea class="form-control" name="cover_latter" id="summernote" style=" height: 200px;"></textarea></textarea>
                       {{ old('	prefered_qualification') }}
                        </textarea>
                            </div>
                            </div>
                            
                            <div class="col-md-12 mb-4">
                        <label for="exampleTextarea1">Write your cover latter here</label>
                        <textarea class="form-control" name="cover_latter" id="summernote7" style = "height:200px;" >
                       {{ old('	cover_latter') }}
                        </textarea>
                 </div>

                       

                        

                        
                           
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Upload your resume letter here (preferably in PDF or word format)<span class="req">*</span></label>

                                <input type="file"  placeholder="" id="title" name="cv_file" class="form-control">
                                @error('cv_file')
            <span class="error" style="color: red;" role="alert">{{ $message }}</span>
        @enderror
                            </div>
                       
                        
                        
                    </div> 
                    <div class="card-footer  p-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>               
            </div>
            </form>
   
        </div>

    </div>
    
</section>
@endsection