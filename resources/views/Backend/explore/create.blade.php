@extends('backend.app')

@section('content')

<div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Explore </span>
                    <a href="/explore" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/explore" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email" placeholder="enter email">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input id="address" class="form-control" type="address" name="address" placeholder="enter address">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" class="form-control" type="phone" name="phone" placeholder="enter phone number">
                        </div>

                       <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input id="facebook" class="form-control" type="text" name="facebook" placeholder="enter facebook">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="twit">Twitt</label>
                            <input id="twit" class="form-control" type="text" name="twit" placeholder="enter twit">
                        </div>
                       </div>
                       </div>


                       <div class="row">
                        <div class="col-md-6">
                         <div class="form-group">
                             <label for="linkedin">Linkedin</label>
                             <input id="linkedin" class="form-control" type="text" name="linkedin" placeholder="enter linkedin">
                         </div>
                        </div>

                        <div class="col-md-6">
                         <div class="form-group">
                             <label for="youtube">Youtube</label>
                             <input id="youtube" class="form-control" type="text" name="youtube" placeholder="enter youtube">
                         </div>
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
