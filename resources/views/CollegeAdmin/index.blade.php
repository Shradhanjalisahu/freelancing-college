
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
                  <a class="dropdown-item" href="{{ route('CollegeAdmin.newCollege') }}">Add College Details</a>
                  <a class="dropdown-item" href="">URL</a>
                  <a class="dropdown-item" href="">Search College</a>
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


<!-- ====================================
——— DASHBOARD LIST ADMIN
===================================== -->
<section class="bg-light py-5 height100vh">
  <div class="container">
    <nav class="bg-transparent breadcrumb breadcrumb-2 px-0 mb-5" aria-label="breadcrumb">
      <h2 class="font-weight-normal mb-4 mb-md-0">Dashboard</h2>
      <ul class="list-unstyled d-flex p-0 m-0">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Dashboard</li>
      </ul>
    </nav>

    <div class="row">
      <!-- Listings -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-white">
            <span class="text-content">Listings</span>
            <span class="badge badge-primary">Monthly</span>
          </div>

          <div class="card-body widget-content">
            <span class="widget-content-title">21</span>
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0">Compare to last month</p>
              <span class="text-success"> 8% <i class="fa fa-level-up" aria-hidden="true"></i> </span>
            </div>
            <a href="my-listings.html" class="btn btn-link">All listing</a>
          </div>
        </div>
      </div>

      <!-- Visits -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-white">
            <span class="text-content">Review Recived</span>
            <span class="badge badge-primary">Weekly</span>
          </div>

          <div class="card-body widget-content">
            <span class="widget-content-title">203</span>
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0">Audience</p>
              <span class="text-success"> 12% <i class="fa fa-level-up" aria-hidden="true"></i> </span>
            </div>
            <a href="admin-reviews.html" class="btn btn-link">All Reviews</a>
          </div>
        </div>
      </div>

      <!-- Booking -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-white">
            <span class="text-content">Booking</span>
            <span class="badge badge-primary">Daily</span>
          </div>

          <div class="card-body widget-content">
            <span class="widget-content-title">87</span>
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0">Compare to yesterday</p>
              <span class="text-success"> 9% <i class="fa fa-level-up" aria-hidden="true"></i> </span>
            </div>
            <a href="admin-booking-requests.html" class="btn btn-link">All Booking</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!-- Booking Requests -->
        <div class="card">
          <div class="card-header bg-white">
            <span class="text-content">Booking Requests</span>
          </div>

          <div class="card-body p-0 table-responsive">
            <table class="table mb-0" style="width:100%">
              <tbody>
                <tr>
                  <td>
                    <img class="img-sm rounded" src="assets/img/listing/listing-03.jpg" alt="Image">
                  </td>
                  <td class="text-capitalize">
                    <a class="text-hover-primary text-muted" href="listing-rental.html">think Coffee</a>
                    <span class="d-block text-capitalize">Eat & Drink</span>
                  </td>
                  <td>
                    <div class="media media-xs align-items-center">
                      <img class="rounded-circle mr-3" src="assets/img/user/user-xs-2.jpg" alt="Image">
                      <div class="media-body">
                        <a class="text-muted font-weight-bold text-hover-primary" href="user-profile.html">Abby</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-warning px-2 py-1">Pending</span>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img class="img-sm rounded" src="assets/img/listing/listing-5.jpg" alt="Image">
                  </td>
                  <td class="text-capitalize">
                    <a class="text-hover-primary text-muted" href="listing-rental.html">Burger House</a>
                    <span class="text-capitalize d-block">Eat & Drink</span>
                  </td>
                  <td>
                    <div class="media media-xs align-items-center">
                      <img class="rounded-circle mr-3" src="assets/img/user/user-xs-5.jpg" alt="Image">
                      <div class="media-body">
                        <a class="text-muted font-weight-bold text-hover-primary" href="user-profile.html">Daniel</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-warning px-2 py-1">Pending</span>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img class="img-sm rounded" src="assets/img/listing/listing-8.jpg" alt="Image">
                  </td>
                  <td class="text-capitalize">
                    <a class="text-hover-primary text-muted" href="listing-rental.html">Hotel Govendor</a>
                    <span class="text-capitalize d-block">Hotels</span>
                  </td>
                  <td>
                    <div class="media media-xs align-items-center">
                      <img class="rounded-circle mr-3" src="assets/img/user/user-xs-4.jpg" alt="Image">
                      <div class="media-body">
                        <a class="text-muted font-weight-bold text-hover-primary" href="user-profile.html">Adam
                          Smith</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-warning px-2 py-1">Pending</span>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img class="img-sm rounded" src="assets/img/listing/listing-04.jpg" alt="Image">
                  </td>
                  <td class="text-capitalize">
                    <a class="text-hover-primary text-muted" href="listing-rental.html">Tom's Restaurant</a>
                    <span class="text-capitalize d-block">Eat & Drink</span>
                  </td>
                  <td>
                    <div class="media media-xs align-items-center">
                      <img class="rounded-circle mr-3" src="assets/img/user/user-xs-1.jpg" alt="Image">
                      <div class="media-body">
                        <a class="text-muted font-weight-bold text-hover-primary" href="user-profile.html">Aaren</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-success px-2 py-1">Approved</span>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img class="img-sm rounded" src="assets/img/listing/listing-7.jpg" alt="Image">
                  </td>
                  <td class="text-capitalize">
                    <a class="text-hover-primary text-muted" href="listing-event.html">Sticky Band</a>
                    <span class="text-capitalize d-block">Events</span>
                  </td>
                  <td>
                    <div class="media media-xs align-items-center">
                      <img class="rounded-circle mr-3" src="assets/img/user/user-xs-3.jpg" alt="Image">
                      <div class="media-body">
                        <a class="text-muted font-weight-bold text-hover-primary" href="user-profile.html">Abriel</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-danger px-2 py-1">Canceled</span>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img class="img-sm rounded" src="assets/img/listing/listing-9.jpg" alt="Image">
                  </td>
                  <td class="text-capitalize">
                    <a class="text-hover-primary text-muted" href="listing-event.html">The Mayfair Hotel</a>
                    <span class="text-capitalize d-block">Hotels</span>
                  </td>
                  <td>
                    <div class="media media-xs align-items-center">
                      <img class="rounded-circle mr-3" src="assets/img/user/user-xs-5.jpg" alt="Image">
                      <div class="media-body">
                        <a class="text-muted font-weight-bold text-hover-primary" href="user-profile.html">Dainel</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-danger px-2 py-1">Canceled</span>
                  </td>
                </tr>

              </tbody>
            </table>
            <div class="card-footer bg-white">
              <a href="admin-booking-requests.html" class="btn btn-link p-0">bookings requests</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!-- Messages -->
        <div class="card">
          <div class="card-header bg-white">
            <span class="text-content">Messages</span>
          </div>
          <div class="card-body px-0">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-xs-1.jpg" alt="Image">
                    <span class="status"></span>
                  </div>
                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">Aaren</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque
                        doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">12 Jun</span>

                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-xs-2.jpg" alt="Image">
                    <span class="status active"></span>
                  </div>
                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">Abby</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">25 July</span>

                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-xs-3.jpg" alt="Image">
                    <span class="status"></span>
                  </div>
                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">Abriel</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque
                        doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">09 Feb</span>

                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-1.jpg" alt="Image">
                    <span class="status active"></span>
                  </div>

                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">Emma</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque
                        doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">05 Jan</span>

                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-2.jpg" alt="Image">
                    <span class="status"></span>
                  </div>

                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">Emily</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque
                        doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">17 Mar</span>

                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-3.jpg" alt="Image">
                    <span class="status"></span>
                  </div>

                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">William</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque
                        doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">27 May</span>

                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="media media-message">
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/user-4.jpg" alt="Image">
                    <span class="status"></span>
                  </div>

                  <div class="media-body d-flex justify-content-between">
                    <div class="message-contents">
                      <h4 class="title">Sophia</h4>
                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque
                        doloremque odio,
                        eligendi delectus vitae.</p>
                    </div>

                    <span class="date">20 Jun</span>

                  </div>
                </a>
              </li>

            </ul>

          </div>
          <div class="card-footer bg-white">
            <a href="messages-list-admin.html" class="btn btn-link p-0">All messages</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


    </div> 
    @endsection