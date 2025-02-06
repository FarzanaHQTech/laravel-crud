@extends('layout.backend.main')

@section('page_content')
    


<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('product/' . $product->id) }}" method="post" enctype="multipart/form-data">

               
                    @csrf
                    <div class="input-block mb-3 row">
                        <input type="hidden" class="form-control" name="_method"  value="put">
                        <label class="col-lg-3 col-form-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name"  value="{{$product->name}}">
                            @error('name')
                             <span style="color: red" >
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        

                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Description</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control"  name="description"  value="{{$product->description}}">
                            @error('description')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                    
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Price</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="price"  value="{{$product->price}}">
                            @error('price')
                            <span style="color: red" >{{$message}}</span>
                       @enderror
                        </div>
                     
                    </div>
                 
                    <div class="input-block mb-3 row">
                        <label class="col-lg-3 col-form-label">Photo</label>
                        <div class="col-lg-9">

                            <img width="80" src="{{asset('product_image/')}}/{{$product->image}}" alt="">
                            <input type="file" class="form-control"  name="image" >
                            @error('image')
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