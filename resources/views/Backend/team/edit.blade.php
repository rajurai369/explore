@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Team </span>
                    <a href="/team" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/team/{{$team->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name" value="{{$team->name}}">
                        </div>

                        <div class="form-group">
                            <label for="designation">designation</label>
                            <input id="designation" class="form-control" type="designation" name="designation" placeholder="enter designation"  value="{{$team->designation}}">
                        </div>









                       <div class="row">
                        <div class="col-md-6">
                         <div class="form-group">
                             <label for="photo">Photo</label>
                             <div class="my-2">
                                <img src="{{asset($team->photo)}}" alt="">
                             </div>
                             <input id="photo" class="form-control" type="file" name="photo" placeholder="enter photo"  value="{{$team->photo}}">
                         </div>
                        </div>

                        <div class="col-md-6">
                         <div class="form-group">
                             <label for="banner_image">Banner_image</label>
                             <div class="my-2">
                                <img src="{{asset($team->banner_image)}}" alt="">
                             </div>
                             <input id="banner_image" class="form-control" type="file" name="banner_image" placeholder="enter banner_image"  value="{{$team->banner_image}}">
                         </div>
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
