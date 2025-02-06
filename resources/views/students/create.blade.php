@extends('layout.backend.main')

@section('page_content')
    


<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Register Student</h4>
            </div>
            <div class="card-body">
                <form action="{{url('student/create')}}"  method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                            @error('name')
                             <span style="color: red" >{{$message}}</span>
                            @enderror
                        </div>
                        

                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Roll</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control"  name="roll"  value="{{old('roll')}}">
                            @error('roll')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                    
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Phone</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="phone"  value="{{old('phone')}}">
                            @error('phone')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                     
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Address</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="address"  value="{{old('address')}}">
                            @error('address')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                      
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Photo</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control"  name="photo"  value="{{old('photo')}}">
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