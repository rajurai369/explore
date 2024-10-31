@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Team </span>
                    @if(empty($team))
                    <a href="/team/create" class="float-end btn btn-info">Add</a>
                    @endif

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                               <th>Name</th>
                               <th>Designation</th>


                               <th>Action</th>

                            </tr>

                        </thead>

                        @if(!empty($teams))
                        @foreach ($teams as $team)


                        <tbody>

                        <tr>

                            <td>{{$team->name}}</td>
                            <td>{{$team->designation}}</td>

                            <td>

                                <form action="/team/{{$team->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/team/{{$team->id}}/edit" class="btn btn-info">Edit</a>
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
