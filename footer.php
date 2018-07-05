<div id="sub-footer">
    <div class="container">
        <div id="sub-content">
            <div class="row">
                <div class="col-md-4">
                    <div id="blogContent1">
                        <h4>Vivixx Code Camp</h4>
                        <p> &copy;
                            <?php echo date("Y"); ?>
                        </p>
                        <p> Created by <a href="lorenzoibay.com">Lorenzo Ibay</a> , and <a href="https://www.linkedin.com/in/beverly-atijera/"> Beverly Atijera</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="blogContent1">
                        <h4>About Us.</h4>
                        <?php $about=get_field('footer','options');
                             echo'<p>'.$about['about'].'</p>'; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="blogContent1">
                        <h4>Know More</h4>
                        <ul id="quickLinks">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a data-toggle="modal" data-target="#exampleModalCenter">Contact</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Contact Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode( '[contact-form-7 id="189" title="Contact form 1"]' ); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

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
        jQuery("#myCarousel").on("slide.bs.carousel", function(e) {
        var target = jQuery(e.relatedTarget);
        var idx = target.index();
        var itemsPerSlide = 3;
        var totalItems = jQuery(".carousel-item").length;

          if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
              // append slides to end
              if (e.direction == "left") {
                jQuery(".carousel-item")
                  .eq(i)
                  .appendTo(".carousel-inner");
              } else {
                jQuery(".carousel-item")
                  .eq(0)
                  .appendTo(jQuery(this).find(".carousel-inner"));
              }
            }
          }
        });

    </script>
    <?php wp_footer(); ?>
    </body>

    </html>