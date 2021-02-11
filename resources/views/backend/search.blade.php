<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Map - Listty</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('frontend_assets/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/listtyicons/style.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/menuzord/css/menuzord.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/map/css/map.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/selectric/selectric.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/dzsparallaxer/dzsparallaxer.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/owl-carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/map/css/map.css')}}')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/rateyo/jquery.rateyo.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <link href="{{ asset('frontend_assets/assets/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">


    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('frontend_assets/assets/css/style.css')}}" rel="stylesheet" id="option_style">

    <!-- <link rel="stylesheet" href="assets/css/default.css" id="option_color"> -->

    <!-- FAVICON -->
    <link href="{{ asset('frontend_assets/assets/img/favicon.png')}}" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>

  <body id="body" class="up-scroll">

    <!-- Preloader -->
    <div id="preloader" class="smooth-loader-wrapper">
      <div class="smooth-loader">
        <div class="loader1">
          <div class="loader-target">
            <div class="loader-target-main"></div>
            <div class="loader-target-inner"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-wrapper">
      <!-- HEADER -->
      <header class="header">
        <nav class="nav-menuzord navbar-sticky">
          <div class="container clearfix">
            <div id="menuzord" class="menuzord menuzord-responsive">

              <a href="index.html" class="menuzord-brand">
                <svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="140" height="44">
                  <path class="fill-primay" d="M0 44V0h139.813v44H0zM137.346 2.467H2.467v39.065h134.879V2.467z" />
                  <path class="fill-primay"
                    d="M120.927 22.389v11.095h-4.566V22.389a371.288 371.288 0 0 0-2.086-2.888 347.047 347.047 0 0 1-2.2-3.053 386.86 386.86 0 0 0-2.201-3.053c-.7-.959-1.395-1.922-2.086-2.888h5.617l5.255 7.287 5.222-7.287h5.649c.002 0-8.604 11.882-8.604 11.882zM98.034 33.484h-4.565V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-21.908 0H71.56V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-17.425-1.789c-.69.623-1.511 1.116-2.463 1.477-.953.361-1.987.542-3.104.542-1.007 0-1.982-.143-2.923-.427a10.814 10.814 0 0 1-2.661-1.214h.033a9.928 9.928 0 0 1-1.577-1.215 18.73 18.73 0 0 1-.953-.952l3.416-3.151c.153.197.399.432.739.706.339.274.728.537 1.166.788.44.253.902.467 1.38.64.481.175.941.262 1.379.262.372 0 .744-.044 1.117-.131.359-.082.703-.22 1.018-.41.305-.185.564-.437.755-.739.197-.306.296-.689.296-1.149 0-.175-.06-.366-.181-.574-.12-.208-.329-.432-.624-.673-.296-.241-.706-.498-1.232-.771a20.567 20.567 0 0 0-1.971-.87 25.42 25.42 0 0 1-2.562-1.132 8.896 8.896 0 0 1-2.053-1.428 5.903 5.903 0 0 1-1.347-1.871c-.317-.7-.476-1.51-.476-2.429 0-.94.175-1.822.526-2.642a6.21 6.21 0 0 1 1.494-2.133c.646-.602 1.423-1.072 2.332-1.412.908-.339 1.911-.509 3.006-.509.591 0 1.22.077 1.889.23.668.153 1.319.35 1.954.591a12.95 12.95 0 0 1 1.79.837c.558.317 1.023.64 1.396.968l-2.825 3.545a15.71 15.71 0 0 0-1.281-.788 10.316 10.316 0 0 0-1.281-.558 4.311 4.311 0 0 0-1.478-.263c-.919 0-1.637.181-2.151.542-.515.361-.772.881-.772 1.559 0 .307.093.586.279.837.186.252.438.482.756.689.348.225.717.417 1.1.574.416.176.854.34 1.314.492 1.314.504 2.42 1.013 3.318 1.526.898.514 1.62 1.062 2.168 1.642s.936 1.204 1.166 1.871c.23.668.345 1.395.345 2.183 0 .963-.197 1.871-.591 2.724a6.803 6.803 0 0 1-1.626 2.216zM34.839 10.507h4.532v22.977h-4.532V10.507zm-20.036 0h4.566v18.415h9.263v4.563H14.803V10.507z" />
                </svg>
              </a>
              <div class="float-right btn-wrapper">
                <a class="btn btn-outline-primary" href="add-listings.html">+ <span>Add listing</span></a>
              </div>
              <ul class="menuzord-menu menuzord-right">
                <li class="active">
                  <a href="javascript:0">Home</a>
                  <ul class="dropdown">
                    <li><a href="index.html">Home Map</a></li>
                    <li><a href="index-2.html">Home Travel</a></li>
                    <li><a href="index-3.html">Home City</a></li>
                    <li><a href="index-4.html">Home Automobile</a></li>
                  </ul>
                </li>
                <li class="">
                  <a href="javascript:0">Listing</a>
                  <div class="megamenu">
                    <div class="megamenu-row">
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              <i class="fa fa-map mr-2 text-primary" aria-hidden="true"></i>
                              Half Screen Map
                            </h5>
                          </li>
                          <li>
                            <a href="listings-half-screen-map-list.html"> List Layout </a>
                          </li>
                          <li>
                            <a href="listings-half-screen-map-grid.html"> Grid Layout </a>
                          </li>
                        </ul>
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              <i class="fa fa-address-book mr-2 text-primary" aria-hidden="true"></i>
                              Listing Without Map
                            </h5>
                          </li>
                          <li>
                            <a href="listing-grid-right-sidebar-without-map.html">Grid Right Sidebar</a>
                          </li>
                          <li>
                            <a href="listing-grid-fullwidth-without-map.html">Grid Fullwidth</a>
                          </li>
                          <li>
                            <a href="listing-list-right-sidebar-without-map.html">List Right Sidebar</a>
                          </li>
                          <li>
                            <a href="listing-list-fullwidth-without-map.html">List Fullwidth</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              <i class="fa fa-th-large text-primary mr-2" aria-hidden="true"></i>
                              Listing Grid
                            </h5>
                          </li>
                          <li>
                            <a href="listing-grid-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li>
                            <a href="listing-grid-right-sidebar.html">Right Sidebar</a>
                          </li>
                          <li>
                            <a href="listing-grid-fullwidth.html">Fullwidth</a>
                          </li>
                        </ul>
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              <i class="fa fa-th-list text-primary mr-2" aria-hidden="true"></i>
                              Listing List
                            </h5>
                          </li>
                          <li>
                            <a href="listing-list-left-sidebar.html"> Left Sidebar</a>
                          </li>
                          <li>
                            <a href="listing-list-right-sidebar.html"> Right Sidebar</a>
                          </li>
                          <li>
                            <a href="listing-list-fullwidth.html"> Fullwidth</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col4">
                        <ul class="list-unstyled">
                          <li>
                            <h5 class="heading">
                              <i class="fa fa-file-text text-primary mr-2" aria-hidden="true"></i>
                              Single Listing
                            </h5>
                          </li>
                          <li>
                            <a href="">Store Listing</a>
                          </li>
                          <li>
                            <a href="">Vendor Listing</a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="">
                  <a href="javascript:0">Pages</a>
                  <ul class="dropdown">
                    <li><a href="">Contact Us</a></li>
                    
                    <li><a href="">User Profile</a></li>
                   
                  </ul>
                </li>
                <li class="">
                  <a href="blog.html">Blog</a>
                </li>
                <li class="">
                  <a href="javascript:0">Admin</a>
                  <ul class="dropdown">
                    <li>
                      <a href="javascript:0">User Admin</a>
                      <ul class="dropdown">
                        <li><a href="dashboard-user.html">Dashboard</a></li>
                        <li><a href="my-bookings.html">My Booking</a></li>
                        <li><a href="my-favourites.html">My Favourites</a></li>
                        <li><a href="my-reviews.html">My reviews</a></li>
                        <li><a href="profile-user.html">My Profile</a></li>
                        <li><a href="message-users.html">My Messages</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="javascript:0">List Admin</a>
                      <ul class="dropdown">
                        <li><a href="dashboard-list-admin.html">Dashboard</a></li>
                        <li><a href="my-listings.html">My Listings</a></li>
                        <li><a href="add-listings.html">Add Listings</a></li>
                        <li><a href="edit-listings.html">Edit Listings</a></li>
                        <li><a href="admin-booking-requests.html">Admin Booking</a></li>
                        <li><a href="admin-reviews.html">Admin Reviews</a></li>
                        <li><a href="earnings.html">Earnings</a></li>
                        <li><a href="withdrawal-balance.html">Withdraw</a></li>
                        <li><a href="payment-process.html">Payment</a></li>
                        <li><a href="profile-list-admin.html">My Profile</a></li>
                        <li><a href="messages-list-admin.html">My Messages</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="javascript:0">Site Admin</a>
                      <ul class="dropdown">
                        <li><a href="dashboard-stie-admin.html">Dashboard</a></li>
                        <li><a href="admin-listings.html">Admin Listings</a></li>
                        <li><a href="user-list-owners.html">List Owners</a></li>
                        <li><a href="user-generals.html">General Users</a></li>
                        <li><a href="profile-site-admin.html">My Profile</a></li>
                      </ul>
                    </li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="sign-up.html">Create Account</a></li>
                  </ul>
                </li>

              </ul>

            </div>
          </div>
        </nav>
      </header>


