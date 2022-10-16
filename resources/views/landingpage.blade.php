<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Mini Project - Bootcamp Udacoding</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/landing/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/landing/public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/landing/public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/landing/public/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/landing/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/landing/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">
    <link href="/landing/public/assets/css/theme.css" rel="stylesheet" />
    <link href="/landing/public/assets/css/user.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="light">
        <div class="container"><a class="navbar-brand" href="/"><img src="/landing/public/assets/img/icons/Logo.png" height="35" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-center">
              <li class="nav-item"><a class="nav-link px-3" href="#product">Product</a></li>
              <li class="nav-item"><a class="nav-link px-3" href="#customers">Customers</a></li>
              <li class="nav-item"><a class="nav-link px-3" href="#pricing">Pricing</a></li>
              <li class="nav-item"><a class="nav-link pl-3 me-3" href="#docs">Docs </a></li>
            </ul>
            {{-- <button class="btn btn-primary">Sign Up</button> --}}
            @if (Route::has('login'))
            <div class="d-lg-flex align-items-center d-none ms-auto">
            @auth
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="btn btn-primary" href="/dashboard">
                Dashboard
                </a>
                @else
                <a class="btn btn-primary" href="/login">
                Login
                </a>
            @endauth
            </div>
            @endif
          </div>
        </div>
      </nav>
      <section class="py-7 py-lg-10" id="home">
        <div class="bg-holder bg-size" style="background-image:url(/landing/public/assets/img/illustration/2.png);background-position:left top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder d-none d-xxl-block hero-bg" style="background-image:url(/landing/public/assets/img/illustration/1.png);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">
            <div class="col-md-9 col-xxl-5 text-md-start text-center py-6 pt-8">
              <h1 class="fs-4 fs-md-5 fs-xxl-4" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">INLOKARI</h1>
              <p class="fs-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">Inlokari is a job dan career development portal. Find your dream jobs here in Inlokari. </p>
              <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start mt-5" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"><a class="btn btn-sm btn-primary me-1" href="#!" role="button">Get started</a><a class="btn btn-sm btn-default" href="#" role="button">Questions? Talk to our team<i class="fas fa-arrow-right ms-2"></i></a></div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="product">

        <div class="container">
          <div class="row mb-4">
            <div class="col-md-6 h-100 text-center text-md-start p-0 p-md-5 pb-3">
              <h2 class="mt-3">Improve the stability of your application</h2>
              <p class="mb-0">Bugsnag monitors application stability, so you can make data-driven decisions on whether you should be building new features, or fixing bugs.</p>
            </div>
            <div class="col-md-6">
              <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="/landing/public/assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                <h3 class="mt-3 lh-base">Be visible to &quot;like</h3>
                <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="/landing/public/assets/img/icons/2.png" alt="Comment" style="width:95px;" />
                <h3 class="mt-3 lh-base">Monitor Online</h3>
                <p class="mb-0">The platform has multiple functionalities and key features. With our intelligent system, you can approve bookings and monitor everything in your business online.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="/landing/public/assets/img/icons/3.png" alt="Tailored" style="width:95px;" />
                <h3 class="mt-3 lh-base">More Income</h3>
                <p class="mb-0">Being on a digital platform is another sales channel added to strengthen your business. With our insights tools, we analyze your gears performance in any season.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="customers">

        <div class="container">
          <h1 class="text-center display-5 fw-semi-bold" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll"> Proof makes increasing conversion simple</h1>
          <p class="text-center fs-0 fs-md-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"> Getting a conversion boost didn't used to be this easy. Luckily, you found Proof. Now <br class="d-none d-lg-block" />you have the tools to let your customer do the selling for you.</p>
          <div class="row mb-4 mt-6">
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/4.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">High Conversions</h4>
              <p class="fs-0">Convert more wesite visitors in signups ans purchases.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/5.png" alt="Comment" style="width:95px;" />
              <h4 class="mt-3 lh-base">Save on Acquisition</h4>
              <p class="fs-0">Your advertising spend will go further than ever before.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/6.png" alt="Tailored" style="width:95px;" />
              <h4 class="mt-3 lh-base">Increase Trust</h4>
              <p class="fs-0">People trust companies they see other people buy.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/7.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Social Influence</h4>
              <p class="fs-0">Seeing other visitor taking action creates fear of missing out.</p>
            </div>
          </div>
          <div class="row mb-6">
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/8.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Activity Notifications</h4>
              <p class="fs-0">Display recent sales and opt-ins on your pages and drive visitors.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/9.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Custom Journeys</h4>
              <p class="fs-0">Take your journey with ease and comfort of different level.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/10.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Custom Timing</h4>
              <p class="fs-0">Control how fast your notification will display on your screen</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/11.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Live Visitor Count</h4>
              <p class="fs-0">Show how many visitors are browing your site in a time</p>
            </div>
          </div>
          <div class="row mb-6">
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/12.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Visitor Identification</h4>
              <p class="fs-0">We will show you detailed profiles of every visitor of the site.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/13.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Custom Rules</h4>
              <p class="fs-0">Granular control over the notification of your activity.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/14.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Mobile Optimized</h4>
              <p class="fs-0">Optimize the traffic to bring the best to your project.</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center"><img src="/landing/public/assets/img/icons/15.png" alt="Dashboard" style="width:95px;" />
              <h4 class="mt-3 lh-base">Language Translation</h4>
              <p class="fs-0">Translate recent activity notification into any language.</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="pricing">

        <div class="container">
          <div class="row flex-center">
            <div class="col-md-6 text-center text-md-start">
              <h4 class="fw-normal fs-3" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">Your safety is always <br />a top priority</h4>
              <p class="fs-0 pe-xl-8" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">We are committed to help drivers and riders get where they want to go with confidence</p>
              <div class="d-flex justify-content-space-between align-item-center my-3 mt-2">
                <div>
                  <h4 class="fw-normal fs-1">Drive</h4>
                  <p class="my-1 fs-0 pe-xl-8">Drive when you want. Find ooprtunities around you.</p>
                </div>
                <div>
                  <h4 class="fw-normal fs-1">Ride</h4>
                  <p class="my-1 fs-0 pe-xl-8">Tap your phone. Get where you're headed</p>
                </div>
              </div>
              <button class="btn btn-sm btn-primary my-4 me-1" href="#!" role="button">Get started</button><a class="btn btn-sm my-2 btn-default" href="#" role="button">Questions? Talk to our team<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-md-6 mb-4"><img class="w-100" src="/landing/public/assets/img/illustration/4.png" alt="..." /></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mb-4"><img class="w-100" src="/landing/public/assets/img/illustration/5.png" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h4 class="fs-3 fw-normal" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">Move the way you want, <br />Roads are open</h4>
              <p class="fs-0 pe-xl-7" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">Opportunity is everything. Get out there and find it with Uber.</p>
              <div class="d-flex justify-content-center align-item-center my-3 mt-2">
                <div>
                  <h4 class="fw-normal fs-1">Route</h4>
                  <p class="my-1 fs-0 pe-xl-8">Route among the safe roads. Find what's waiting for you.</p>
                </div>
                <div>
                  <h4 class="fw-normal fs-1">Share</h4>
                  <p class="my-1 fs-0 pe-xl-8">Your caring gets it's way. Let your people know.</p>
                </div>
              </div>
              <button class="btn btn-sm btn-primary btn-bg-purple my-4 me-1" href="#!" role="button">Get started</button><a class="btn btn-sm my-2 btn-default" href="#" role="button">Questions? Talk to our team<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="p-0" id="docs">
        <div class="bg-holder d-none d-lg-block" style="background-image:url(/landing/public/assets/img/illustration/6.png);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-7 col-xl-5 text-lg-start text-center">
              <h1 class="fs-3 fw-normal mt-6">Your finances on autopilot</h1>
              <p class="fs-0">Gohub monitors application stability, so you can make data-driven decision on whether you should be building new features, or fixing bugs.</p>
            </div>
          </div>
          <div class="row align-items-center mt-7">
            <h4 class="fs-2 fw-normal">Save Time</h4>
            <ul class="list-unstyled py-3">
              <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>intuitive process and single interface
              </li>
              <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Online and paperless
              </li>
              <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Real-time notification
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container" id="auto">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start">
              <h4 class="fs-2 fw-normal">Monitor your expenses</h4>
              <ul class="list-unstyled py-3">
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Specific access/rights by users
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Physical and virtual Mastercards with adjestable payment limits
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Dashboards to follow-up on your expenses
                </li>
              </ul>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 text-start">
              <h4 class="fs-2 fw-normal">Make accounting easier</h4>
              <ul class="list-unstyled py-3">
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Unlimited history
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>REad-only access for your accountant
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Plug-and-play for accounting tools
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-200" id="cta">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h2 class="fw-bold text-black">Ready to get started?</h2>
              <p>Get an guided demo with an OKR expert.</p>
            </div>
            <div class="col-lg-6 h-100">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Email Address" />
                <button class="btn btn-primary rounded-start-0 px-3" type="submit">Get Started</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0 bg-1000">
        <div class="container">
          <div class="row py-7">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="/landing/public/assets/img/icons/Logo2.png" height="51" alt="" /></a>
              <p class="text-light mt-4 mb-0">EU: +49 9999 0000</p>
              <p class="text-light mb-0">US: +00 4444 0000</p>
              <p class="text-light mt-5">info@gohub.ee</p>
              <div class="d-flex"><a href="#!"><img class="me-xl-3 me-1" src="landing/public/assets/img/gallery/linkedin-line1.svg" alt="in" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="landing/public/assets/img/gallery/facebook-line1.svg" alt="fb" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="landing/public/assets/img/gallery/twitter-line1.svg" alt="twitter" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="landing/public/assets/imggallery/instagram-line1.svg" alt="instragram" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a>
              </div>
            </div>
            <div class="col-3 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold text-light font-sans-serif">About Us</h5>
              <ul class="list-unstyled text-light mb-md-4">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Newsroom</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Blog</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub API</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gift cards</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Career</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub driving jobs</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light font-sans-serif">Offerings</h5>
              <ul class="list-unstyled text-light mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Eats</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Business</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Guhub Freight</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Health</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light font-sans-serif"> Support</h5>
              <ul class="list-unstyled text-light mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Terminal Conditions</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Terms of Use</a></li>
              </ul>
            </div>
          </div>
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-1000">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-3">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">&copy; 2022 Your Company Inc</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info text-200" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                </p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/landing/public/vendors/popper/popper.min.js"></script>
    <script src="/landing/public/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/landing/public/vendors/anchorjs/anchor.min.js"></script>
    <script src="/landing/public/vendors/is/is.min.js"></script>
    <script src="/landing/public/vendors/fontawesome/all.min.js"></script>
    <script src="/landing/public/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="/landing/public/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="/landing/public/vendors/gsap/customEase.js"></script>
    <script src="/landing/public/vendors/gsap/scrollToPlugin.js"></script>
    <!--script(src=`${CWD}landing/public/vendors/gsap/drawSVGPlugin.js`)-->
    <script src="/landing/public/assets/js/theme.js"></script>

  </body>

</html>
