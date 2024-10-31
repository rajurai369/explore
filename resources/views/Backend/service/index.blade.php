@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Service </span>
                    {{-- @if(empty($service))

                    @endif --}}
                    <a href="/service/create" class="float-end btn btn-info">Add</a>

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                               <th>Title</th>
                               <th>Address</th>
                               <th>Comment</th>
                               <th>Description</th>
                               <th>Action</th>

                            </tr>

                        </thead>

                        @if(!empty($services))

                        @foreach ($services as $service)

                        <tbody>


                        <tr>
                            <td>{{$service->name}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->address}}</td>
                            <td>{{$service->comment}}</td>
                            <td>{{$service->description}}</td>
                            <td>

                                <form action="/service/{{$service->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/service/{{$service->id}}/edit" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>





                        </tbody>
                        @endforeach

                        @endif


                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