<!-- MAP SECTION -->
<div class="clearfix p-0">
	<div id="map-canvas"></div>
</div>


<!-- ====================================
———	LOCATION SEARCH ONE
===================================== -->
<div class="py-7 py-md-0 bg-light">
  <div class="container position-relative px-md-0">
    <div class="search-box">
      <form method="GET" action="listings-half-screen-map-list.html">
        <div class="form-group mb-md-0">
          <input type="text" class="form-control" placeholder="Enter your keywords">
        </div>
        <div class="select-default">
          <select class="select-location">
            <option>All Location</option>
            <option>U.S.A</option>
            <option>U.K</option>
            <option>ASIA</option>
          </select>
        </div>
        <div class="select-default">
          <select class="select-location">
            <option>All Categories</option>
            <option>Restaurants</option>
            <option>Hotels</option>
            <option>Nightclubs</option>
            <option>Automotive</option>
            <option>Museums</option>
            <option>Movie Theaters</option>
            <option>Shopping</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">
          Search
        </button>
      </form>
    </div>
  </div>
</div>

<!-- ====================================
———	BROWSER CATEGORI AREA
===================================== -->
<section class="pt-md-10 sec-pb-70 pb-6 bg-light">
	<div class="container">
		<div class="section-title pt-md-8">
			<h2>Browse by Categories</h2>
			<p>Explore and connect with great local businesses </p>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-car-1"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Cars &amp; Vehicles</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Bikes &amp; Scooters</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Commercial Vehicles</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Bicycles Spare Parts</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Accessories</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Other Vehicles</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-mobile-phone"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Electronics &amp; Gedgets</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Mobile Phones</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Computers &amp; Tablets</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Computer Accessories</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Cameras &amp; Camcorders</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Mobile Phone Accessories</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-neighborhood"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Real Estate</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Apartments &amp; Flats</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Plots &amp; Land</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Rooms</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Accessories</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Houses</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-coat-1"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Fshion &amp; Beauty</h3>
            <ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Clothing</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Watches</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Health &amp; Beauty Products</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Jewellery</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Bags</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-medicine-book"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Books &amp; Magazines</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Equipment</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Instruments</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Children's</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Games &amp; Consoles</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Travel, Events</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-suitcase"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Job Openings</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Delivery/ Collections</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">BPO/ Telecaller</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Data Entry / Back Office</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Marketing</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Sales</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-music"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Music &amp; Arts</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Drums</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Keyboard</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Flute</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Guitar</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Bass Guitar</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="icon-md">
							<i class="icon-listy icon-house"></i>
						</div>
						<h3 class="h5 font-weight-normal mb-3">Home Appliances</h3>
						<ul class="list-unstyled list-gray mb-0">
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Furniture</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Electricity, AC,</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Bathroom &amp; Garden</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Home Appliances</a></li>
							<li class="pb-1"><a href="listings-half-screen-map-list.html">Other Home Items</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ====================================
