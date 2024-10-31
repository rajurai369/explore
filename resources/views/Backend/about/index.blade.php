@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >About </span>
                    @if(empty($about))
                    <a href="/about/create" class="float-end btn btn-info">Add About</a>
                    @endif

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Title</th>
                               <th>Description</th>


                                 <th>Action</th>

                            </tr>

                        </thead>

                        @if(!empty($about))
                        <tbody>

                        <tr>
                            <td>{{$about->title}}</td>
                            <td>{!!$about->description!!}</td>


                            <td>

                                <form action="/about/{{$about->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/about/{{$about->id}}/edit" class="btn btn-info">Edit</a>
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
