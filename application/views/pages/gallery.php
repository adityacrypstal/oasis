<!DOCTYPE html>
<html>
<head>
  <title>GALLERY</title>
 <meta name="description" content=" Gallery of oasis institute of technology.">
   <meta name="keyword" content="oasis institute of technology nangiarkulangara,gallery ">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" media="screen">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
</head>
<body>
<section id="about-header2">

 </section>
 <section id="about-content resize">
 <div class="container"><h1 class="text-center wow animated zoomIn">Gallery</h1></div><hr>
<div class="container">
  <div class="row">
    <div class='list-group gallery'>
        <?php foreach($gallery as $images) : ?>
            <div class='col-sm-4 col-xs-6 col-md-3  wow animated lightSpeedIn'>
                <a class="thumbnail fancybox"  rel="ligthbox" href="<?=base_url("assets/upload/gallery/".$images['image'])?>">
                    <img class="img-responsive" width="300px" height="120px" alt="" src="<?=base_url("assets/upload/gallery/".$images['image'])?>" />
                    <div class='text-right'>
                        <small class='text-muted'><?=$images['caption']?></small>
                    </div> <!-- text-right / end -->
                </a>
            </div>
            <?php endforeach;?>
            </section>
            <div class="pagination-links col-md-offset-5 row" >
             <?php echo $this->pagination->create_links(); ?>
            
            </div>
            
           
             <!-- col-6 / end -->
             <!-- col-6 / end -->
            <!-- col-6 / end -->
        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
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
<script>
    $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});</script>

</html>