———	LISTING
===================================== -->
<section class="pt-7 pt-md-10">
	<div class="container">
		<div class="section-title">
      <h2>Popular Things Near You</h2>
      <p>This are some of most popular listing</p>
    </div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-4.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-reservation.html">
									Think Coffee <i class="fa fa-check-circle" aria-hidden="true"></i>
								</a>
							</h3>
							<p class="text-white">215 Terry Lane, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>8 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-5.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-reservation.html">
									Burger House<i class="fa fa-check-circle" aria-hidden="true"></i>
								</a>
							</h3>
							<p class="text-white">2726 Shinn Street, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>9.2 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-10.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-reservation.html">
									Tom's Restaurant<i class="fa fa-check-circle" aria-hidden="true"></i>
								</a>
							</h3>
							<p class="text-white">964 School Street, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>9.5 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-1.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-event.html">
                  The City Theater
								</a>
							</h3>
							<p class="text-white">155 1st Avenue, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>9.5 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Movie Theaters</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-7.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-event.html">
									Sticky Band<i class="fa fa-check-circle" aria-hidden="true"></i>
								</a>
							</h3>
							<p class="text-white">Bishop Avenue, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>5.9 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Nightclubs</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-8.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-rental.html">
									Hotel Govendor
								</a>
							</h3>
							<p class="text-white">78 Country Street, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>5 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Hotels</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-9.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-rental.html">
									The Mayfair Hotel<i class="fa fa-check-circle" aria-hidden="true"></i>
								</a>
							</h3>
							<p class="text-white">242 W 49th St, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>3 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Hotels</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-10.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-reservation.html">
									Water Grill
								</a>
							</h3>
							<p class="text-white">31 Union Square, New York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>10 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="card rounded-0 card-hover-overlay">
					<div class="position-relative">
						<img class="card-img rounded-0" src="assets/img/listing/listing-11.jpg" alt="Card image cap">
						<div class="card-img-overlay">
              <ul class="list-inline list-inline-rating">
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </li>
              </ul>
							<h3>
								<a href="listing-store.html">Shoe Parlor</a>
							</h3>
							<p class="text-white">851 7th Ave, new York</p>
						</div>
					</div>

					<div class="card-footer bg-transparent">
						<ul class="list-unstyled d-flex mb-0 py-2">
							<li>
                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                  <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                  <span>15 k</span>
                </button>
							</li>
							<li class="ml-auto">
								<a class="px-2" href="listings-half-screen-map-list.html">Shopping</a>
							</li>
						</ul>
					</div>
				</div>
      </div>

		</div>
		<div class="text-center pt-5">
			<a href="listing-grid-right-sidebar.html" class="btn btn-primary">Explore More</a>
		</div>
	</div>
