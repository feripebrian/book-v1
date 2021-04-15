

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1" style="background-image: url(<?php echo $this->session->userdata('banner');?>);">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="slider_text text-center justify-content-center">
                            <p>Perpustakaan E-Book</p>
                            <h3><?php echo $this->session->userdata('selogan');?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

<!--     <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Koleksi Buku Baru
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <?php foreach($koleksi_buku as $buku){?>

                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?php echo $buku['cover']?>" alt="">
                            </div>
                            <div class="service_info">
                                <?php echo anchor('cari_buku/baca_buku/'.$buku['id_buku'],'<h3>'.$buku['judul_buku'].'</h3>');?>
                                <p><?php echo $buku['penerbit']?></p>
                            </div>
                        </div>
                        <?php }?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- contact_action_area  -->
<!--     <div class="contact_action_area" style="background-image: linear-gradient(to bottom right, #0b1388, #ff3414);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <h3>Koleksi Buku</h3>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <?php foreach($jumlah_buku as $jumlah){?>
                            <button class="boxed-btn3"> <?php echo $jumlah['jumlah']?> Buku</button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /contact_action_area  -->
    
    <!-- chose_area  -->
    <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="<?php echo $this->session->userdata('maskot');?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                            <h3>Tentang Aplikasi Perpustakaan E-Book</h3>
                            <?php echo $this->session->userdata('tentang_e_book');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ chose_area  -->


