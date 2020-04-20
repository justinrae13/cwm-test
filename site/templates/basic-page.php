<?php 
include('./_head.php'); // include header markup 

$banner_image_url = isset($page->banner_image) ? $page->banner_image->url : $config->urls->assets . "images/bg-gradient.jpg";
?>

<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $banner_image_url ?>" 
        style="height: 150px; display: flex; align-items: flex-end; color: #fff;">
        
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-shadow: 3px 3px 3px #1d3549">
				<span style="font-size: 60px;">
					<?php
						// output 'headline' if available, otherwise 'title'
						echo $page->get('headline|title');
					?>
				</span>
			</div>
		</div>
	</div>

</div>
	
 	<div class="container buffer">
        <div class="row" style="min-height: 500px;">
        	<?php if ($page->sidebar): ?>
            	<div class="col-md-9">
            <?php else: ?>
            	<div class="col-md-12"></div>
            <?php endif; ?>

					<?php echo $page->body; ?>
					
				</div>

			<?php if ($page->sidebar): ?>
				<div class="col-md-3">
					<?php
		
						// rootParent is the parent page closest to the homepage
						// you can think of this as the "section" that the user is in
						// so we'll assign it to a $section variable for clarity
						$section = $page->rootParent; 
					
						// output sidebar text if the page has it
						echo $page->sidebar; 
		
					?>			
				</div><!-- end sidebar -->
			<?php endif; ?>
		</div>
	</div>

<?php include('./_foot.php'); // include footer markup ?>
