<!DOCTYPE html>
<html>
<head> <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet"></head>
<body>  
		<section id="about-header2">

 </section>
 <div class="container">
  <?php foreach($return_blog as $content):?>
 <h1><?= $content ->header;?></h1>
 <p>Created in:-<?= $content ->date;?>  ||  Author:-<?= $content ->author;?></p><br>
 <img src="<?= base_url('assets/upload/blog/'.$content->image)?>" width="400px" height="auto">
 <br><br><br>
 <p style="font-family: 'Questrial', sans-serif;font-size:16px;line-height:33px;"><?= $content ->text;?></p>
<?php endforeach;?>
 </div>  
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