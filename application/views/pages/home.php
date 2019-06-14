<!DOCTYPE html>
<div id="particles-js"></div>

<!--Body-->

<section style="margin-top:10px;">

  <div class="container-fluid ">
        <div class="col-md-6 padding wow animated bounce"><img src="<?= base_url("assets/iphone-bg.png")?>"   width="450px" height="auto" class="img-responsive"></div>
        <div class="col-md-6 card about bg-grey">
            <h2 class="text-center wow animated jello">
              <b>About</b></h2><hr>
              <p class="para-about wow animated bounceInUp">
                    <b><a href="http://oasisiot.in/index.php/first/view/about" target="_self" style="text-decoration:none; color:black;">Oasis Institute of Technology</b></a>is an educational institution providing world class Training & Certification in the field of Mechanical, Electrical and Civil, Quality Management Engineering. Oasis offer the unique opportunity to face challenges<a href="http://oasisiot.in/index.php/first/view/blog" target="_self" style="text-decoration:none; color:black;"> through enriched learning, academic excellence professional training and corporate exposure.</a>
                    </p>
                    <p class="para-about wow animated bounceInUp">
                    Oasis Institute of Technology is a prestigious institution in the field of<a href="http://oasisiot.in/index.php/first/view/course" target="_self" style="text-decoration: none; color: black;"> mechanical enginnering in Nangiarkulangara</a>. We count amongst its customers some of the most influential companies in the world. World class trainers deliver unrivalled quality of training and assessment leading to internationally recognized qualifications in demand by industry worldwide.</p>
        </div>
  </div>
</section>
<section style="height:300px" class="parallax">
    
        <h2 class="text-center wow animated flipInX " style="font-family: 'Raleway', sans-serif;color:white;padding-top:120px;">"Keep our Future safe"</h2>
  
</section>

<!- - - - - - - -LATEST START- - - - - ->

<section>
  <div class="container">
    <h2 class="text-center"><b>Latest</b></h2><hr>
  </div>
  <br>
  <br>
  <div class="container-fluid row latest">
    <div class="col-md-3 first text-center card wow animated rollIn">
            <h3>Events</h3><i class="fa fa-arrow-right" aria-hidden="true" style="color:white;"></i>
    </div>
    <?php foreach($notification as $notify): ?>
    <div class="col-md-3 second text-center card wow animated rollIn">
            <h3><?=$notify['item']?></h3><br><p><?=$notify['date']?></p><a href="<?=$notify['link']?>"><button>Know more</button></a></i>
    </div>
  <?php endforeach;?>
    
    
  </div>  
</section>
<script src="<?= base_url("assets/js/particles.js")?>"></script>
<script src="<?= base_url("assets/js/app.js")?>"></script>
<script>
  $(window).scroll(function(){
    var wscroll = $(this).scrollTop();
    if(wscroll >600){
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102311424-2', 'auto');
  ga('send', 'pageview');

</script>

</html>