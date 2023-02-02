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

    .side-barSearch {
        background: #fff;
        border: 1px solid #e4e4e4;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
    }

    .fontlato {
        font-family: 'lato';
    }

    /* .ratabawah {
        border: solid 1px;
    } */

    .title-holder {
        height: 140px;
        overflow: auto;
    }

    .title-holder:hover {
        /* background-color: whitesmoke; */
        border-bottom: solid 1px;
        border-color: red;
        background-color: white;
    }

    @media (max-width:500px) {
        /* .side-bar {
            margin-top: 100px;
        } */

        .col-md-3 {
            width: 50%;
            float: left;
        }

        .imgflex {
            height: 165px;
        }
    }

    @media (max-width: 992px) {
        .katflex {
            width: 100%;
        }

    }

    @media (min-width: 992px) {
        .single-product-item .title-holder .product-title a h5 {
            font-size: 14px;
        }

        .single-product-item .title-holder .rate {
            font-size: 12px;
        }

        .jenis-barang {
            padding-top: 0px;
            font-size: 12px;
        }

        .side-bar .tags-bar li a {
            font-size: 12px;
            padding: 3px 5px;
        }
    }

    @media (min-width: 1200px) {
        .single-product-item .title-holder .product-title a h5 {
            font-size: 16px;
        }

        .single-product-item .title-holder .rate {
            font-size: 16px;
        }

        .jenis-barang {
            padding-top: 2px;
            font-size: 16px;
        }

        .side-bar .tags-bar li a {
            font-size: 13px;
            padding: 7px 10px;
        }


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
                <h1>Katalog Produk</h1>
                <!-- <ul class="xs-breadcumb">
                    <li><a href="index.html"> Home / </a> <a href="index.html">Pages /</a> Shop</li>
                </ul> -->
            </div>
        </section>
        <!--inner-heading end-->

        <!--inner content start-->

        <section class="inner-wrap">
            <!--container start-->
            <div class="container">
                <!--row start-->
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <font face="lato">
                            <li><a href="<?php echo base_url('Cn_Katalog') ?>">Katalog /</a>

                                <a href="<?php echo base_url('Cn_Katalog?id_kategori=') . $this->input->get('id_kategori') . '&kategori=' . $this->input->get('kategori'); ?>"><?php echo $this->input->get('kategori') . ' /' ?></a>

                                <?php echo $this->input->get('merk') ?>
                            </li>
                        </font>
                        <div class="side-barSearch">
                            <div class="side-barBox">
                                <!-- <h5 class="side-barTitle">Search</h5> -->
                                <div class="search">
                                    <input type="text" class="form-control" placeholder="Cari Barang ..." name="search" id="search">
                                    <div class="col-md-12 text-center" id="loading" style="display: none;">
                                        <h5>Loading ... </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class="btn"><i class="fa fa-search"></i></button> -->
                        <div class="load-product row" id="load-product">
                        </div>
                        <div class="total justify-content-start">
                            <h6 id="totalproduct"> Total: 80</h6>
                        </div>
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group" id="pagination_link"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 katflex">
                        <div class="side-bar">
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Categories</h5>
                                <ul class="categories fontlato">
                                    <!-- <font face="lato"> -->
                                    <?php foreach ($tampilkategori as $kategori) { ?>
                                        <li><a href="<?php echo base_url('Cn_Katalog?id_kategori=') . $kategori->id_kategori . '&kategori=' . urlencode($kategori->nama_kategori) ?>">
                                                <?Php echo $kategori->nama_kategori ?>
                                            </a></li>
                                    <?php } ?>
                                    <!-- </font> -->
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar">
                            <div class="side-barBox">
                                <h5 class="side-barTitle">Merk</h5>
                                <ul class="tags-bar fontlato">
                                    <?php foreach ($tampilmerk as $merk) { ?>
                                        <li><a href="<?php echo base_url('Cn_Katalog?id_kategori=') . $this->input->get('id_kategori') . '&kategori=' . $this->input->get('kategori') . '&id_merk=' . urlencode($merk->id_merk) . '&merk=' . urlencode($merk->nama_merk) ?>">
                                                <b> <?Php echo $merk->nama_merk ?> </b>
                                            </a></li>
                                    <?php } ?>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <script src="<?php echo base_url() ?>assets/js/java/jquery-2.2.4.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            const urlParams = new URLSearchParams(window.location.search);
                            // const idkategori = urlParams.get('id_kategori');
                            // getProduct(idKategori, '-', 1);                            
                            let idKat = urlParams.get('id_kategori');
                            idKategori = idKat == 'null' ? '000000000169' : idKat;

                            let idMerk = urlParams.get('id_merk');

                            // if (idKat == 'null') {
                            //     idKategori = '000000000169';
                            // } else {
                            //     idKategori = urlParams.get('id_kategori');
                            // }
                            // const namaKategori = urlParams.get('kategori');

                            $('#search').on('keyup', function(event) {
                                let product_name = $(this).val();
                                product_name.length >= 3 && getProduct(1, idKategori, idMerk, product_name);
                            });

                            $(document).on("click", ".barang_pagination li a", function(event) {
                                event.preventDefault();
                                event.stopPropagation();
                                let page = $(this).data("ci-pagination-page");
                                let product_name;
                                // product_name = $('#search').val() === "" ? 'keramik' : $('#search').val();
                                product_name = $('#search').val();
                                getProduct(page, idKategori, idMerk, product_name);
                            });

                            const showProduct = response => {
                                let html = "";
                                let foto;
                                let status;
                                response.data.map((value, key) => {
                                    foto = value.nama_foto_barang === null ? 'https://sicora.comboputra.co.id/assets/images/o-redlogo.png' : `https://sicora.comboputra.co.id/assets/foto/barang/thumb/${value.nama_foto_barang}`;
                                    if (value.stok_update > 0) {
                                        status = "Ready"
                                    } else {
                                        status = "PreOrder"
                                    }
                                    html += `<div class="col-md-3 col-sm-12">
                                                <ul class="row">
                                                    <li class="col-md-12">
                                                        <div class="single-product-item">
                                                            <div class="serviceWrap">
                                                                <div class="overlay-shop">                                    
                                                                    <img class="imgflex" src="${foto}" height="230" alt="img">                                                                    
                                                                </div>
                                                                <div class="link-wrap">
                                                                    <a href="${foto}" class="lightbox-image"><i class="fa fa-search"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="title-holder">
                                                                <div class="product-title">                                                                   
                                                                        <a href="<?php echo base_url() ?>Cn_ShopSingle?id_barang=${value.id_barang}">
                                                                            <h5 class="fontlato">${value.nama_barang}</h5>
                                                                        </a>                                                                    
                                                                </div>
                                                                <div class="fontlato ratabawah">                                                                                                                        
                                                                        <a href="<?php echo base_url() ?>Cn_ShopSingle?id_barang=${value.id_barang}">                                                       
                                                                            <h4 class="rate"><b>Rp. ${numeral(value.harga_jual).format()}</b></h4>                                                                    
                                                                            <h5 class="jenis-barang"><b>${status}</b></h5>  
                                                                        </a>                                                                    
                                                                </div>                                                               
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>                                                                  
                                            </div>`;
                                });
                                $('#load-product').html(html);
                            }

                            const getProduct = (page, idKategori, idMerk, product_name) => {
                                const url = `<?php echo base_url('Cn_Katalog/getProduct') ?>/${page}?idKat=${idKategori}&merk=${idMerk}&product_name=${product_name}`;
                                $.ajax({
                                    type: "GET",
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    cache: false,
                                    async: true,
                                    crossOrigin: true,
                                    url: url,
                                    beforeSend: function() {
                                        $('#loading').css('display', 'block');
                                    },
                                    success: function(response) {
                                        $('#loading').css('display', 'none');
                                        $('#pagination_link').html(response.link);
                                        $('#totalproduct').html(`total : ${response.total_rows} `)
                                        showProduct(response);
                                    },
                                    error: function(error) {
                                        alert(error);
                                    }
                                });
                            }
                            getProduct(1, idKategori, idMerk, '');

                        });
                    </script>
                </div>
            </div>
        </section>

        <!--inner content end-->

        <!--brand-section start-->
        <div class="brand-section">
            <!--container start-->

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