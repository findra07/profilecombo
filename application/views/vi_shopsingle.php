<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('cover/head') ?>

<body>
    <div class="page-wrapper">
        <!--preloader start-->
        <div class="preloader"></div>
        <!--preloader end-->
        <!--main-header start-->



        <?php $this->load->view('cover/top_bar') ?>


        <!--main-header end-->

        <!--inner-heading start-->
        <section class="inner-heading">
            <div class="container">
                <h1>Shop</h1>
                <ul class="xs-breadcumb">
                    <li><a href="index.html"> Home / </a> <a href="index.html">Pages /</a> Single-Shop</li>
                </ul>
            </div>
        </section>
        <!--inner-heading end-->

        <!--inner content start-->

        <section class="inner-wrap">
            <!--container start-->
            <div class="container">
                <!--row start-->
                <div class="row">

                    <!--col start-->
                    <div class="col-md-9 col-sm-12">
                        <div class="single-shop-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <?php if ($single->nama_foto_barang !== null) { ?>
                                        <div class="img-holder"> <img src="https://sicora.comboputra.co.id/assets/foto/barang/<?php echo $single->nama_foto_barang; ?>" alt="Awesome Image" data-imagezoom="true" class="img-responsive"> </div>
                                    <?php } else { ?>
                                        <div class="img-holder"> <img src="https://sicora.comboputra.co.id/assets/images/o-redlogo.png" alt="Awesome Image" data-imagezoom="true" class="img-responsive"> </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-5">
                                    <div class="content-box">
                                        <font face="lato">
                                            <h3><strong><?php echo $single->nama_barang; ?></strong></h3>

                                            <span class="price">Rp <?php echo number_format($single->harga_jual) ?> ,-</span>

                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam, lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
                                            </div>
                                        </font>
                                        <!-- <div class="location-box">
                                            <p>Check Delivery Option at Your Location:</p>
                                            <form action="#">
                                                <input type="text" placeholder="Pincode">
                                                <button type="submit">Check</button>
                                                <br>
                                                <span>Expected Delivery in 4-10 Days</span>
                                            </form>
                                        </div> -->
                                        <!-- <div class="addto-cart-box">
                                            <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                <input class="quantity-spinner form-control" type="text" value="2" name="quantity" style="display: block;">
                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical">
                                                    <button class="btn btn-default bootstrap-touchspin-up" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button>
                                                    <button class="btn btn-default bootstrap-touchspin-down" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button>
                                                </span>
                                            </div>

                                            <button class="theme-btn btn-style-one bg-clr1 addtocart" type="submit">Add to Cart</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="product-tab-box">
                                <ul class="nav nav-tabs tab-menu">
                                    <li class=""><a href="#desc" data-toggle="tab" aria-expanded="true">Descriprion</a></li>
                                    <li class="active"><a href="#review" data-toggle="tab" aria-expanded="false">Reviews (2)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="desc">
                                        <div class="product-details-content">
                                            <div class="desc-content-box">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="review">

                                        <div class="commentArea">


                                            <div class="blog-comments">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="comments-img"> <img src="images/a2.jpg" alt=""> </div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="comment">
                                                            <h5> Dan Mulholland <span>5 hours ago / <a href="#">Reply</a></span>
                                                            </h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-comments blog-comments-ml">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="comments-img"> <img src="images/a2.jpg" alt=""> </div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="comment">
                                                            <h5> Dan Mulholland <span>5 hours ago / <a href="#">Reply</a></span>
                                                            </h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-comments">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="comments-img"> <img src="images/a2.jpg" alt=""> </div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="comment">
                                                            <h5> Dan Mulholland <span>5 hours ago / <a href="#">Reply</a></span>
                                                            </h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <h3>Post A Comment</h3>
                                            <form action="#" method="post" class="formSec">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea rows="8" name="message" id="message" placeholder="Write comment here ..." class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="button">Submit</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">

                        <div class="side-bar">
                            <!-- Categories -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Sub Categories</h5>
                                <?php foreach ($subkategori as $sub) { ?>
                                    <ul class="categories">
                                        <li><a href="<?php echo base_url('Cn_Shop?id_kategori=') . $sub->id_kategori . '&id_subkategori=' . $sub->id_subkategori ?>">
                                                <?php echo $sub->nama_subkategori ?>
                                            </a></li>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="side-bar">
                            <!-- Recent List -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Recent List</h5>
                                <ul class="papimg-post">
                                    <li>
                                        <div class="media-left"> <a href="#"><img src="images/blog.jpg" alt="Blog Title"></a> </div>
                                        <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
                                    </li>
                                    <li>
                                        <div class="media-left"> <a href="#"><img src="images/blog-1.jpg" alt="Blog Title"></a> </div>
                                        <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
                                    </li>
                                    <li>
                                        <div class="media-left"> <a href="#"><img src="images/blog-2.jpg" alt="Blog Title"></a> </div>
                                        <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
                                    </li>
                                    <li>
                                        <div class="media-left"> <a href="#"><img src="images/blog.jpg" alt="Blog Title"></a> </div>
                                        <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar">
                            <!-- Archives Posts -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Archives</h5>
                                <ul class="archive">
                                    <li><a href="#">June 2018<span>10</span></a></li>
                                    <li><a href="#">May 2018<span>21</span></a></li>
                                    <li><a href="#">April2018 <span>58</span></a></li>
                                    <li><a href="#">March 2018 <span>25</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar">
                            <!-- Photos -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Photos Gallery</h5>
                                <ul class="photo-bar">
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog-1.jpg" alt=""></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="side-bar">
                            <!-- Tags -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Tags</h5>
                                <ul class="tags-bar">
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Mobile Phone</a></li>
                                    <li><a href="#">Vahicles</a></li>
                                    <li><a href="#">Pets</a></li>
                                    <li><a href="#">Furnitures</a></li>
                                    <li><a href="#">Head Phones</a></li>
                                    <li><a href="#">Led</a></li>
                                    <li><a href="#">Bikes</a></li>
                                    <li><a href="#">Property for Rent</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <!--col end-->
                    <!--row end-->

                </div>
                <!--container end-->
        </section>

        <!--inner content end-->

        <!--brand-section start-->
        <div class="brand-section">
            <!--container start-->
            <div class="container">
                <div class="brand-content">
                    <ul class="brand-slider">
                        <li><a href="#">
                                <figure><img src="images/company-logo/1.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/2.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/3.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/4.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/5.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/6.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/7.png" alt="" class="img-responsive"></figure>
                            </a></li>
                        <li><a href="#">
                                <figure><img src="images/company-logo/8.png" alt="" class="img-responsive"></figure>
                            </a></li>
                    </ul>
                </div>
            </div>
            <!--container end-->
        </div>
        <!--brand-sectionn end-->

        <!--footer-sec start-->
        <?php $this->load->view('cover/bottom_bar') ?>
        <!--footer-secn end-->

        <!--login-modal start-->
        <div class="modal fade bs-example-modal-md-1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
                    <h2 class="modal-title">LOGIN FORM</h2>
                    <form class="login-form">
                        <fieldset>
                            <div class="form-group"> <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-control" placeholder="Email" required data-error="Valid email is required.">
                            </div>
                            <div class="form-group"> <i class="fa fa-lock"></i>
                                <input type="password" name="name" class="form-control" placeholder="Password" required data-error="Password is required.">
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox">
                                    <em>Remember Me</em> </label>
                                <a class="forgetpassword" href="#"> <em>Forgot Password</em> <i class="fa fa-question-circle"></i> </a>
                            </div>
                            <button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
                        </fieldset>
                    </form>
                    <p>Not a Member?
                        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">Create an Account</button>
                    </p>
                </div>
            </div>
        </div>
        <!--login-modal end-->
        <!--registration-modal start-->
        <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
                    <h2 class="modal-title">REGISTRATION FORM</h2>
                    <form class="login-form">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Username" required data-error="Username is required.">
                            </div>
                            <div class="form-group">
                                <input type="password" name="name" class="form-control" placeholder="Password" required data-error="Password is required.">
                            </div>
                            <div class="form-group">
                                <input type="password" name="name" class="form-control" placeholder="Confirm Password" required data-error="Password is required.">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required data-error="Valid email is required.">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="First Name" required data-error="First Name is required.">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Last Name" required data-error="Last Name is required.">
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" data-error="Last Name is required.">
                                    <em>I agree with the terms and conditions</em></label>
                            </div>
                            <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Create an Account</button>
                        </fieldset>
                    </form>
                    <p>Already a Member?
                        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md-1">Login Here</button>
                    </p>
                </div>
            </div>
        </div>
        <!--registration-modal end-->
        <!--quote-modal start-->
        <div class="modal fade bs-example-modal-md-2" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md-2" role="document">
                <div class="modal-content">
                    <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
                    <h2 class="modal-title">GET A FREE QUOTE</h2>
                    <form class="login-form">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required data-error="Your Name is required.">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Phone Number " required data-error="Phone Number is required.">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required data-error="Valid email is required.">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" required rows="1" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" data-error="Last Name is required.">
                                    <em>I agree with the terms and conditions</em></label>
                            </div>
                            <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!--quote-modal end-->
    </div>
    <!--scroll-to-top start-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>
    <!--scroll-to-top end-->

    <!--jquery start-->
    <?php $this->load->view('cover/js') ?>
    <!--jquery end-->
</body>

</html>