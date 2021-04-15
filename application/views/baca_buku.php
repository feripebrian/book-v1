   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
            	<?php foreach($baca as $baca_buku){?>
            	<div class="single-post">
                  <div class="blog_details">
                    <h2>Baca Buku</h2> 


                  	<!-- <embed src="<?php echo $baca_buku['file']?>" width="100%" height="1100px" /> -->
					<iframe src="<?php echo $baca_buku['file']?>" style="width: 100%; height: 1100px; border: none;"></iframe>
					<!-- <object data="<?php echo $baca_buku['file']?>" type="application/pdf" width="100%" height="1100px"></object> -->
                  </div>
               </div>
           		<?php }?>


            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Kategori</h4>
                     <ul class="list cat-list">
                     	<?php foreach($kategori as $kategori_buku){?>
                        <li>
                          <?php echo anchor('kategori/show_kategori/'.$kategori_buku['kategori'],'<p>'.$kategori_buku['kategori'].'</p>','class="d-flex"');?>
                           <a href="#" class="d-flex">
                           </a>
                        </li>
                      <?php }?>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">List Buku Baru</h3>
                     <?php foreach($koleksi_buku as $buku_baru){?>
                     <div class="media post_item">
                        <div class="media-body">
                        	<?php echo anchor('cari_buku/baca_buku/'.$buku_baru['id_buku'],'<h3>'.$buku_baru['judul_buku'].'</h3>');?>
                           <p><?php echo $buku_baru['tahun']?></p>
                        </div>
                     </div>
                     <?php }?>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->