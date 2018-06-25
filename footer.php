<div id="sub-footer">
        <div class="container">
            <div id="sub-content">
                <div class="row">
                    <div class="col-sm">
                        <div id="blogContent1">
                            <h4>Vivixx Code Camp</h4>
                            <p> &copy;<?php echo date("Y"); ?></p>
                            <p> Created by <a href="lorenzoibay.com">Lorenzo Ibay</a> , and <a href="https://www.linkedin.com/in/beverly-atijera/"> Beverly Atijera</a></p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="blogContent1">
                            <h4>About Us.</h4>
                            <?php $about=get_field('footer','options');
                             echo'<p>'.$about['about'].'</p>'; ?>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="blogContent1">
                            <h4>Know More</h4>
                            <ul id="quickLinks">
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="blogContent1">
                            <h4>Connect</h4>
                            <div id="footerSocials">
                                <ul>
                                    <li><a href="#" class="fab fa-facebook"></a>Facebook</li>
                                    <li><a href="#" class="fab fa-github"></a>Github</li>
                                    <li><a href="#" class="fab fa-google"></a>Google &#43;</li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        jQuery(.studProj).slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScoll: 5
        });
       
    </script>
    <?php wp_footer(); ?>
</body>

</html>