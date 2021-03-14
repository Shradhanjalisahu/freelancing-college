@extends('layout.collegeLayout.design_layout')
@section('title','Add College |')

@section('content')
	<div class="main-wrapper">
		<!-- HEADER -->
		
	
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
			// $('.toast').toast({animation: false, delay: 2000});
    		
			$('#upload-file').on('click', function(e){
				e.preventDefault();
				var formElement = document.querySelector('#upload-form');
				var file = document.getElementById('selected_file');
				if(!file || !file.files || !file.files[0]){
					showToast('warning','Warning: Import report', 'Please select a file before upload.',{
						autohide:false, 
						delay: 2000 
					});
					return;
				}
				var formData = new FormData(formElement);
				var opts = {
					data: formData,
					method: 'POST'
				}
				// request the api
				requestXhr("{{route('import-file')}}", opts, function(response){
					if(response){
						response = JSON.parse(response);
						// warning, error
						showToast('success','Success: Import report', '<ol type="1"><li>Total Record: '+response.total+'</li> <li>Total Succeed: '+response.success+'</li> <li>Total Failed: '+response.failed+'</li></ol>',{
							autohide:false, 
							delay: 2000 
						});
					}else{
						showToast('error','Failed: Import report', 'Failed to import the file.',{
							autohide:false, 
							delay: 2000 
						});
					}
				})
			});

			function showToast(type, title, message, options){
				$('#toast-title').html(title);
				$('#toast-body').html(message);
				$('#toast-body').removeClass('custom-body');
				
				var classNm = 'bg-success';
				if(type == "error" ){
					classNm = 'bg-danger';
				}else if(type == 'warning'){
					classNm = 'bg-warning';
				}else{
					$('#toast-body').addClass('custom-body');
				}
				$('#toast-header').removeClass();
				$('#toast-header').addClass('toast-header ' + classNm);
				$('.toast').toast(options);
				$('.toast').toast('show');
			}

			function requestXhr(url, options, callback){
				var request = new XMLHttpRequest();
				request.onreadystatechange = function() {
					if (request.readyState === 4) {
						callback(request.response);
					}
				}
				request.open(options.method, "{{route('import-file')}}");
				request.send(options.data);
			}
		});
</script>
@endsection

