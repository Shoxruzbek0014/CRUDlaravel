@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="cotainer">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-3">Create student</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                  </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Email address</label>
                                  <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Cource</label>
                                  <input type="text" class="form-control" name="cource" required>
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Profile image</label>
                                  <input type="file" class="form-control" id="" name="profile_image" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('student') }}" class="btn btn-warning">back</a>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection