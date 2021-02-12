
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
          <div class="row">

      @foreach($branchList as $branch)
          <div class="col-sm-3 col-xs-6">
            <a href="/index/{{strtolower($branch->branch_name)}}" class="interestContent">
              <span>
                <img src="https://aglasem-cdn.s3.ap-south-1.amazonaws.com/icons8-images/engineering.png">               <!-- <img src="/assets/new-theme/images/home-icon/engineering.png" alt="engineering" style="width: 3rem;margin-bottom:1rem;" class="stream_icon" > -->
                <br />
               {{$branch->branch_name}}
              </span>
            </a>
          </div>

            
            @endforeach
          </div>
          
        </div>
        
      </div>
    </div>
  </section>
</div>
@endsection
