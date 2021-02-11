@extends('profile.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
                <br><br>
                <h2>COLLEGE URL GENERET</h2>
            </div>
            <br>
                <br><br>
            
             <div class="pull-right">
                

                <a class="btn btn-success" href="{{ route('profile.create') }}"> Insert new college Name</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
  
    <div>
        @foreach ($profile as $profile)

    <h2>{{ $profile->id}}</h2>
    <p>{{ $profile->college_name }}</p>
    <p>{{ $profile->location }}</p>
     <h2></h2>


@endforeach
    </div>
    
  
    
        
   

  
  
   
@endsection