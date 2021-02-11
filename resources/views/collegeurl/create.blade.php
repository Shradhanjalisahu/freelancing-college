@extends('collegeurl.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('collegeurl.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('collegeurl.store') }}" method="POST">
    @csrf
  
    
        
   

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">College Name</label>
      <input type="name"  name="college_name" class="form-control" id="inputName4" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">State</label>
      <input type="state"  name="state" class="form-control" id="inputState4" placeholder="Enter State Name">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection