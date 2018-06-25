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
                    $args = array('post_type'=> 'student', 'posts_per_page'=> 20);
                    $loop = new WP_Query($args);
                    //Loop Initialization
                    if($loop->have_posts()):
                    while( $loop -> have_posts()): $loop->the_post();
                    $title= get_field('job_title');
                    $socials= get_field('social_links');

                    echo '<div id="team" class="col-lg-4">
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <div class="image-border">
                <img class="card-img-top" src="'.get_the_post_thumbnail_url().'" alt="Card image cap">
            </div>
            <h2 class="card-title">'.get_the_title().'</h2> 
            <h5 class="card-text">'.$title.'</h5>
            <p class="card-text">'.get_the_content().'</p> 
            <div class="card-icons">
                <a href="'.$socials['facebook'].'"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="'.$socials['linked_in'].'"><i class="fab fa-linkedin-in fa-lg"></i></a>
                <a href="'.$socials['github'].'"><i class="fab fa-github fa-lg"></i></a>
                <a href="'.$socials['site'].'"><i class="fas fa-globe fa-lg"></i></a>
            </div>
            <p class="card-text">'.get_field('location').'</p>
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
                    $args = array('post_type'=> 'student', 'posts_per_page'=> 20);
                    $loop = new WP_Query($args);
                    //Loop Initialization
                    if($loop->have_posts()):
                    while( $loop -> have_posts()): $loop->the_post();
                    $title= get_field('job_title');
                    $socials= get_field('social_links');

                    echo '<div id="team" class="col-lg">
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <div class="image-border">
                <img class="card-img-top" src="'.get_the_post_thumbnail_url().'" alt="Card image cap">
            </div>
            <h2 class="card-title">'.get_the_title().'</h2> 
            <h5 class="card-text">'.$title.'</h5>
            <p class="card-text">'.get_the_content().'</p> 
            <div class="card-icons">
                <a href="'.$socials['facebook'].'"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="'.$socials['linked_in'].'"><i class="fab fa-linkedin-in fa-lg"></i></a>
                <a href="'.$socials['github'].'"><i class="fab fa-github fa-lg"></i></a>
                <a href="'.$socials['site'].'"><i class="fas fa-globe fa-lg"></i></a>
            </div>
            <p class="card-text">'.get_field('location').'</p>
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
            <div class="container fill">
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

                    echo '<div id="team" class="col-lg">
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <div class="image-border">
                <img class="card-img-top" src="'.get_the_post_thumbnail_url().'" alt="Card image cap">
            </div>
            <h2 class="card-title">'.get_the_title().'</h2> 
            <h5 class="card-text">'.$title.'</h5>
            <p class="card-text">'.get_the_content().'</p> 
            <div class="card-icons">
                <a href="'.$socials['facebook'].'"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="'.$socials['linked_in'].'"><i class="fab fa-linkedin-in fa-lg"></i></a>
                <a href="'.$socials['github'].'"><i class="fab fa-github fa-lg"></i></a>
                <a href="'.$socials['site'].'"><i class="fas fa-globe fa-lg"></i></a>
            </div>
            <p class="card-text">'.get_field('location').'</p>
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
        <div class="container">
            <div id="contact">
                <h2>Lets Work Together!</h2>
                <p>This actually doesnt work like at all</p>
            </div>
            <div class="row">
                <form id="contactform">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" id="inputAddress" placeholder="Email@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Project Details</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>