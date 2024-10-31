@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >About </span>
                    <a href="/about" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/about" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" placeholder="enter title">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload</label>
                            <input id="image" class="form-control" type="file" name="image">
                        </div>

                        <button type="submit" class="btn btn-info">Submit</button>




                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
