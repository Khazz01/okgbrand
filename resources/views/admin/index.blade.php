@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
	.large-checkbox{
		transform: scale(1.5);
	}
</style>
<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Staffs</p>
									<h4 class="my-1 text-info">{{$totalStaff}}</h4>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class='bx bxs-cart'></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Entries</p>
								   <h4 class="my-1 text-danger">{{$totalEntries}}</h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class='bx bxs-wallet'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				</div><!--end row-->

				

		
                         <div class="card-body">
						 <div class="table-responsive">
							<h6>Staffs</h6>
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
								<th>S/N</th>
							   <th>Name</th>
							   <th>Username</th>
							   <th>Phone number</th>
							   <th>Status</th>
							   <th>Action</th>
							 </tr>
							 </thead>
							 <tbody>
							 @foreach ($userData as $key=> $item)
								<tr>
								<td>{{$key+1}}</td>
							  <td>{{$item->name}}</td>
							  <td>{{$item->username}}</td>	
							  <td>{{$item->phone}}</td>	
							  <td>
								@if ($item->status == 1)
									<span class="btn btn-success">Active</span>
									@else
									<span class="btn btn-danger">InActive</span>
								@endif
							  </td>		
							  <td><div class="form-check-danger form-check form-switch">
									<input class="form-check-input status-toggle large-checkbox" type="checkbox" id="flexSwitchCheckCheckedDanger" data-user-id="{{$item->id}}" {{$item->status ? 'checked': ''}}>
									<label class="form-check-label" for="flexSwitchCheckCheckedDanger"></label>
								</div></td>				  
							 </tr>
		  					@endforeach
						
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>

<script>
	$(document).ready(function(){
		$('.status-toggle').on('change', function(){
			var userId = $(this).data('user-id');
			var isChecked = $(this).is(':checked');

			$.ajax({
				url: "{{route('update.staff.status')}}",
				method: "POST",
				data: {
					user_id : userId,
					is_checked : isChecked ? 1: 0,
					_token : "{{ csrf_token() }}"
				},
				success: function(response){
					toastr.success(response.message);
				},
				error: function(){
					toastr.error('An error occurred while updating the status.');
				}
			})
		})
	})
</script>
			

@endSection