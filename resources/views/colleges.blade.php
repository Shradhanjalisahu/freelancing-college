
@extends('layout.collegeLayout.design_layout')


@section('content')
<div class="main-wrapper">
      <!-- HEADER -->
<section class="bg-light pb-5 height100vh">
  <div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center py-7">
      <h2 class="mb-5 mb-lg-0 font-weight-normal">COLLEGE DETAILS</h2>
      <form style="min-width: 200px">
        <div class="select-default bg-white">
         <div class="mb-6">
           <a href="{{url('newcollege')}}" class="btn btn-sm btn-success pull-right">Add New</a>
          </div>
          
          <div class="mb-6">
           <a href="{{url('index')}}" class="btn btn-sm btn-success pull-right">View College</a>
          </div>
        </div>
      </form>
    </div>

    <table id="my-favourites" class="display nowrap table-data-default" style="width:100%">
      <thead>
        <tr class="table-row-bg-white">
          
          <th>List Of Colleges</th>
          <th>Detail Of College</th>
         <th>VIEW</th>
        </tr>
      </thead>
      <tbody>
       @foreach($collegesList as $ind => $college)
        <tr class="table-row-bg-white">
          
          <td class="td-details">
           {{$college->name}}
          </td>
          <td class="td-details">
           {{$college->facilites}}
          </td>
         
         
            <td><a href="{{url('collegedetail/' . $college->url)}}" class="btn btn-sm btn-primary">View Detail</a></td>
    
        </tr>
       @endforeach
        
      </tbody>
    </table>

  </div>
</section>



     </div> 
    @endsection