@extends('admin.admin_dashboard')


@section('admin')

<div class="page-content">
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
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <form action="{{ route('entry.Status') }}" method="post">
                @csrf
                @foreach ($allentryDataUser as $username)
                    <h2>{{ $username }}</h2>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>URL</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entryUserData[$username] as $index => $entry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="text" value="{{ $entry->Link }}" readonly>
                                    </td>
                                    <td>
                                        <input type="text" value="{{ $entry->email }}" readonly>
                                    </td>
                                    <td>
                                    <select name="status[{{ $entry->id }}]" id="">
                                        <option value="">...</option>
    <option value="Good" style="color:green" {{ $entry->status == 'Good' ? 'selected' : '...' }}>Good</option>
    <option value="Bad" style="color:red" {{ $entry->status == 'Bad' ? 'selected' : '...' }}>Bad</option>
</select>

                                    </td>
                                    <td>
                                    <input type="text" name="reason[{{ $entry->id }}]" value="{{ !empty($entry->Reason) ? $entry->Reason : ' ' }}" placeholder="Enter reason">

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
                <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<a href="{{route('delete.All')}}" class="btn btn-danger px-5" id='delete'>Delete All</a></td>

				
			</div>



@endsection