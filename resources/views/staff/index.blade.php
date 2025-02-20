@extends('staff.staff_dashboard')
@section('staff')

@php

	$id = Auth::user()->id;
	$staffId = App\models\User::find($id);
	$status = $staffId->status
@endphp

<div class="page-content">

@if($status === '1')
<h4>Account is <span class="text-success">Active</span></h4>
@else
<h4>Account is <span class="text-danger">InActive</span></h4>
<p class="text-danger">Please wait for Admin to activate you</p>
@endif
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Entries</li>
							</ol>
						</nav>
					</div>

					@if($status === '1')
					<div class="ms-auto">
					<a href="{{route('add.Entry')}}" class="btn btn-primary px-5">Add Entry</a>
					</div>
					
					@else
					<div class="ms-auto">
					<a href="" class="btn btn-dark px-5" disabled>Add Entry</a>
					</div>
					@endif
					
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                    <th>S/N</th>
										<th>URL</th>
										<th>Email</th>
										<th>Status</th>
										<th>Reason</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($entryData as $key=> $item)
									<tr>
                                    <td>{{$key+1}}</td>
										<td>{{$item->Link}}</td>
										<td>{{$item->email}}</td>
										<td>{{$item->status}}</td>
										<td>{{$item->Reason}}</td>
										
                                        <td><a href="{{route('edit.Entry', $item->id)}}" class="btn btn-info px-5">Edit</a>
                                <a href="{{route('delete.Entry', $item->id)}}" class="btn btn-danger px-5" id='delete'>Delete</a></td>
                                    	
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>



@endsection