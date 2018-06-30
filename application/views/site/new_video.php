
<div class="newVideo">
	<legend>VIDEO MỚI NỔI BẬT</legend>
	<?php 
		foreach ($video as $key => $value) {?>
					<div <?php echo ($value->highlight==1) ? "class='item1'" : "class='item'"?>>
						<a href="">
					
							<img src="<?php echo base_url().'image/video/'.$value->anh ?>" alt=""  >
					
							<div class="name">
								<p><?php echo $value->id_tenchuongtrinh;?></p>
								<span><?php echo $value->tap ?></span>
							</div>
						</a>
					</div>
				 	
		<?php } ?>
</div>