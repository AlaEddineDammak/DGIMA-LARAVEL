@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{route('add.users')}}" class="btn btn-inverse-info">Add Users</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Users Table</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $item)
                                @if ($item->role !== 'admin')
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->role}}</td>
                                        <td><img src="{{(!empty($item->photo)) ?url('upload/users_images/'.$item->photo) : url('upload/no_image.jpg')}}" alt="Image"></td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <a href="{{route('edit.users' , $item->id)}}" class="btn btn-inverse-primary">Edit</a>
                                            <a href="{{route('delete.users' , $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection