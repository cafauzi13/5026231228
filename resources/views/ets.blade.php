<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- site metas -->
      <title>Romyk</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- sweetalert -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="index.html"><img src="Assets/paradise-drinking-water-logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="https://www.google.com/maps/place/Paradise+Drinking+Water/">Address</a></li>
                     <li class="nav-item"><a class="nav-link" href="https://wa.me/7147293752">Contact Us</a></li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt"><a href="#">Login <span style="color: #222222;"><i class="fa fa-user" aria-hidden="true"></i></span></a></div>
                     <div class="fa fa-search form-control-feedback"></div>
                  </form>
               </div>
            </nav>
         </div>

         <div class="banner_section layout_padding">
            <div class="container">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-6">
                              <h2 class="banner_taital">Paradise Drinking Water</h2>
                              <p class="banner_text">We are a premier bottled drinking water provider with excellent reputation for fresh, great tasting water and exceptional customer service.</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="Assets/bottle.jpg"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Sign Up Now!</h1>
                              <p class="banner_text">New customers receive three free bottles of water — no time commitment.</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="Assets/drinking.jpg"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="about_img"><img src="Assets/glass.jpg"></div>
               </div>
               <div class="col-md-8">
                  <h1 class="about_taital">Our Products</h1><br>
                  <ul class="about_text">
                     <li>Purified bottled water supply</li>
                     <li>Bottled water coolers supply</li>
                     <li>Electron energized water</li>
                     <li>Mineral Water</li>
                     <li>Water coolers rentals</li>
                     <li>Residential and commercial water supply</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <script>
         function formvalidation() {
           var nomorTelepon = document.getElementById("nomorTelepon").value;
           var nama = document.getElementById("nama").value;

           if(nomorTelepon.length == 0) {
             Swal.fire({ title: "Pesan Kesalahan", text: "Nomor Telepon harus diisi !", icon: "error" });
             document.getElementById("nomorTelepon").focus();
             return false;
           }

           if(nomorTelepon.length < 10 || isNaN(nomorTelepon)) {
             Swal.fire({ title: "Pesan Kesalahan", text: "Nomor Telepon setidaknya 10 digit angka!", icon: "error" });
             document.getElementById("nomorTelepon").focus();
             return false;
           }

           if(nama.length == 0) {
             Swal.fire({ title: "Pesan Kesalahan", text: "Nama harus diisi!", icon: "error" });
             document.getElementById("nama").focus();
             return false;
           }

           if(!/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/.test(nama)) {
             Swal.fire({ title: "Pesan Kesalahan", text: "Nama harus berupa huruf!", icon: "error" });
             document.getElementById("nama").focus();
             return false;
           }
         }
      </script>

       <!-- testimonial section start -->
       <div class="testimonial_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="testimonial_taital">Testimonial</h1>
               </div>
            </div>
            <div class="testimonial_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial_box">
                        <div id="main_slider" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <p class="testimonial_text">fresh water everyday!</p>
                                 <h4 class="client_name">Rahmadhona</h4>
                                 <div class="client_img"></i><img src="D:\11\cafauzi13.github.io\Romyk-1.0.0\Assets\drinking.jpg" width="200"></div>
                              </div>
                              <div class="carousel-item">
                                 <p class="testimonial_text">Low Price and Lot of Discounts!</p>
                                 <h4 class="client_name">Kayla</h4>
                                 <div class="client_img"><img src="D:\11\cafauzi13.github.io\Romyk-1.0.0\Assets\drinking.jpg" width="200"></div>
                              </div>

                           </div>
                           <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                           </a>
                           <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- Contact & Form -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="contact_main">
                     <div class="sidebar">
                        <h4 style="color: white;">Sign Up Member</h4>
                        <form id="formpendaftaran" action="#" method="get" onsubmit="return formvalidation();">
                           <div class="form-group">
                              <label for="nama">Nama</label><br>
                              <input type="text" id="nama" class="form-control" placeholder="Nama lengkap" name="nama">
                           </div>
                           <div class="form-group">
                              <label for="nomorTelepon">Nomor Telepon</label><br>
                              <input type="text" id="nomorTelepon" class="form-control" placeholder="10 digit angka" name="nomorTelepon">
                           </div>
                           <input type="submit" class="btn btn-primary" value="Daftar">
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="location_text">
                     <ul>
                        <li><a href="https://www.google.com/maps/place/Paradise+Drinking+Water/"><span class="padding_left_10 active"><i class="fa fa-map-marker"></i></span>2502 South Broadway, Santa Ana CA 92707</a></li>
                        <li><a href="https://wa.me/7147293752"><span class="padding_left_10"><i class="fa fa-phone"></i></span>Call : (714) 729-3752</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
   </body>
</html>
