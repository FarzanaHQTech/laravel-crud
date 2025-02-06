@extends('layout.backend.main')

@section('page_content')
    
 @php
    // print_r($student);

 @endphp

<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Register Student</h4>
            </div>
            <div class="card-body">
              
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name"  value="{{  $student['name'] }}">
                            <input type="hidden" class="form-control" name="id"  value="{{  $student['id'] }}">
                            @error('name')
                             <span style="color: red" >{{$message}}</span>
                            @enderror
                        </div>
                        

                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Roll</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control"  name="roll"   value="{{$student['roll'] }}">
                            @error('roll')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                    
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Phone</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="phone"  value="{{  $student['phone'] }}">
                            @error('phone')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                     
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Address</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="address"   value="{{  $student['address'] }}">
                            @error('address')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                      
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Photo</label>
                        <div class="col-lg-9">
                            <img width="50" height="" src="{{asset('photo')}}/{{$student['photo']}}" alt="{{$student['name']}}" srcset="">
                            
                        </div>
                     
                    </div>
                    
            </div>
        </div>
    </div>
   
</div>

@endsection