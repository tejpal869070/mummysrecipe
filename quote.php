<?php
include("header.php");
include("menu.php");
?>
<section class="page-title text-center" style="background-image: url(img/b-bg.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">
                <h1>Quotes Pickles</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Quotes Pickles</li>
            </ul>
        </div>
    </div>
</section>

<!-- product -->

<section class="product-sec2 py-3 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
           
                    <div class="title-section text-center mb-4">
                        <h6 class="title">Quote</h6>
                        <h2 class="sub-title">Fillup the below form to order your favourite pickle</h2>
                    </div>

              
                <div class="form-inner">
                    
                    <div id="contact-form" class="default-form">
                        <div role="form" class="wpcf7" dir="ltr">

                            <form action="" method="post" class="form init" novalidate="novalidate" data-status="init">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                        <input type="text" name="your-name" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Your Name *">

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="your-email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Your Email *">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="your-phone" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Your Phone">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                       <select name="pickles" id="pickles" class="form-control" aria-required="true" aria-invalid="false">
                                           <option value="">Mango Pickle</option>
                                           <option value="">Lemon Pickle</option>
                                           <option value="">Chilly Pickle</option>
                                       </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="your-message" cols="40" rows="5" class="form-control" aria-invalid="false" placeholder="Your Message ..."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="view-all pt-3 text-center">
                                            <a href="#" class="view-btn-all">Submit</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>



<?php include("footer.php"); ?>