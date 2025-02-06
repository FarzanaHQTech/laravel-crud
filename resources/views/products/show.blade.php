@extends('layout.backend.main')
@section('page_content')
    


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"></div>

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
                          
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
