<?php get_header(); ?>

<div>
    <div id="segment1">
        <div class="container">
            <div id="hero">
                <?php $hero=get_field('section-1','options');

                        echo '<h2>'.$hero['header'].'</h2>
                        <p>'.$hero['subheader'].'</p>
                        <a href="'. $hero['link'].'" class="btn btn-light">'.$hero['link-title'].'</a>'; ?>
            </div>
        </div>
    </div>
</div>
<div class="gradientbg"></div>
</div>
<div id="servicenav"></div>
<!-- Featured Students -->
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
            $count = 0;
            if($loop->have_posts()):
                while($loop -> have_posts()): $loop->the_post();
                $title = get_field('job_title');
                $socials = get_field('social_links');
                
                if($count==0){
                echo '
                <div class="carousel-item col-md-4 active ">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">
                        <div class="card-body">
                            <h4 class="card-title">'.get_the_title().'</h4>
                            <p class="card-text">'.get_the_content().'</p>
                            <div class="card-icons">
                                <a href="'.$socials['facebook'].'"><i class="fab fa-lg fa-facebook"></i></a>
                                <a href="'.$socials['linked_in'].'"><i class="fab fa-lg fa-linkedin-in"></i></a>
                                <a href="'.$socials['github'].'"><i class="fab fa-lg fa-github"></i></a>
                                <a href="'.$socials['site'].'"><i class="fas fa-lg fa-globe"></i></a>
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
                                <a href="'.$socials['site'].'"><i class="fas fa-lg fa-globe"></i></a>
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


<div id="aboutus">
    <div class="gradientbgreverse"></div>
    <div class="content">
        <div class="container-fluid py-3 fill">
            <div id="about">
                <?php $section5= get_field('section-5', 'options'); 
                echo '<h2>'.$section5['header'].'</h2>'
                ?>
                <div class="row">
                    <?php
                    $args = array('post_type'=> 'teacher', 'posts_per_page'=> 20);
                    $loop = new WP_Query($args);
                    //Loop Initialization
                    if($loop->have_posts()):
                    while( $loop -> have_posts()): $loop->the_post();
                    $title= get_field('job_title');
                    $socials= get_field('social_links');

                    echo '<div class="col-md-6">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">
                        <div class="card-body">
                            <h4 class="card-title">'.get_the_title().'</h4>
                            <p class="card-text">'.get_the_content().'</p>
                            <div class="card-icons">
                                <a href="'.$socials['facebook'].'"><i class="fab fa-lg fa-facebook"></i></a>
                                <a href="'.$socials['linked_in'].'"><i class="fab fa-lg fa-linkedin-in"></i></a>
                                <a href="'.$socials['github'].'"><i class="fab fa-lg fa-github"></i></a>
                                <a href="'.$socials['site'].'"><i class="fas fa-lg fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
                    endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="contactnav"></div>
    
</div>
<?php get_footer(); ?>