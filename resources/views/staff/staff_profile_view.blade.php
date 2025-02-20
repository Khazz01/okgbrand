@extends('staff.staff_dashboard')


@section('staff')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profile</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{ (!empty($profileData->photo))? url('upload/staff_images/'.$profileData->photo) : url('upload/no_image.jpg')  }}" alt="staff" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>{{$profileData->name}}</h4>
												<p class="text-secondary mb-1">{{$profileData->username}}</p>
												<p class="text-muted font-size-sm">{{$profileData->email}}</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>

                <div class="col-lg-8">
                        <div class="card">

                        <form action="{{route('staff.profile.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{$profileData->name}}" name="name" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="phone" class="form-control" value="{{$profileData->phone}}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="address" class="form-control" value="{{$profileData->address}}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Profile Image</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input id="image" type="file" name="photo" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"></h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <img id="showImage" src="{{ (!empty($profileData->photo))? url('upload/staff_images/'.$profileData->photo) : url('upload/no_image.jpg')  }}" alt="staff_image" class="rounded-circle p-1 bg-primary" width="80">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form> 
                    </div>
                </div>

					</div>
				</div>
			</div>

            <script type="text/javascript">

                $(document).ready(function(){
                    $('#image').change(function(e){
                        var profileImg = new FileReader();
                        profileImg.onload = function(e){
                            $('#showImage').attr('src', e.target.result)
                            console.log(e.target.result)
                        }
                        profileImg.readAsDataURL(e.target.files['0']);
                    })
                })

            </script>

@endSection