<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
  />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet"
  />
  <link href="https://fonts.googleapis.com/css?family=Quando|Quicksand|Roboto|Barlow+Semi+Condensed" rel="stylesheet"
  />
  <link rel="stylesheet" href="css/index.css" />
  <title>Tailoring</title>
</head>
<body>
<header>
  <main>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a href="./index.html"  class="navbar-brand">
          <i class="fas fa-play" style="color:rgb(224, 14, 77);font-size:8px;"></i> <img src="./images/logo.png" height="50px" alt="Tailoring">
        </a>

        <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#tailoring"
                aria-controls="tailoring"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="tailoring">
          <ul class="navbar-nav  ml-auto ">
            <li class="nav-item">
              <a href="./index.html#how" class="nav-link ">How It Works</a>
            </li>
            <li class="nav-item">
              <a href="./about.html" class="nav-link">  About</a>
            </li>
            <li class="nav-item">
              <a href="./service.html" class="nav-link"><i class="fas fa-play" style="color:rgb(224, 14, 77);font-size:8px;"></i>Our Services</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!-- END OF NAVBAR -->
  </main>
</header>

<section class="section">
  <div class="container"><h1 class="blue-text">Let's Make Your Clothes!</h1></div>
  <div class="make-black">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5">
          <form method="post" id="form" class="form-group" action="{{route('services.request')}}" enctype="multipart/form-data">
            <div>
              <label>Tell us about the style you want<span class="pink-text">*</span> </label><br>
              <textarea id="tell" name="style_description"></textarea>
            </div>
            <div>
              <label>Send us a picture for further clarifications</label><br>
              <input type="file" name="style_file">
            </div>
            <div>
              <label>Do you have a fabric? <span class="pink-text">*</span></label><br>
              <b class="mr-2">YES</b><input type="radio" name="fabric_source" id="yes" value="yes" class="mr-5">
              <b class="mr-2">NO</b><input type="radio" name="fabric_source" id="no" value="no">
            </div>

        </div>
        <div class="col-md-6 mt-5">
          <h1 class="black-text">Important Notice</h1>
          <h4 class="black-text mb-5">Upload a full picture not more than a week</h4>
          <h4 class="black-text">
            You have 24 hours to send feedback for any correction and measurement after delivery
          </h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Details & Measurements sections -->
<h1 class="text-center pink-text">Details & Measurements</h1>
<hr class="under-details">
<!-- Details -->
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h2 class="text-center">Let us know you</h2>

      <div>
        <label>Your Name<span class="pink-text">*</span></label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Your Phone Number<span class="pink-text">*</span></label><br>
        <input type="text" name="phone">
      </div>
      <div>
        <label>Email Address<span class="pink-text">*</span></label><br>
        <input type="text" name="email">
      </div>
      <div>
        <label>Pickup Address<span class="pink-text">*</span></label><br>
        <input type="text" name="address">
      </div>

    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<!-- Measurements -->
<section class="section">
  <div class="container"><h2>Measurements</h2>

    <div class="row">

      <div class="col-md-3">

        <div>
          <label>Shoulder/Back</label><br>
          <input type="text" name="measurement_shoulder_back">
        </div>
      </div>
      <div class="col-md-3">
        <div>
          <label>Chest</label><br>
          <input type="text" name="measurement_chest">
        </div>
      </div>
      <div class="col-md-3">

        <div>
          <label>Top Length</label><br>
          <input type="text" name="measurement_top_length">
        </div>
      </div>
      <input type="hidden" name="reference" value={{$reference}}>
      {{csrf_field()}}
      <div class="col-md-3">
        <div>
          <label>Neck</label><br>
          <input type="text" name="measurement_neck">
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3">
        <label>Body/Stomach</label><br>
        <input type="text" name="measurement_body_stomach">
      </div>
      <div class="col-md-3">
        <label>Sleeves</label><br>
        <input type="text" name="measurement_sleeves">
      </div>
      <div class="col-md-3">
        <label> Round Sleeves</label><br>
        <input type="text" name="measurement_round_sleeves">
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <button type="submit" class=" btn btn-md btn-primary btn-disabled" disabled>Next</button>
    </div>
    <div class="d-flex justify-content-center mt-2">
      <a href="#" id="click-to-pay">Click Here</a> To Make Payment
    </div>
    </form>
  </div>
</section>
<!-- Footer section -->
<section class=" last-section"><div class="container ">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 mt-3 ">
        <h4>Company</h4>
        <span class="animate-border border-black"></span>

        <div class="d-flex flex-column mt-3">
          <div><a style="text-decoration:none;" class="text-white footer-link" href="#">About Us</a></div>
          <div><a style="text-decoration:none;" class="text-white footer-link" href="#">Why Choose Us</a></div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 mt-3">
        <h4>Get in touch</h4>
        <span class="animate-border border-black mb-2"></span>
        <h6 class="text-white mt-3"> Get Our Social Media Here</h6>
        <div class="d-flex flex-row">
          <div><a href="#"><i class="fab fa-instagram text-white mr-3 footer-link"></i></a></div>
          <div><a href="#"><i class="fab fa-twitter text-white mr-3 footer-link"></i></a></div>
          <div><a href="#"><i class="fab fa-whatsapp text-white mr-3 footer-link"></i></a></div>
          <div><a href="#"><i class="fab fa-linkedin-in text-white footer-link"></i></a></div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 mt-3">
        <h4>Subscribe</h4>
        <span class="animate-border border-black"></span>
        <form method="POST" class="mt-3">
          <div class="subcribe-form">
            <input type="email" placeholder="Your email address">
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4"></div>
      <div class="col-md-4"><h6 class="text-center text-white">&copy; Tailoring.com.ng 2019</h6></div>
      <div class="col-md-4"></div>
    </div>
  </div>
  </section>
<div id="scroll-top" class="scroll-up">
  <div class="scroll-top-txt">
    <a class="scroll-back" style="text-decoration:none;color:#fff" href="#main">top</a>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/js/mdb.min.js"></script>
<script src="/js/index.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
  $(document).ready(function() {
    $('#click-to-pay').on('click', function(e) {
      e.preventDefault();
      payWithPaystack();
    });
  });
  function payWithPaystack(){
    var phone = $('#phone').val(),
            email;

    if ($('#email').val() == "") {
      email = $('#email').val();
    } else {
      email = "hello@tailoring.com.ng";
    }
    var amount = parseInt("15000 * 100");
    var handler = PaystackPop.setup({
      key: 'pk_test_0f5dd52881c463a7b9dbfc2c750b3f1df049245f',
      email: email,
      amount: amount,
      currency: "NGN",
      ref: '{{$reference}}',
      metadata: {
        custom_fields: [
          {
            display_name: "Mobile Number",
            variable_name: "mobile_number",
            value: phone
          }
        ]
      },
      callback: function(response){
        var form = $('#form');
        form.submit();
      },
      onClose: function(){
        alert("Payment has been cancelled");
      }
    });
    handler.openIframe();
  }
</script>
</body>
</html>
