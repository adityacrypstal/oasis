<!DOCTYPE html>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CONTACT US</title>
 <meta name="description" content="Contact Details of Oasis Institute of Technology">
   <meta name="keyword" content="oasis institute of technology nangiarkulangara ,contact">
    <meta name ="robots" Content="ALL, INDEX, FOLLOW"/>
        <meta name="distribution" Content ="Global"/>
        <meta name="Author" content="Crypstal" />
        <meta name="rating" content="General"/>
        <meta http-equiv="content-language" content="en-us">
        <meta name="language" content="en-us"/>
        <meta http-equiv="CACHE-CONTROL" content="PUBLIC"/>
        <meta name="YahooSeeker" content="INDEX, FOLLOW"/>
        <meta name="MSNBOT" content="INDEX, FOLLOW"/>
        <meta name="GOOGLEBOT" content="index, follow, all"/>
        <meta name="revisit-after" content="3 days" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/lib/stats.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
    
</head>
<body>
<section id="about-header2">

 </section>
<section id="about-content resize">

    <div class="container"> 
      <h1 class="about-head text-center card wow animated bounce">Contact</h1>
   </div>
  

<div class="container">
  <div class="col-md-6 wow animated zoomIn" >
  <h2>Keep In touch</h2>
  <form action="<?=base_url('index.php/first/sendmail/')?>" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" placeholder="Message" name="message">
        
      </textarea> 
    </div>
    
    
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  <div class="col-md-6 wow animated zoomIn">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.8189888315087!2d76.45924862921429!3d9.260464298503681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b061fde8da7b0cd%3A0x3c391387b9819e3!2sSub+Registrar+Office+Cheppad!5e0!3m2!1sen!2sin!4v1476609015972" width="550" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  </div>
</div>
</section>
</body>
<script src="<?=base_url("assets/js/particle.js")?>"></script>
<script src="<?=base_url("assets/js/app.js")?>"></script>
<script>
  $(window).scroll(function(){
    var wscroll = $(this).scrollTop();
    if(wscroll >100){
     $(".navbar").addClass("shrink-nav adipoli");
      $(".logo").addClass("shrink-logo");
      $(".navbar-default").css("background-color","white");
      $(".navbar-default .navbar-nav>li>a").css("color","#573E7D");
    }
    else{
      $(".navbar").removeClass("shrink-nav");
      $(".logo").removeClass("shrink-logo");
      $(".navbar-default").css("background-color","transparent");
      $(".navbar-default .navbar-nav>li>a").css("color","white");
    }
  });
</script>
</html>