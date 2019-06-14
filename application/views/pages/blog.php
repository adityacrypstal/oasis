<!DOCTYPE html>
<html>
<head>
<title>BLOG</title>
 <meta name="description" content=" Daily Updates and Notifications of Oasis Institute of Technology">
   <meta name="keyword" content="oasis institute of technology nangiarkulangara,blog">
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
</head>

<body>  
		<section id="about-header2">

 </section>
 <section id="about-content resize">

    <div class="container"> 
      <h1 class="about-head text-center card wow animated bounce">News And Updates</h1>
   </div>
    <?php foreach($blogs as $blog) :?>
      <?php
      $source = $blog['date'];
    $date = new DateTime($source);
    $string = strip_tags($blog['text']);

    if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 300);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
}

     // 31-07-2012
?>
   <div class="row wow animated flipInX">
        <div class="container">
             <br>
              <div class="col-md-12">
                   <h2 class="blog-head"><?= $blog['header']?></h2>
                    <p><?= $date->format('d-m-Y');?> || <?= $blog['author']?><p>
               </div>
              <div class="col-md-3">
                  <img src="<?=base_url("assets/upload/blog/".$blog['image'])?>" width="280px" height="160px" class="img-responsive" />       
              </div>
              <div class="col-md-8">
                     <p><?= $string?>......</p><td>
                     <form action="<?=base_url('index.php/first/more_blog')?>" method="get"><button type="submit"  name="more" value="<?=$blog['Id']?>">more</button></form>
               </div>
        </div>
   </div>
   <?php endforeach;?>
   <div class="pagination-links col-md-offset-4">
    <?php echo $this->pagination->create_links(); ?>
    </div>
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