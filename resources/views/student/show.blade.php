@extends('layouts.app')

@section('title')
    show blade page
@endsection
@section('content')
    <div class="section">
        <div class="contaniner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Student show Page</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>{{ $show->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $show->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $show->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $show->cource }}</td>
                                    </tr>
                                    <tr>
                                        <td><img src="uploads/student/{{ $show->profile_image }}" width="100" height="50" alt=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ url('student') }}" class="btn btn-primary">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection