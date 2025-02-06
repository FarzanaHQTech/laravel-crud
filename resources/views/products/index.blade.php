@extends('layout.backend.main')
@section('page_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Products </h4>
                    <a class="btn btn-primary" href="{{ url('product/create') }}">Add Product</a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{-- {{session('success')}} --}}
                    </div>
                @endif

                

                {{-- <form class="d-flex col-md-8" role="search" action="{{ url('student/search') }}" method="post">
                    @csrf
                    <input class="form-control me-2 mx-2" type="search" placeholder="Search" value="{{ @$request_data }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($products as $key => $product )
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <img width="80" class="rounded" src="{{asset('product_image')}}/{{$product->image}}" alt="">
                                        </td>
                                        <td>
                                            
                                           <form action="{{url("product/$product->id")}}"  method="post" onsubmit="return confirmDelete(event, this);"
                                            >
                                            <a href="{{url("product/$product->id/edit")}}" class="btn btn-primary">Edit</a>
                                            <a href="{{url("product/$product->id/show")}}" class="btn btn-info">Show</a>
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                              
                            </tbody>
                        </table>
                    </div>
                   
                    <div class="d-flex justify-content-end mt-5">
                        {!! $products->links('pagination::bootstrap-5')!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    function confirmDelete(event, form) {
        event.preventDefault(); // Prevent form from submitting immediately
        if (confirm("Are you sure you want to delete this product?")) {
            form.submit(); // Submit the form if confirmed
        }
    }
    </script>
