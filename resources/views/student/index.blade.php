@extends('layouts.app')

@section('content')
<div class="cotainer">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-3">Add new student Page</h2>
                    <a href="{{ url('add-student') }}" class="btn btn-info float-right">add student</a>
                    <br>
                    @if(session('status'))
                        <h5 class="alert alert-success bg-white mb-3">{{ session('status') }}</h5>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Cource</th>
                                <th>Profile image</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($contact) > 0)
                            
                                @foreach ($contact as $key=>$item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->cource }}</td>
                                        <td><img src="uploads/student/{{ $item->profile_image }}" width="100" height="50" alt=""></td>
                                        <td>
                                            <a href="student/show/{{ $item->id }}" class="btn btn-sm btn-primary">show</a>
                                            <a href="student/edit/{{ $key+1 }}" class="btn btn-sm btn-success">edit</a>
                                            <form action="delete?id={{ $key+1 }}" method="post" style="display: inline-block">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('O\'chirishni xoxlysizmi ?')">delete</button>
                                            </form>
                                        </td>            
                                    </tr>
                                @endforeach
                            
                            @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection