<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-links pt-4 mt-3">
                    <div class="foot-logo">
                        <a href="index.php"><img src="img/logo.png" alt="" width="150"></a>

                        <p>The company adheres to stringent, hygienic standards and strict quality control procedures are implemented at various stages of processing to ensure that the best quality products leave the factory.</p>
                    </div>
                    <div class="social-buttons">
                        <div class="social-icons">
                            <a href="#" class="social-icon facebook" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-icon twitter" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="social-icon instagram" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="social-icon youtube" title="Youtube" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-5">
                <div class="footer-links pt-4 mt-3">
                    <h3>Products</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28795.278833253018!2d84.13059047606959!3d25.558027675068423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992788215284d4f%3A0x5486b28fa068ade5!2sDumraon%2C%20Bihar!5e0!3m2!1sen!2sin!4v1661765876475!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-links pt-4 mt-3">
                    <h3>Web Links</h3>
                    <ul>
                        <li><a href="index.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                        <li><a href="contact.php"><i class="fa-solid fa-angles-right"></i> Contact Us</a></li>
                        <li><a href="blog.php"><i class="fa-solid fa-angles-right"></i> Blog</a></li>
                        <li><a href="recipe.php"><i class="fa-solid fa-angles-right"></i> Recipe</a></li>
                        <li><a href="product.php"><i class="fa-solid fa-angles-right"></i> Product</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row footer-bottom">
            <div class="foot-content text-center">
                <p>&copy; Mummy's Recipe 2022. All rights reserved.| Desigend & Developed By :<a href="https://coralitsolution.com/"><img src="img/coral-logo.png" width="150"> </a></p>
            </div>
        </div>
    </div>
</footer>

<!-- <script id="bs-live-reload" data-sseport="4859" data-lastchange="1530918619334" src="/js/livereload.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
    $("#product-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.bg-default .dmenu').hover(function() {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function() {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });
</script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
</body>

</html>