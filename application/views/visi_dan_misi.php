
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                    <?php foreach($visi_dan_misi as $show){?>
                        <h2><?php echo $show['judul'];?></h2>
                        <?php echo $show['isi'];?>
                     <?php }?>
                  </div>
               </div>
            </div>
            