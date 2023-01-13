<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('cover/head'); ?>

<style>
    .jenis-barang {
        text-align: right;
        padding-top: 3px;
        padding-right: 2px;
        font-style: italic;
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
                <h1>Shop</h1>
                <ul class="xs-breadcumb">
                    <li><a href="index.html"> Home / </a> <a href="index.html">Pages /</a> Shop</li>
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
                    <div class="col-md-8 col-sm-12">
                        <?php echo $this->pagination->create_links(); ?>
                        <ul class="row">
                            <?php foreach ($tampilproduk as $tampil) { ?>
                                <li class="col-md-4">
                                    <div class="single-product-item">
                                        <div class="serviceWrap">
                                            <div class="overlay-shop">
                                                <?php if ($tampil->nama_foto_barang !== null) { ?>
                                                    <img src="https://sicora.comboputra.co.id/assets/foto/barang/thumb/<?php echo $tampil->nama_foto_barang ?>" height="230" alt="img">
                                                <?php } else { ?>
                                                    <img src="https://sicora.comboputra.co.id/assets/images/o-redlogo.png" height="230" alt="img">
                                                <?php } ?>
                                            </div>
                                            <div class="link-wrap">
                                                <?php if ($tampil->nama_foto_barang !== null) { ?>
                                                    <a href="https://sicora.comboputra.co.id/assets/foto/barang/<?php echo $tampil->nama_foto_barang ?>" class="lightbox-image"><i class="fa fa-search"></i></a>
                                                    <!-- <a href="shop-single.html"><i class="fa fa-shopping-cart"></i> </a> -->
                                                <?php } else { ?>
                                                    <a href="https://sicora.comboputra.co.id/assets/images/o-redlogo.png" class="lightbox-image"><i class="fa fa-search"></i></a>
                                                    <!-- <a href="shop-single.html"><i class="fa fa-shopping-cart"></i> </a> -->
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <font face="lato">
                                                <div class="product-title">
                                                    <a href="<?php echo base_url('Cn_ShopSingle/index?id_kategori=') . $tampil->id_kategori . '&id_barang=' . $tampil->id_barang ?>">
                                                        <h5><?php echo $tampil->nama_barang ?></h5>
                                                    </a>
                                                </div>
                                            </font>
                                            <div>
                                                <font face="lato">
                                                    <h4 class="rate">
                                                        Rp <?php echo number_format($tampil->harga_jual) ?>
                                                    </h4>
                                                    <h5 class="jenis-barang">
                                                        <?php if ($tampil->stok_update > 0) { ?>
                                                            <b> Ready </b>
                                                        <?php } else { ?>
                                                            <b> Preorder </b>
                                                        <?php } ?>
                                                    </h5>
                                                </font>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <!--col end-->

                    <div class="col-md-4 col-sm-12">
                        <div class="side-bar">
                            <!-- Search -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Search</h5>
                                <div class="search">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="side-bar">
                            <!-- Categories -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Categories</h5>
                                <ul class="categories">
                                    <font face="lato">
                                        <?php foreach ($tampilkategori as $kategori) { ?>
                                            <li><a href="<?php echo base_url('Cn_Shop?id_kategori=') . $kategori->id_kategori . '&nama=' . $kategori->nama_kategori ?>">
                                                    <?Php echo $kategori->nama_kategori ?>
                                                </a></li>
                                        <?php } ?>
                                    </font>
                                </ul>

                            </div>
                        </div>
                        <div class="side-bar">
                            <!-- Tags -->
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Merk</h5>
                                <ul class="tags-bar">
                                    <?php foreach ($tampilmerk as $merk) { ?>
                                        <li><a href="<?php echo base_url('Cn_Shop?id_kategori=') . $merk->id_kategori . '&id_merk=' . $merk->id_merk ?>">
                                                <?php echo $merk->nama_merk ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="clearfix"></div>
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
                                        <div class="media-left"> <a href="#"><img src="images/blog.jpg" alt="Blog Title"></a> </div>
                                        <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
                                    </li>
                                    <li>
                                        <div class="media-left"> <a href="#"><img src="images/blog.jpg" alt="Blog Title"></a> </div>
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
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/blog.jpg" alt=""></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>



                </div>
                <!--row end-->
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