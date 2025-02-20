@extends('staff.staff_dashboard')


@section('staff')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Entries</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
                
                <div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Entries</h5>
								<form id="myForm"  class="row g-3" method="post" action="{{route('update.Entry')}}">

								@csrf

                                <input type="hidden" name="id" value="{{$entry->id}}">
									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">URL</label>
										<input type="text" class="form-control" name="url" id="input1" value = "{{$entry->Link}}">
									</div>
									
									<div class="col-md-6">
									</div>

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">URL</label>
										<input type="text" class="form-control" name="email" id="input1" value = "{{$entry->email}}">
									</div>

									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Save Changes</button>
										</div>
									</div>
								</form>
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
@endsection