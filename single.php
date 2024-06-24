<?php
include("header.php");
include("menu.php");
?>
<section class="page-title text-center" style="background-image: url(img/b-bg.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">
                <h1>Single Blog</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Single Blog</li>
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
                    <div class="col-md-12">
                        <div class="item mb-5">
                            <div class="blog-img">
                                <img src="img/b1 (1).jpg" alt="1000X1000" width="100%">
                            </div>

                            <h4 class="my-3">All About Achaar - The Story of the Humble Indian Pickle</h4>
                            <p>Pickles have been an integral part of the Indian food culture for centuries and are known by different names across India; Loncha in Marathi, Achaar in Hindi, Athanu in Gujarati, Urukai in Tamil, etc. The earliest known record of pickling dates back to BCE 2030 in the Tigris Valley, which was made by preserving cucumbers in brine.

The word pickle is derived from the Dutch word "pekel" which means brine. Its Indian counterpart "achaar" however, has its roots in the Persian term which means "powdered or salted pickles or fruits, preserved in salt, vinegar, honey or syrup".

There are 3 main types of pickles; preserved in vinegar, preserved in brine or salt, and preserved in oil. Indian pickle brands are mainly of the last variety, with different types of aromatic and flavorful oils being used for preservation. The type of oil used varies from region to region, for example, mustard oil is a popular medium used in Northern India, whereas the Southern region prefers the more subtle flavor of sesame oil. </p>
                            
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