@extends('posts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
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
   
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
  
    
        
   

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Full Name</label>
      <input type="name"  name="name" class="form-control" id="inputName4" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email address</label>
      <input type="Email" name="email" class="form-control" id="inputEmail4" placeholder="Enter Email">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">College Address</label>
      <input type="address"  name="address" class="form-control" id="inputAddress4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">College Facilites</label>
      <input type="College Facilites" name="facilites" class="form-control" id="inputFacilites4" placeholder="College Facilites">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mission</label>
      <textarea type="mission"  name="mission" class="form-control" id="inputMission4" placeholder="College Mission"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">History</label>
      <textarea type="history" name="history" class="form-control" id="inputHistory4" placeholder="College History"></textarea>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">College Highlightes</label>
      <textarea  type="history" name="highlight" class="form-control" id="inputHighlightes4" placeholder="College Highlightes"></textarea>
    </div>
    
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputState">College Link</label>
      <input type="Link" name="link" class="form-control" id="inputLink4" placeholder="Enter Link">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputState">Choose Your Location</label>
      <select id="inputState" name="location" class="form-control">
        <option selected>Choose...</option>
        <option>Chandigad</option>
        <option>New Delhi</option>
        <option>Hyderabad</option>
        <option>Odisha</option>
      </select>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Course Interested IN</label>
      <select id="inputState" name="course" class="form-control">
        <option selected>Choose...</option>
        <option>MCA</option>
        <option>BCA</option>
        <option>BSC</option>
        <option>Btch.</option>
      </select>
    </div>
    
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection