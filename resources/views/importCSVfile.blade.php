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
		<div class="container mt-5 text-center">
        <h2 class="mb-4">
            Import and Export CSV & Excel 
        </h2>

       
     <form method="post" enctype="multipart/form-data" id="upload-form">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" id="selected_file"/>
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" id="upload-file" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
    </div>
	</div>

@endsection
@section('script')
<script>
		$(document).ready(function(e){
			$('#upload-file').on('click', function(e){
				e.preventDefault();
				var formElement = document.querySelector('#upload-form');
				var formData = new FormData(formElement);
				var request = new XMLHttpRequest();
				request.open("POST", "{{route('import-file')}}");
				request.send(formData);
			});
		});
</script>
@endsection

