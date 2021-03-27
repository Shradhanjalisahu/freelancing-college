@extends('layout.collegeLayout.design_layout')
@section('title','Add College |')

@section('content')
	<div class="main-wrapper">
		<!-- HEADER -->
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="dashboard-list-admin.html">
							<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-list-ul" aria-hidden="true"></i> Listing
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="">Add College Information</a>
								<a class="dropdown-item" href="">Add College Details</a>
								<a class="dropdown-item" href="">URL</a>
							</div>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0 position-relative d-none d-md-block">
						<input class="form-control-sm" placeholder="Search" aria-label="Search">
						<i class="fa fa-search" aria-hidden="true"></i>
					</form>
				</div>
			</div>
		</nav>
		<section class="bg-light py-5 height100vh">
			<div class="container">
				<nav class="bg-transparent breadcrumb breadcrumb-2 px-0 mb-5" aria-label="breadcrumb">
					<h2 class="font-weight-normal mb-4 mb-md-0">Dashboard</h2>
					<ul class="list-unstyled d-flex p-0 m-0">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
					</ul>
				</nav>
				<!-- About -->
				<div class="card">
					<div class="card-body px-6 pt-6 pb-1">
						<h3 class="h4 mb-4">College Details</h3>
						{{-- @if ($errors->any())
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif --}}
						<form action="{{route('add-college')}}" method="POST" >
							@csrf
							<div class="row">
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">College Name</label>
									<input type="text" name="collegeName" value="{{old('collegeName')}}" class="form-control @error('collegeName') is-invalid @enderror" placeholder="Enter college name" >
									@error('collegeName')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">Email</label>
									<input type="text"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email"  value="{{old('email')}}" >
									@error('email')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">Location</label>
									<input type="text" name="location" class="form-control  @error('location') is-invalid @enderror" placeholder="Enter location of college"  value="{{old('location')}}" >
									@error('location')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">Contact Number</label>
									<input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" placeholder="Enter contact number for college"  value="{{old('contact')}}" >
									@error('contact')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">Course</label>
									<input type="text"  name="course_id" class="form-control @error('course_id') is-invalid @enderror" placeholder="Enter courses"  value="{{old('course_id')}}" >
									@error('course_id')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">College</label>
									<input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter college"  value="{{old('name')}}" >
									@error('name')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">Branch</label>
									<select name="branch_id" id="branch_id" class="form-control @error('branch_id') is-invalid @enderror"  >
										<option value="">Select Branch</option>
										@foreach($branchList as $branch)
											<option value="{{$branch->id}}" {{old('branch_id') != null && old('branch_id') == $branch->id ? 'selected' : '' }}>{{$branch->branch_name}}</option>
										@endforeach
									</select>
									@error('branch_id')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6">
									<label for="listingTitle">State</label>
									<select name="state_id" id="state_id" class="form-control @error('state_id') is-invalid @enderror"  >
										<option value="">Select State</option>
										@foreach($states as $state)
											<option value="{{$state->id.'##'.$state->state_name}}" {{old('state_id') != null && old('state_id') == $state->id ? 'selected' : '' }}>{{$state->state_name}}</option>
										@endforeach
									</select>
									@error('state_id')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-6 mb-6" id="city_div">
									<label for="listingTitle">City</label>
									<select name="city_id" id="city_id" class="form-control">
										<option value="">Select City</option>
									</select>
									@error('city_id')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-12 mb-6">
									<label for="discribeTheListing">College Highlightes</label>
									<textarea class="form-control @error('highlight') is-invalid @enderror" name="highlight" rows="6" placeholder="Enter highlights for college"  >{{old('highlight')}}</textarea>
									@error('highlight')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-12 mb-6">
									<label for="discribeTheListing">Mission</label>
									<textarea class="form-control @error('mission') is-invalid @enderror" name="mission" rows="6" placeholder="Describe mission of college"  >{{old('mission')}}</textarea>
									@error('mission')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-12 mb-6">
									<label for="discribeTheListing">History</label>
									<textarea class="form-control @error('history') is-invalid @enderror" name="history" rows="6" placeholder="Enter something abour college history"  >{{old('history')}}</textarea>
									@error('history')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-12 mb-6">
									<label for="discribeTheListing">College Facilites</label>
									<textarea class="form-control @error('facilites') is-invalid @enderror" name="facilites" rows="6" placeholder="Describe the facalities of college" >{{old('facilites')}}</textarea>
									@error('facilites')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
								<div class="form-group col-md-12 mb-6">
									<label for="addTags">College Address</label>
									<input type="text"  name="address" class="form-control @error('address') is-invalid @enderror" id="addTags" placeholder="Enter address of college"   value="{{old('address')}}">
									@error('address')
										<div class="invalid-feedback">
											{{$message}}
									  	</div>
									@enderror
								</div>
							</div>
							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
									</button>
									<a href="/" class="btn btn-secondary"> Go Back</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- Gallery -->
			</div>
		</section>
	</div>
@endsection

@section('script')
	<script>
		$(document).ready(function(){
			@if(old('state_id') != null)
				$('#state_id').val("{{old('state_id')}}").change();
			@endif
			$(document).on('change','#state_id',function(){
				var stateData = $(this).val().split('##');
				$.ajax({
					method: "POST",
					url:"{{route('get-cities')}}",
					data:{
						'_token': "{{csrf_token()}}",
						'state_id[]' : stateData[0],
						'multiple' : false,
						'hashed_type': true
					},
					success:function(response){
						if(response.success){
							$('#city_div').html(response.success);
							@if(old('city_id') != null)
								$('#city_id').val("{{old('city_id')}}").change();
							@endif
						}
					}
				})
			});
		});
	</script>
@endsection