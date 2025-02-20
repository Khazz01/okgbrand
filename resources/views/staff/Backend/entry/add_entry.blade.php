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
								<li class="breadcrumb-item active" aria-current="page">Add Entries</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
                
                <div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Entry</h5>
								<form id="myForm"  class="row g-3" method="post" action="{{route('add.New.Entry')}}">

								@csrf
									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">URL</label>
										<input type="text" class="form-control" name="url" id="input1" placeholder="link">
									</div>

									<div class="col-md-6 form-group" style="display:none;">
										<input type="text" class="form-control" name="username" id="input1" placeholder=""
										value= "{{$staffUsername}}">
									</div>

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Email</label>
										<input type="text" class="form-control" name="mail" id="input1" placeholder="Email">
									</div>

									<div class="col-md-6 form-group" style="display:none;">
										<input type="text" class="form-control" name="staff_mail" id="input1" placeholder=""
										value= "{{$staffmail}}">
									</div>

									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Add Entry</button>
										</div>
									</div>
								</form>
							</div>
						</div>

</div>
<script type="text/javascript">


</script>
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                url: {
                    required : true,
                }, 

				mail: {
                    required : true,
                }, 
                
            },
            messages :{
                url: {
                    required : 'Please enter Entry link',
                }, 
				mail: {
                    required : 'Please enter Entry email',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
@endsection