<?php
include("header.php");
include("menu.php");
?>
<section class="page-title text-center" style="background-image: url(img/b-bg.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">
                <h1> Blog</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
            </ul>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog py-4">
    <div class="container">
        
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item mb-5">
                            <div class="blog-img">
                                <img src="img/b1 (1).jpg" alt="1000X1000" width="100%">
                            </div>

                            <h4 class="my-3">All About Achaar - The Story of the Humble Indian Pickle</h4>
                            <p>Pickles have been an integral part of the Indian food culture for centuries and are known by different names across India; Loncha in Marathi, Achaar in Hindi, Athanu in Gujarati, Urukai in Tamil, etc. </p>
                            <div class="view-all">
                                <a href="single.php" class="view-btn-all">See More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="item mb-5">
                            <div class="blog-img">
                                <img src="img/blog2 (2).jpg" alt="1000X1000" width="100%">
                            </div>
                            <h4 class="my-3">History of Mango pickle</h4>
                            <p>Pickles have been around for thousands of years, No one can hardly ever imagine an Indian platter without a spoonful of pickles whether it is for veg or non-veg meal. The word pickle is copied from the Dutch word derived from pekel which means saline. </p>
                            <div class="view-all">
                                <a href="mangob.php" class="view-btn-all">See More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="item mb-5">
                            <div class="blog-img">
                                <img src="img/blog3.jpg" alt="1000X1000" width="100%">
                            </div>
                            <h4 class="my-3">Red Chilli Pickle Recipe - Your Head Start to Summer</h4>
                            <p>Red chilli is the most popular spice across India. Indians love spicy food and so their favorite spice is red chilli on any given day. It is widely known for the smoky flavor and the orange-red hue to add to any dish. Some chillies are red mild spicy and some are very spicy. Did you know? India produces at least ten types of chillies.</p>
                            <div class="view-all">
                                <a href="chillyb.php" class="view-btn-all">See More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="sidebar right widget_area" role="complementary">
                    <div class="sidebar_inner">
                        <aside id="categories-2" class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li class="cat-item"><a href=""><i class="fa-solid fa-star"></i> Culture</a>
                                </li>
                                <li class="cat-item"><a href=""><i class="fa-solid fa-star"></i> Food Reviews</a>
                                </li>
                                <li class="cat-item"><a href=""><i class="fa-solid fa-star"></i> Streets &amp; Markets</a>
                                </li>
                                <li class="cat-item"><a aria-current="page" href=""><i class="fa-solid fa-star"></i> Traditional Mexican Food</a>
                                </li>
                                <li class="cat-item"><a href=""><i class="fa-solid fa-star"></i> Travel</a>
                                </li>
                            </ul>
                        </aside>

                        <aside id="widget_recent_news" class="widget widget_recent_news">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div id="widget_recent" class="recent_news">
                                <article class="post_item">
                                    <div class="post_featured">
                                        <img width="270" height="152" src="img/b1.jpg">

                                    </div>
                                    <div class="post_header entry-header">
                                        <h6 class="post_title"><a href="single.php" rel="bookmark">All About Achaar - The Story of the Humble Indian Pickle</a></h6>
                                    </div>
                                </article>
                               
                            </div>
                        </aside>
                        <aside id="tag" class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                <a href="" class="tag-link">Pickles,</a>
                                <a href="" class="tag-link">Mango Pickles,</a>
                                <a href="" class="tag-link">Lemon Pickles,</a>
                                <a href="" class="tag-link">Chilly Pickles,</a>

                                
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include("footer.php"); ?>