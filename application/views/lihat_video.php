<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<?php foreach ($show as $show_video) { ?>
					<div class="single-post">
						<div class="blog_details">
							<h2>
								<?php echo $show_video['judul_video'] ?>
							</h2>
							<?php
							$link = $show_video['link'];
							if (empty($link)) {
								# code...
							} else {
								echo "<video width=\"560\" height=\"315\" controls>
												<source src=\" " . $show_video['link'] . " \" type=\"video/mp4\" />
												Browsermu tidak mendukung tag ini, upgrade donk!
											</video>";
							}
							?>
							<?php
							$embed = $show_video['embed'];
							if (empty($embed)) {
								# code...
							} else {
								echo "<iframe width=\"560\" height=\"315\" src=\" " . $show_video['embed'] . " \" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
							}
							?>

							<?php echo $show_video['keterangan'] ?>
						</div>
					</div>
				<?php } ?>


			</div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Kategori</h4>
						<ul class="list cat-list">
							<?php foreach ($kategori as $kategori_buku) { ?>
								<li>
									<?php echo anchor('kategori/show_kategori/' . $kategori_buku['kategori'], '<p>' . $kategori_buku['kategori'] . '</p>', 'class="d-flex"'); ?>
									<a href="#" class="d-flex">
									</a>
								</li>
							<?php } ?>
						</ul>
					</aside>
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">List Buku Baru</h3>
						<?php foreach ($koleksi_buku as $buku_baru) { ?>
							<div class="media post_item">
								<div class="media-body">
									<?php echo anchor('cari_buku/baca_buku/' . $buku_baru['id_buku'], '<h3>' . $buku_baru['judul_buku'] . '</h3>'); ?>
									<p><?php echo $buku_baru['tahun'] ?></p>
								</div>
							</div>
						<?php } ?>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ Blog Area end =================-->
