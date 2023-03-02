<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('cover/head'); ?>

<style>
    .atur_keterangan {
        margin: 0 5px 10px;
        font-family: 'lato medium';
    }

    .font_admin {
        font-family: 'lato medium';
    }
</style>

<body>
    <div class="page-wrapper">
        <!--preloader start-->
        <div class="preloader"></div>
        <!--preloader end-->
        <!--main-header start-->


        <?php $this->load->view('cover/top_bar'); ?>

        <!--main-header end-->

        <!--inner-heading start-->
        <section class="inner-heading">
            <div class="container">
                <h1>PROJECT</h1>
                <!-- <ul class="xs-breadcumb">
                    <li><a href="index.html"> Home / </a> <a href="index.html">Pages /</a> Blog</li>
                </ul> -->
            </div>
        </section>
        <!--inner-heading end-->

        <!--inner content start-->

        <section class="inner-wrap bg-gray portfolio-area">
            <!--container start-->
            <div class="container">
                <!--row start-->
                <div class="section-title">
                    <h3>OUR RECENT <span>PORTFOLIOS</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. </p>
                </div>
                <!--row start-->
                <div class="row">
                    <ul class="container-filter categories-filter">
                        <li> <a class="categories hvr-link" data-filter="*">All Projects</a> </li>
                        <li> <a class="categories hvr-link" data-filter=".branding">Branding</a> </li>
                        <li> <a class="categories hvr-link" data-filter=".financing">Financing</a> </li>
                        <li> <a class="categories hvr-link" data-filter=".marketing">Marketing</a> </li>
                        <li> <a class="categories hvr-link" data-filter=".promotion">Promotion</a> </li>
                    </ul>
                </div>
                <ul class="row blog-grid">

                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/rumahcontoh.jpg" alt="img-8" height="300px">
                                <div class="caption">
                                    <h3>Perumahan Arjuna</h3>
                                    <p>Semarang Utara</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/rumahcontoh.jpg" title="Preview" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html" title="Detail"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Perumahan Arjuna</a></h4>
                            </div>
                            <ul class="blogDate font_admin">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->
                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/rumahcontoh1.jpg" alt="img-8" height="300px">
                                <div class="caption">
                                    <h3>Perumahan Sadewa</h3>
                                    <p>Boja</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/rumahcontoh1.jpg" title="Preview" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html" title="Detail"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Perumahan Sadewa</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->

                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/rumahcontoh2.jpg" alt="img-8" height="300px">
                                <div class="caption">
                                    <h3>Perumahan Werkudara</h3>
                                    <p>Banyumanik</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/rumahcontoh2.jpg" title="Preview" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html" title="Detail"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Perumahan Werkudara</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->
                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/08.jpg" alt="img-8">
                                <div class="caption">
                                    <h3>Business Financing</h3>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/08.jpg" title="Brand Promotion" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Duis ultricies aliquet mauris</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->
                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/08.jpg" alt="img-8">
                                <div class="caption">
                                    <h3>Business Financing</h3>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/08.jpg" title="Brand Promotion" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Duis ultricies aliquet mauris</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->

                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/08.jpg" alt="img-8">
                                <div class="caption">
                                    <h3>Business Financing</h3>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/08.jpg" title="Brand Promotion" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Duis ultricies aliquet mauris</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->

                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/08.jpg" alt="img-8">
                                <div class="caption">
                                    <h3>Business Financing</h3>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/08.jpg" title="Brand Promotion" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Duis ultricies aliquet mauris</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->
                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/08.jpg" alt="img-8">
                                <div class="caption">
                                    <h3>Business Financing</h3>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/08.jpg" title="Brand Promotion" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Duis ultricies aliquet mauris</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->

                    <!--col start-->
                    <li class="col-md-4 col-sm-12 ">
                        <div class="blog-inter">
                            <div class="serviceWrap">
                                <img src="<?php echo base_url('assets/') ?>images/gallery/08.jpg" alt="img-8">
                                <div class="caption">
                                    <h3>Business Financing</h3>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <div class="link-wrap">
                                    <a href="<?php echo base_url('assets/') ?>images/gallery/08.jpg" title="Brand Promotion" class="lightbox-image"><i class="fa fa-search"></i></a>
                                    <a href="projects-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="post-tittle">
                                <h4><a href="#">Duis ultricies aliquet mauris</a></h4>
                            </div>
                            <ul class="blogDate">
                                <li> <i class="fa fa-user" aria-hidden="true"></i><span>Admin</span> </li>
                                <li> <i class="fa fa-calendar" aria-hidden="true"></i> <span>23 Dec 2017</span> </li>
                                <li> <i class="fa fa-comments" aria-hidden="true"></i> <span> 5 Comments</span> </li>
                            </ul>
                            <p class="atur_keterangan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam.</p>
                        </div>
                    </li>
                    <!--col end-->


                </ul>
                <!--row end-->
                <div class="pagination-area">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                    </ul>
                </div>
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

        <?php $this->load->view('cover/bottom_bar'); ?>

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

    <?php $this->load->view('cover/js'); ?>

    <!--jquery end-->
</body>

</html>