@extends('layout.backend.main')
@section('page_content')
    


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Student List</h4>
                <a class="btn btn-primary" href="{{url('student/create')}}">Register</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            <form class="d-flex col-md-8" role="search" action="{{url('student/search')}}" method="post">
                @csrf
                <input class="form-control me-2 mx-2" type="search" placeholder="Search"  value="{{@$request_data}}">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>Roll</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->address}}</td>
                                <td> <img width="50" height="" src="{{asset('photo')}}/{{$student->photo}}" alt="{{$student->name}}" srcset=""> </td>
                                <td>
                              
                                    <a href="{{url("student/show/$student->id")}}" class="btn btn-success">Show</a>
                                    <a href="{{url("student/update/$student->id")}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url("student/delete/$student->id")}}" class='btn btn-danger'>Delete</a>
                                </td>
                                
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-5">
                    {!! $products->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