</section>

<!-- ====================================
———	SERVICES SECTION
===================================== -->
<section class="py-7 py-md-10">
	<div class="container">
		<div class="border rounded pt-7">
			<div class="row">

				<div class="col-sm-4 col-xs-12">
          <div class="card border-0 text-center">
            <div class="icon-lg m-auto rounded-circle">
						  <i class="icon-listy icon-key text-primary"></i>
					  </div>
            <div class="card-body">
              <h2 class="h4 font-weight-normal mb-3">Secure Trading</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <div class="card border-0 text-center">
            <div class="icon-lg m-auto rounded-circle">
              <i class="icon-listy icon-wreath text-primary"></i>
            </div>
            <div class="card-body">
              <h2 class="h4 font-weight-normal mb-3">24/7 Hours Support</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <div class="card border-0 text-center">
            <div class="icon-lg m-auto rounded-circle">
              <i class="icon-listy icon-tag3 text-primary"></i>
            </div>
            <div class="card-body">
              <h2 class="h4 font-weight-normal mb-3">Easy Trading</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
            </div>
          </div>
        </div>

			</div>
		</div>
	</div>
</section>

<!-- ====================================
———	APP DOWNLOAD SECTION
===================================== -->
<div class="dzsparallaxer auto-init use-loading app-store-paralax">
  <div class="divimage dzsparallaxer--target" data-src="assets/img/background/bg-download.jpg"></div>

  <div class="container paralax-container">
    <div class="section-title">
      <h2 class="text-white">Download on app store</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4 col-xs-12">
        <a href="#" class="btn btn-app-store w-100">
          <i class="icon-listy icon-playstore"></i>
          <span>available on <br><strong> Google Play </strong></span>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12">
        <a href="#" class="btn btn-app-store w-100">
          <i class="icon-listy icon-apple"></i>
          <span>available on <br><strong> App Store </strong></span>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12">
        <a href="#" class="btn btn-app-store w-100">
          <i class="icon-listy icon-microsoft"></i>
          <span>available on <br><strong>Microsoft Store</strong></span>
        </a>
      </div>
    </div>
  </div>
