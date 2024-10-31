@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <span >Explore </span>
                    
                    @if(empty($explore))
                    <a href="/explore/create" class="float-end btn btn-info">Add</a>
                    @endif

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Title</th>
                               <th>Address</th>
                               <th>Email</th>
                               <th>Phone</th>
                               <th>Action</th>

                            </tr>

                        </thead>

                        @if(!empty($explore))
                        <tbody>

                        <tr>
                            <td>{{$explore->name}}</td>
                            <td>{{$explore->address}}</td>
                            <td>{{$explore->email}}</td>
                            <td>{{$explore->phone}}</td>
                            <td>

                                <form action="/explore/{{$explore->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/explore/{{$explore->id}}/edit" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>





                        </tbody>
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
