@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{route('add.actualities')}}" class="btn btn-inverse-info">Add New Actuality</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Actualities Table</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($actualities as $key => $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->type}}</td>
                                    <td class="description-column">{{ \Illuminate\Support\Str::limit($item->description, 50, '...') }}</td>
                                    <td><img src="{{ asset('' . $item->image) }}" alt="Image"></td>
                                    <td>{{$item->date}}</td>
                                    <td>
                                        <a href="{{route('edit.actualities' , $item->id)}}" class="btn btn-inverse-primary">Edit</a>
                                        <a href="{{route('delete.actualities' , $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                                    </td>
                                </tr>
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