</div>


    </div> <!-- element wrapper ends -->

    <!-- footer -->
    <footer class="pt-7 pt-md-10 bg-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-xs-12">
            <a class="d-inline-block mb-6" href="index.html">
              <svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="140" height="44">
                <path class="fill-primay" d="M0 44V0h139.813v44H0zM137.346 2.467H2.467v39.065h134.879V2.467z" />
                <path class="fill-primay"
                  d="M120.927 22.389v11.095h-4.566V22.389a371.288 371.288 0 0 0-2.086-2.888 347.047 347.047 0 0 1-2.2-3.053 386.86 386.86 0 0 0-2.201-3.053c-.7-.959-1.395-1.922-2.086-2.888h5.617l5.255 7.287 5.222-7.287h5.649c.002 0-8.604 11.882-8.604 11.882zM98.034 33.484h-4.565V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-21.908 0H71.56V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-17.425-1.789c-.69.623-1.511 1.116-2.463 1.477-.953.361-1.987.542-3.104.542-1.007 0-1.982-.143-2.923-.427a10.814 10.814 0 0 1-2.661-1.214h.033a9.928 9.928 0 0 1-1.577-1.215 18.73 18.73 0 0 1-.953-.952l3.416-3.151c.153.197.399.432.739.706.339.274.728.537 1.166.788.44.253.902.467 1.38.64.481.175.941.262 1.379.262.372 0 .744-.044 1.117-.131.359-.082.703-.22 1.018-.41.305-.185.564-.437.755-.739.197-.306.296-.689.296-1.149 0-.175-.06-.366-.181-.574-.12-.208-.329-.432-.624-.673-.296-.241-.706-.498-1.232-.771a20.567 20.567 0 0 0-1.971-.87 25.42 25.42 0 0 1-2.562-1.132 8.896 8.896 0 0 1-2.053-1.428 5.903 5.903 0 0 1-1.347-1.871c-.317-.7-.476-1.51-.476-2.429 0-.94.175-1.822.526-2.642a6.21 6.21 0 0 1 1.494-2.133c.646-.602 1.423-1.072 2.332-1.412.908-.339 1.911-.509 3.006-.509.591 0 1.22.077 1.889.23.668.153 1.319.35 1.954.591a12.95 12.95 0 0 1 1.79.837c.558.317 1.023.64 1.396.968l-2.825 3.545a15.71 15.71 0 0 0-1.281-.788 10.316 10.316 0 0 0-1.281-.558 4.311 4.311 0 0 0-1.478-.263c-.919 0-1.637.181-2.151.542-.515.361-.772.881-.772 1.559 0 .307.093.586.279.837.186.252.438.482.756.689.348.225.717.417 1.1.574.416.176.854.34 1.314.492 1.314.504 2.42 1.013 3.318 1.526.898.514 1.62 1.062 2.168 1.642s.936 1.204 1.166 1.871c.23.668.345 1.395.345 2.183 0 .963-.197 1.871-.591 2.724a6.803 6.803 0 0 1-1.626 2.216zM34.839 10.507h4.532v22.977h-4.532V10.507zm-20.036 0h4.566v18.415h9.263v4.563H14.803V10.507z" />
              </svg>
            </a>
            <p class="text-muted pt-1 pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor</p>
            <ul class="list-unstyled text-muted">
              <li class="mb-3">
                <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                <a class="text-muted" href="tel:+088-657-524-332">+88 657 524 332</a>
              </li>
              <li class="mb-3">
                <i class="fa fa-envelope mr-3" aria-hidden="true"></i>
                <a class="text-muted" href="mailto:info@listy.com">info@listy.com</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="mb-4 mt-4 mt-md-0">
              <h2 class="h4">Links</h2>
            </div>
            <ul class="list-unstyled list-gray">
              <li class="mb-3">
                <a href="index.html">Home</a>
              </li>
              <li class="mb-3">
                <a href="sign-up.html">Create Account</a>
              </li>
              <li class="mb-3">
                <a href="login.html">Login</a>
              </li>
              <li class="mb-3">
                <a href="add-listings.html">Add Listing</a>
              </li>
              <li class="mb-3">
                <a href="edit-listings.html">Edit Listing</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-2 col-xs-12">
            <div class="mb-4 mt-4 mt-md-0">
              <h2 class="h4">Company</h2>
            </div>
            <ul class="list-unstyled list-gray">
              <li class="mb-3">
                <a href="contact-us.html">Contact Us</a>
              </li>
              <li class="mb-3">
                <a href="terms-of-services.html">Terms and Conditions</a>
              </li>
              <li class="mb-3">
                <a href="how-it-works.html">How It Works</a>
              </li>
              <li class="mb-3">
                <a href="payment-process.html">Payment</a>
              </li>
              <li class="mb-3">
                <a href="pricing-table.html">Pricing</a>
              </li>
            </ul>
          </div>
        </div>

        <hr>

        <div class="row pb-md-6">

          <div class="col-sm-7 col-xs-12 align-self-center order-3 order-md-0">
            <p class="copy-right mb-0 pb-4 pb-md-0">
              Copyright &copy; 2019. All Rights Reserved by
              <a href="http://www.iamabdus.com/" target="_blank"> Abdus</a>
            </p>
          </div>

          <div class="col-sm-5 col-xs-12 d-flex align-items-center">
            <div class="ml-md-auto mx-auto mx-md-0 mt-3 mb-5 my-md-0">
              <a class="icon-sm icon-default icon-border hover-bg-primary rounded-circle ml-2" href="#facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a class="icon-sm icon-default icon-border hover-bg-primary rounded-circle ml-2" href="#twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a class="icon-sm icon-default icon-border hover-bg-primary rounded-circle ml-2" href="#pinterest">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a>
              <a class="icon-sm icon-default icon-border hover-bg-primary rounded-circle ml-2" href="#linkedin">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </footer>

    <!-- JAVASCRIPTS -->

    <script src="{{ asset('frontend_assets/assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/menuzord/js/menuzord.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/selectric/jquery.selectric.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/dzsparallaxer/dzsparallaxer.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/dzsparallaxer/dzsparallaxer.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/smoothscroll/SmoothScroll.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/map/js/markerclusterer.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/map/js/rich-marker.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/plugins/map/js/infobox_packed.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/js/map.js')}}"></script>
    <script src="{{ asset('frontend_assets/assets/js/listty.js')}}"></script>

  </body>
</html>

