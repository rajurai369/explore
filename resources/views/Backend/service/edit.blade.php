@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Service </span>
                    <a href="/service" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/service/{{$service->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="enter name" value="{{$service->name}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" placeholder="enter title" value="{{$service->title}}">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input id="address" class="form-control" type="address" name="address" placeholder="enter address" value="{{$service->address}}">
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="3">{!! $service->description !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea id="comment" class="form-control" name="comment" rows="3">{!! $service->comment!!}</textarea>
                            </div>
                        </div>



                        <div class="col-md-6">
                         <div class="form-group">

                             <label for="image">image</label>
                             <div class="my-2">
                                <img src="{{asset($service->image)}}" alt="">
                             </div>

                             <input id="image" class="form-control" type="file" name="image" placeholder="enter image">
                         </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

