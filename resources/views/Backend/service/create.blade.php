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

                    <form action="/service" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name">
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" placeholder="enter title">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input id="address" class="form-control" type="address" name="address" placeholder="enter address">
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea id="comment" class="form-control" name="comment" rows="3"></textarea>
                            </div>
                        </div>



                        <div class="col-md-6">
                         <div class="form-group">
                             <label for="image">image</label>
                             <input id="image" class="form-control" type="file" name="image" placeholder="enter image">
                         </div>
                        </div>
                       

                        <button type="submit" class="btn btn-info">Submit</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
