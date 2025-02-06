@extends('layout.backend.main')

@section('page_content')
    


<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Update </h4>
            </div>
            <div class="card-body">
                <form action="{{url('student/update')}}"  method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Name</label>
                        <div class="col-lg-9">
                            <input type="hidden" class="form-control" name="id"  value="{{$student['id']}}">
                            <input type="text" class="form-control" name="name"  value="{{$student['name']}}">
                            @error('name')
                             <span style="color: red" >{{$message}}</span>
                            @enderror
                        </div>
                        

                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Roll</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control"  name="roll"  value="{{$student['roll']}}">
                            @error('roll')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                    
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Phone</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="phone"  value="{{$student['phone']}}">
                            @error('phone')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                     
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Address</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="address"  value="{{$student['address']}}">
                            @error('address')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                      
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Photo</label>
                        <div class="col-lg-9">
                            <img src="{{asset('photo')}}/{{$student['photo']}}" width="60" alt="">
                            <input type="file" class="form-control"  name="photo"  ">
                            @error('photo')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                     
                    </div>
                    
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</div>

@endsection