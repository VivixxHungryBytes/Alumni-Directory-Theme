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
<div id="featrow" class="container-fluid">
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
<div class="gradientbgreverse"></div>
<div class="content">
        <div class="container">
            <div id="projects">
                <h2>Some Of Our Students Projects</h2>
                <p>Excepteur sinto occaecat cupidatat non proident, sunt in culpa qui nam sint essent officia mollit.</p>
                <h1>Project slider goes here</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <div class="gradientbg"></div>
<div id="aboutus">
    <div class="container">
            <div id="whatYoullLearn">
                <h2> What You'll Learn </h2>
                <div class="row">
                    <div id="course" class="col-lg">
                        <div>
                            <img src="">
                            <h3>Skill Title</h3>
                        </div>
                        <p>Skill description</p>
                    </div>
                    <div id="course" class="col-lg">
                        <div>
                            <img src="">
                            <h3>Skill Title</h3>
                        </div>
                        <p>Skill description </p>
                    </div>
                    <div id="course" class="col-lg">
                        <div>
                            <img src="">
                            <h3>Skill Title</h3>
                        </div>
                        <p>Skill description </p>
                    </div>
                </div>
            </div>
        </div>
</div>
    <div class="gradientbgreverse"></div>
    <div class="content">
        <div class="container-fluid py-3 fill">
            <div id="about">
                <?php $section5= get_field('section-5', 'options'); 
                echo '<h2>'.$section5['header'].'</h2>'
                ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <?php
                    $args = array('post_type'=> 'teacher', 'posts_per_page'=> 20);
                    $loop = new WP_Query($args);
                    $colCount = 0;
                    //Loop Initialization
                    if($loop->have_posts()):
                    while( $loop -> have_posts()): $loop->the_post();
                    $title= get_field('job_title');
                    $socials= get_field('social_links');
                    if($colCount==0){
                    echo '
                <div class="col-md-4">
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
                <div class="col-md-1"></div>';}
                else{
                    echo'<div class="col-md-5">
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
                }
                    endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
<div id="contactnav"></div>
<?php get_footer(); ?>