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
<div id="featrow">
    <div id="services" class="row">
        <?php $featured=get_field('section-2', 'options');
            echo '<div>
                <h3>'.$featured['header'].'</h3>
            </div> '?>
    </div>
    <div class="row">
        <!-- Loop this part when data is present -->
        <?php
                    $args = array('post_type'=> 'student', 'posts_per_page'=> 20, 'category_name' => 'Batch 002');
                    $loop = new WP_Query($args);
                    //Loop Initialization
                    if($loop->have_posts()):
                    while( $loop -> have_posts()): $loop->the_post();
                    $title= get_field('job_title');
                    $socials= get_field('social_links');

                    echo '<div class="col-md-6">
    <div class="card">
        <div class="row ">
            <div class="col-md-4">
                <img src="'.get_the_post_thumbnail_url().'" class="w-100">
                <div class="card-icons">
                    <a href="'.$socials['facebook'].'"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="'.$socials['linked_in'].'"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="'.$socials['github'].'"><i class="fab fa-github fa-lg"></i></a>
                    <a href="'.$socials['site'].'"><i class="fas fa-globe fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-8 px-3">
                <div class="card-block px-3">
                    <h4 class="card-title">'.get_the_title().'</h4>
                    <p class="card-text">'.$title.'</p>
                    <p class="card-text">'.get_the_content().'</p>

                </div>
            </div>

        </div>
    </div>
</div>';
                    endwhile;
                    endif; ?>
    </div>
</div>
<div class="gradientbgreverse"></div>
<div id="projectnav"></div>
<div class="content">
    <div class="container">
        <div id="projects">
            <?php $projecthead=get_field('section-3','options'); 
                echo '<h2>'.$projecthead['header'].'</h2>
                <p>'.$projecthead['subheader'].'</p>'
                ?>
            <div class="studProj">
                <?php 
                    $args = array('post_type'=> 'projects', 'posts_per_page'=> 15);
                    $loop = new WP_Query($args);
                    //Loop Start
                    if($loop->have_posts()):
                        while( $loop -> have_posts()): $loop->the_post();
                        $data = get_post_meta($loop->post->ID, 'projects', true);
                        echo '<div><img src="'.get_the_post_thumbnail_url().'"><p>'.get_the_content().'</p></div>';
                        endwhile;
                    endif;
                    ?>
            </div>
        </div>
    </div>
</div>
<div class="gradientbg"></div>
<div id="aboutnav"></div>
<div id="aboutus">
    <div class="container">
        <div id="theTeam">
            <?php $section4= get_field('section-4', 'options'); 
                echo '<h2>'.$section4['header'].'</h2>'
                ?>
            <div class="row">
                <?php
                    $args = array('post_type'=> 'student', 'posts_per_page'=> 20, 'category_name' => 'Batch 002');
                    $loop = new WP_Query($args);
                    //Loop Initialization
                    if($loop->have_posts()):
                    while( $loop -> have_posts()): $loop->the_post();
                    $title= get_field('job_title');
                    $socials= get_field('social_links');

                    echo '<div class="col-md-6">
                            <div class="card">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <img src="'.get_the_post_thumbnail_url().'" class="w-100">
                                        <div class="card-icons">
                                            <a href="'.$socials['facebook'].'"><i class="fab fa-facebook fa-lg"></i></a>
                                            <a href="'.$socials['linked_in'].'"><i class="fab fa-linkedin-in fa-lg"></i></a>
                                            <a href="'.$socials['github'].'"><i class="fab fa-github fa-lg"></i></a>
                                            <a href="'.$socials['site'].'"><i class="fas fa-globe fa-lg"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 px-3">
                                        <div class="card-block px-3">
                                            <h4 class="card-title">'.get_the_title().'</h4>
                                            <p class="card-text">'.$title.'</p>
                                            <p class="card-text">'.get_the_content().'</p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>';
                    endwhile;
                    endif; ?>
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
        <div class="row ">
            <div class="col-md-4">
                <img src="'.get_the_post_thumbnail_url().'" class="w-100">
                <div class="card-icons">
                    <a href="'.$socials['facebook'].'"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="'.$socials['linked_in'].'"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="'.$socials['github'].'"><i class="fab fa-github fa-lg"></i></a>
                    <a href="'.$socials['site'].'"><i class="fas fa-globe fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-8 px-3">
                <div class="card-block px-3">
                    <h4 class="card-title">'.get_the_title().'</h4>
                    <p class="card-text">'.$title.'</p>
                    <p class="card-text">'.get_the_content().'</p>

                </div>
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
    <div class="gradientbg"></div>
    <div id="contactnav"></div>
    
</div>
<?php get_footer(); ?>