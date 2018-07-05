<?php $featured=get_field('section-2','options') ?>
<div class="container-fluid">
	<div id="services" class="row">
		<?php echo '<div><h3 class="text-center mb-3">'.$featured['header'].'</h3></div>' ?>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner row w-100 mx-auto">
			<?php
			//Loop Parameters 
			$args = array('post_type' => 'student', 'posts_per_page' => 10, 'category_name' => 'Batch 002');
			$loop = new WP_Query($args);
			//Loop start
			if($loop->have_posts()):
				while($loop -> have_posts(): $loop->the_post());
				$title = get_field('job_title');
				$socials = get_field('social_links');
				$count = 0;
				if($count==0){
				echo '
				<div class="carousel-item col-md-4 active">
					<div class="card">
						<img class="card-img-top img-fluid" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">
						<div class="card-body">
							<h4 class="card-title">'.get_the_title().'</h4>
							<p class="card-text">'.get_the_content().'</p>
							<div class="card-icons">
								<a href="'.$socials['facebook'].'"><i class="fab fa-lg fa-facebook"></i></a>
								<a href="'.$socials['linked_in'].'"><i class="fab fa-lg fa-linkedin-in"></i></a>
								<a href="'.$socials['github'].'"><i class="fab fa-lg fa-github"></i></a>
								<a href="'.$socials['site'].'"><i class="fab fa-lg fa-globe"></i></a>
							</div>
						</div>
					</div>
				</div>
				';}
				else{
					echo '
				<div class="carousel-item col-md-4">
					<div class="card">
						<img class="card-img-top img-fluid" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">
						<div class="card-body">
							<h4 class="card-title">'.get_the_title().'</h4>
							<p class="card-text">'.get_the_content().'</p>
							<div class="card-icons">
								<a href="'.$socials['facebook'].'"><i class="fab fa-lg fa-facebook"></i></a>
								<a href="'.$socials['linked_in'].'"><i class="fab fa-lg fa-linkedin-in"></i></a>
								<a href="'.$socials['github'].'"><i class="fab fa-lg fa-github"></i></a>
								<a href="'.$socials['site'].'"><i class="fab fa-lg fa-globe"></i></a>
							</div>
						</div>
					</div>
				</div>
				';}
				$count++;
			endwhile;
		endif;
			 ?>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      	<span class="carousel-control-next-icon" aria-hidden="true"></span>
      	<span class="sr-only">Next</span>
    	</a>
	</div>
</div>

