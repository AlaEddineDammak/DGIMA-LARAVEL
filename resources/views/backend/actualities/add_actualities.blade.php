@extends('admin.admin_dashboard')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="row profile-body">
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
  
                                  <h6 class="card-title">Add New Actuality</h6>
  
                                  <form method="POST" action="{{route('store.actualities')}}" class="forms-sample" enctype="multipart/form-data" >
                                    @csrf
                                    
                                      <div class="mb-3">
                                          <label for="exampleInputUsername1" class="form-label">Actuality Title</label>
                                          <input type="text" name="title" class="form-control" @error('title') is-invalid @enderror  >
                                          @error('title')
                                            <span class="text-danger">{{ $message}}</span>
                                          @enderror
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Actuality Type</label>
                                        <input type="text" name="type" class="form-control" @error('type') is-invalid @enderror  >
                                        @error('type')
                                          <span class="text-danger">{{ $message}}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Actuality Description</label>
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Actuality Date</label>
                                        <input type="text" name="date" class="form-control" @error('date') is-invalid @enderror  >
                                        @error('date')
                                          <span class="text-danger">{{ $message}}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Actuality Photo</label>
                                        <input class="form-control" name="image" type="file" id="image">
                                    </div>
                                  
                                      <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                  </form>
  
                </div>
              </div>
        </div>
      </div>
    </div>

        </div>






@endsection