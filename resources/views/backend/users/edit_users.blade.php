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
  
                                  <h6 class="card-title">Edit User
                                
                                  </h6>
  
                                  <form action="{{ route('update.users', ['id' => $users->id]) }}"class="forms-sample" enctype="multipart/form-data" method="POST"> 
                                    @csrf
                                    
                                    <div class="mb-3">
                                      <label for="exampleInputUsername1" class="form-label">Full Name</label>
                                      <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror value="{{$users->name}}" >
                                      @error('name')
                                        <span class="text-danger">{{ $message}}</span>
                                      @enderror
                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror value="{{$users->email}}" >
                                    @error('email')
                                      <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>

                                
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" @error('phone') is-invalid @enderror value="{{$users->phone}} ">
                                    @error('phone')
                                      <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Role</label>
                                    <select name="role" class="form-select" aria-label="Role"value="{{$users->role}}">
                                        <option value="admin">Admin</option>
                                        <option value="prof">Professor</option>
                                        <option value="student">Student</option>
                                    </select>
                                    @error('role')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Status</label>
                                    <select name="status" class="form-select" aria-label="Status" value="{{$users->status}}">
                                        <option value="active" >Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>  
                                
                                <div class="mb-3">
                                  <label for="exampleInputUsername1" class="form-label">New Password</label>
                                  <input type="password" name="new_password" class="form-control" @error('new_password') is-invalid @enderror id="new_password" autocomplete="off" >
                                  @error('new_password')
                                  <span class="text-danger">{{ $message}}</span>
                                      
                                  @enderror
                              </div>

                              <div class="mb-3">
                                  <label for="exampleInputUsername1" class="form-label">Confirm New Password</label>
                                  <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" autocomplete="off" >
                              </div>


                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Photo</label>
                                    <input class="form-control" name="photo" type="file" id="photo">
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