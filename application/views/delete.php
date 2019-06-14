<!DOCTYPE html>
<html>
<head><section>
<div class="container-fluid row">	
	<?php echo form_open_multipart('http://localhost/Oasis/index.php/first/delete_image');?>
	<ul>
		<?php foreach($images as $image) : ?>
		<li><button type="submit" class="btn btn-default" value="<?=$image['Id'] ?>" name="delete_id"><img src="<?= base_url('assets/upload/gallery/'.$image['image'])?>" width="200px" height="120px"></button></li>
		<?php endforeach;?>
	</ul>
	</form></div>
	</section>

	<hr><hr>
	<section>
	<div class="container row">
	<?php echo form_open_multipart('http://localhost/Oasis/index.php/first/delete_blog');?>
	<ul>
		<?php foreach($blogs as $blog) : ?>
		<li style="float:;"><button type="submit" class="btn btn-default" value="<?=$blog['Id'] ?>" name="delete_id">
		<?= $blog['header']?></button></li>
		<?php endforeach;?>
	</ul>
	</form>
	</div>	
	</section>

</body>
</html>
