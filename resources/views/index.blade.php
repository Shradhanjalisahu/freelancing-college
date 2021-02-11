
@extends('layout.collegeLayout.design_layout')

@section('style')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

<div class="main-wrapper">
  <!-- HEADER -->
	<section class="py-7 py-md-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-lg-1" id="main-result">
					<div class="search-result-bar">
						<p id="total-results"></p>
						
					</div>
					<div class="search-result-bar">
    <h5 id="total-results">
        @if($total > 0)
            We found total {{$total}} college(s) for you
        @else 
            OOPS! no colleges found, try different filters

        @endif
        
    </h5>
    <h3><a href="{{url('home')}} ">Home</a></h3>
    
</div>
					<div class="row" >
						@foreach($colleges as $college)
							<div class="col-md-4">
								<div class="card rounded-0 card-hover-overlay card-listing" data-lat="-33.922125" data-lag="151.159277" data-id="1">
									<div class="position-relative">
										<img class="card-img rounded-0 listing-img" src="https://images.unsplash.com/photo-1553717361-9c5b614f6975?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8Y29sbGVnZSUyMGJ1bGRpbmdzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="ace-college-of-engineering--management-agra.jpg" class="img-fluid mr-3" style="height:180px; max-width:230px; font-size: 1rem !important;">
										<div class="card-img-overlay">
											
											<h3 class="listing-title">
												<a href="{{url('collegedetail/' . $college->url)}}">
													{{$college->collegeName}}
												</a>
											</h3>
											<p class="text-white listing-address">{{$college->address}}</p>
										</div>
									</div>
									<div class="card-footer bg-transparent">
										<ul class="list-unstyled d-flex mb-0 py-2">
											<li class="text-primary">
												{{$college->facilites}}
											</li>
										
										</ul>
									</div>
								</div>
							</div>
						@endforeach

						
						
					</div>
					
				</div>
				<div class="col-lg-4 pr-xl-6 mt-5">
					<h5 class="mb-2" id="result-text"></h5>
					<div class="mb-4">
						<select name="state_id[]" id="state_id" class="form-control form-control-lg" multiple>
							<option value="">Select State</option>
							@foreach($states as $state)
								<option value="{{$state->id}}" data-name="{{$state->state_name}}">{{$state->state_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-6" id="city_div">
						<select name="city_id" id="city_id" class="form-control form-control-lg " multiple>
							<option value="">Select City</option>
						</select>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('script')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
		$(document).ready(function(){
			function getUrlData(){
				console.log(URL)
			}
			getUrlData();
			$('#state_id').select2({
				placeholder: "Select states",
			});
			$('#city_id').select2({
				placeholder: "Select cities",
			});
			$(document).on('change','#state_id',function(){
				var state_id = $(this).val();
				var state_name = $(this).find(':selected').data('name');
				if(state_name != undefined){
					$('#result-text').html('Showing best colleges of '+state_name);
				} else {
					$('#result-text').html('');
				}
				$.ajax({
					method: "POST",
					url:"{{route('get-cities')}}",
					data:{
						'_token': "{{csrf_token()}}",
						'state_id[]' : state_id,
						'multiple' : true,
					},
					success:function(response){
						if(response.success){
							$('#city_div').html(response.success);
							$('#city_id').select2({
								placeholder: "Select cities",
							});
							
						}
					}
				});

				$.ajax({
					method: "POST",
					url:"{{route('get-colleges')}}",
					data:{
						'_token': "{{csrf_token()}}",
						'state_id[]' : state_id,
						'city_id[]' : $('#city_id').val(),
					},
					success:function(response){
						if(response.success){
							$('#main-result').html(response.success);
							
						}
					}
				});
			});

			$(document).on('change','#city_id',function(){
				var city_id = $(this).val();
				
				$.ajax({
					method: "POST",
					url:"{{route('get-colleges')}}",
					data:{
						'_token': "{{csrf_token()}}",
						'state_id[]' : $('#state_id').val(),
						'city_id[]' : city_id,
					},
					success:function(response){
						if(response.success){
							$('#main-result').html(response.success);
							
						}
					}
				});
			});
		})
	</script>
@endsection