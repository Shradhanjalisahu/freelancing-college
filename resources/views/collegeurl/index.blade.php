@extends('collegeurl.layout')
 
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
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>College Name</th>
            <th>State</th>  
            <th>college URL</th>
            <th width="280px">Action</th>
        </tr> 
         @foreach ($collegeurl as $college)
        <tr>
            
            <td>{{ ++$i }}</td>
             <td>{{ $college->college_name }}</td>
            <td>{{ $college->state }}</td>
            <td></td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="">Show</a>
    
                    <a class="btn btn-primary" href="">Edit</a>
   
                    
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
       @endforeach 
    </table>
    <form action="" method="POST">
    @csrf
  
    
        
   

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
    <div class="form-group col-md-6">
      <label for="inputEmail4">State</label>
      <input type="state"  name="state" class="form-control" id="inputState4" placeholder="Enter State Name">
    </div>
  </div>

</form>
  
   
@endsection