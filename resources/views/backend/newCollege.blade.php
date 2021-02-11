@extends('layout.collegeLayout.design_layout')


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
                  <a class="dropdown-item" href="{{ url ('url')}}">URL</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="messages-list-admin.html">
                  <i class="fa fa-envelope" aria-hidden="true"></i> Messages <span class="badge badge-success">12</span> </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="admin-booking-requests.html">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Booking Request </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="admin-reviews.html">
                  <i class="fa fa-eye" aria-hidden="true"></i> Reviews </a>
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
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Dashboard</li>
      </ul>
    </nav>


<form>
      <!-- About -->
      <div class="card">
        <div class="card-body px-6 pt-6 pb-1">
          <h3 class="h4 mb-4">About</h3>
          <p class="mb-5">We are not responsible for any damages caused by the use of this website, or by posting business listings here. Please use our site at your own discretion and exercise good judgement as well as common sense when advertising business here.</p>
          <form action="" method="post">
            <div class="row">
              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>

              
              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>

              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>

              
              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>


              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>

              
              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>


              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>

              
              <div class="form-group col-md-6 mb-6">
                <label for="listingTitle">Listing Title</label>
                <input type="text" class="form-control" placeholder="Listing Title">
              </div>


              <div class="form-group col-md-12 mb-6">
                <label for="discribeTheListing">Discribe the listing</label>
                <textarea class="form-control" rows="6" placeholder="Discribe the listing"></textarea>
              </div>

              <div class="form-group col-md-12 mb-6">
                <label for="addTags">Tags</label>
                <input type="text" class="form-control" id="addTags" placeholder="Add Tags">
              </div>
            </div>
          </form>

        </div>
      </div>

      <!-- Contact -->
      <div class="card">
        <div class="card-body p-6">
          <h3 class="h4 mb-4">Contact</h3>
          <p class="mb-5">We are not responsible for any damages caused by the use of this website, or by posting business listings here.
            Please use our site at your own discretion and exercise good judgement as well as common sense when advertising
            business here.</p>

          <div class="row">
            <div class="col-md-6">

              <div class="form-group mb-6">
                <label for="exampleFormControlSelect1">Listing Region</label>
                <div class="select-default bg-white">
                  <select class="select-location">
                    <option>All Location</option>
                    <option>U.S.A</option>
                    <option>U.K</option>
                    <option>ASIA</option>
                  </select>
                </div>
              </div>

              <div class="form-group mb-6">
                <label for="listingPhone">Listing Phone</label>
                <input type="phone" class="form-control" placeholder="546 - 545 - 2546">
              </div>

              <div class="form-group mb-6">
                <label for="listingEmail">Listing Email</label>
                <input type="email" class="form-control" placeholder="hello@example.com">
              </div>

              <div class="form-group mb-6">
                <label for="listingWebsite">Listing Website</label>
                <input type="text" class="form-control" id="listingWebsite" placeholder="http://">
              </div>

            </div>

            <div class="col-md-6 map-place-search-wrapper">
              <div class="form-group mb-0 ">
                <label for="listingAddress">Listing Address</label>
                <input type="text" class="form-control" id="listingAddress" placeholder="Type Location">
              </div>

              <div class="map-place-search">
                <div id="map-add-edit"></div>
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- Gallery -->
      <div class="card">
        <div class="card-body p-6">
          <h3 class="h4 mb-4">Gallery</h3>
          <p class="mb-5">We are not responsible for any damages caused by the use of this website, or by posting business listings here.
            Please use our site at your own discretion and exercise good judgement as well as common sense when advertising
            business here.</p>

          <div class="form-group position-relative mb-6 form-group-dragable">
            <input type="file" class="custom-file-input">
            <label class="custom-file-label" for="customFile">
              Click or Drag images here
            </label>
          </div>

          <div class="form-group">
            <label for="videoUrl">Video URL</label>
            <input type="text" class="form-control" id="videoUrl" placeholder="http://">
          </div>
        </div>
      </div>

      <!-- Social -->
      <div class="card">
        <div class="card-body p-6">
          <h3 class="h4 mb-4">Social</h3>
          <p class="mb-5">We are not responsible for any damages caused by the use of this website, or by posting business listings here.
            Please use our site at your own discretion and exercise good judgement as well as common sense when advertising
            business here.</p>

          <div class="row">
            <div class="form-group col-md-6 mb-6">
              <label for="linkedUrl">Linked in URL</label>
              <input type="text" class="form-control" placeholder="http://linkedin.com/listty">
            </div>

            <div class="form-group col-md-6 mb-6">
              <label for="facebookUrl">Facebook URL</label>
              <input type="text" class="form-control" placeholder="http://facebook.com/listty">
            </div>

            <div class="form-group col-md-6 mb-6">
              <label for="twitterUrl">Twitter URL</label>
              <input type="text" class="form-control" placeholder="http://twitter.com/listty">
            </div>

            <div class="form-group col-md-6 mb-6">
              <label for="youtubeUrl">You Tube URL</label>
              <input type="text" class="form-control" placeholder="http://youtube.com/listty">
            </div>
          </div>
        </div>
      </div>

      <!-- Opening Hours -->
     

      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 col-xl-5">
          <div class="mb-6">
            <button type="submit" class="btn btn-lg btn-primary btn-block">submit</button>
          </div>
        </div>
      </div>

    </form>
    </div>
</section>


    </div> 
    @endsection