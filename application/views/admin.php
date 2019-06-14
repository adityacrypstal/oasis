<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css')?>">
   <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1')?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <style>
*{	
  margin:0;	
  padding:0;  
}
body{

}
.formfield * {
  vertical-align: middle;
}
h3{
	font-weight:bold;
	font-family: serif;
	text-transform: uppercase;
	padding-bottom: 10px;
}
#section1{
  padding-top: 15px;
  background:#EEEEEE;  
  height: 510px;  
  width: 100%; 
 overflow: hidden;
}
#section2{  
   padding-top: 15px;
  background:#EEEEEE;  
  height: 400px;  
  width: 100%;  
  overflow: hidden; 
}
#section3{  
   padding-top: 20px;  
  background:#EEEEEE;  
  height: 400px;  
  width: 100%;  
  overflow: hidden;
  }
  #section4{  
   padding-top: 20px;  
  background:#EEEEEE;  
  height: 1000px;  
  width: 100%;  
  overflow: hidden;
  }

.col-md-4{
	margin-left: 480px;
}
#submit{
	background: #2566a8;
	color: white;
}
#log-out{
	background:#2566a8;
	color:white;
   font-size:14px;
    width:75px;
   height:40px;
   line-height:12px;
   border-radius: 7px;
}
#down{
	background: #cc3c22;
	color: white;
}
 </style>
</head>
<?php 

$user= $_SESSION['use'];
if(!isset($user)){
	redirect(base_url('index.php/first/login'));
}
	?>


<body>
	<div class="container-fluid">
		<h1 class="text-center">ADMIN PANEL</h1><form action="<?=base_url('index.php/first/log_out')?>" method="get"><div style="margin:30px;"><button type="submit" id="log-out"  name="more">LogOut</button></div></form>
	</div>
	
<section style="height: 1100px;">	 
<div id= "section1" class="container-fluid">
<div class="col-md-4">
<h3>Blog</h3>
<?php echo form_open_multipart(base_url('index.php/first/create')); ?>
     
  <div class="form-group"> 
    <p class="formfield">  
	  <label>Header</label>
	  <input type="text" name="headers" required>
  
  <div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20" required>
  </div>
  <div class="form-group">
	  <label>Text</label>
	  <textarea type="text" rows="8" cols="65" name="texts" required></textarea>
  </div>
  <div class="form-group">
	  <label>Author</label>
	  <input type="text" name="authors" required>
  </div>
  
  <button type="submit" id="submit" class="btn btn-default">Submit</button></div>
</form>
</p>
</div>
</div> 
</div>
</div>

 <br>
 <br>

<div id= "section2" class="container-fluid">
<div class="col-md-4">
<h3>Gallery</h3>
<?php echo form_open_multipart(base_url('index.php/first/gallery'));?>
<div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20" required>
  </div>
  <div class="form-group">
	  <label>Text</label>
	  <textarea type="text" rows="8" cols="65" name="caption" required></textarea>
  </div>
 <button type="submit" id="submit" class="btn btn-default">Submit</button>
</form>
<div>
</div>
</div> 
</div>
<br>
<br>

<div id="section3">
<div class="col-md-4">
<h3>Notification</h3>
<?php echo form_open_multipart(base_url('index.php/first/notification')); ?>
  
  <div class="form-group">
	  <label>Item</label>
	  <input type="text" name="item" maxlength="15" required>
  </div>
  <div class="form-group">
	  <label>Date</label>
	  <input type="date" name="date" required >
  </div>
  <div class="form-group">
	  <label>Link</label>
	  <input type="text" name="link" required >
  </div>
  
  <button type="submit" id="submit" class="btn btn-default" >Submit</button>
  
</form>
</div>
</div>
</div>
<h2 class="text-center">DELETE(just click)</h2>
<div id="section4">
<div class="container-fluid row">	
<h2 class="text-center">Gallery</h2>
	<?php echo form_open_multipart(base_url('index.php/first/delete_image'));?>
	<ul>
		<?php foreach($images as $image) : ?>
		<li style="float:left;"><button type="submit"  class="btn btn-default" value="<?=$image['Id'] ?>" name="delete_id"><img src="<?= base_url('assets/upload/gallery/'.$image['image'])?>" width="200px" height="120px"></button></li>
		<?php endforeach;?>
	</ul>
	</form></div>
	
<br>
<br>
	
	<section>
	<div class="container row">
<h2 class="text-center">BLOG</h2>
	<?php echo form_open_multipart(base_url('index.php/first/delete_blog'));?>
	<ul>
		<?php foreach($blogs as $blog) : ?>
		<li style="float:left;"><button type="submit" id="down"  class="btn btn-default" value="<?=$blog['Id'] ?>" name="delete_id">
		<?= $blog['header']?></button></li>
		<?php endforeach;?>
	</ul>
	</form>
	</div>	
	</section>
<section>
	<div class="container row">
<h2 class="text-center">Notification</h2>
	<?php echo form_open_multipart(base_url('index.php/first/delete_notif'));?>
	<ul>
		<?php foreach($noti as $notif) : ?>
		<li style="float:left;"><button type="submit" class="btn btn-default" value="<?= $notif['Id'] ?>" name="delete_id">
		<?= $notif['item']?></button></li>
		<?php endforeach;?>
	</ul>
	</form>
	<hr style="width: 100%">
	</div>	
	</section>
	</div>
</body>
</html>