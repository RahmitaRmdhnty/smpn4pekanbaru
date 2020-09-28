<!-- Bagian Tengah -->
<div class="tengah" id="main">
	<section class="gallery">
		<div id="onebyone_carousel" class="carousel slide gallery-holder">
			<div class="carousel-inner">
				<div class="item active" style="background: url(<?= base_url('assets') ?>/img/slider1.JPG) no-repeat; background-size: cover; height: 600px; ">
					<div class="slide_content">
						<div class="container gambar-gerak">
							<div class="hold-text pull-right">
							</div>
						</div>
					</div>
				</div>
				<div class="item" style="background: url(<?= base_url('assets') ?>/img/slider2.jpg) no-repeat; background-size: cover; height: 600px; ">
					<div class="slide_content">
						<div class="container gambar-gerak">
							<div class="hold-text pull-right">
							</div>
						</div>
					</div>
				</div><!-- /.item -->
				<div class="item" style="background: url(<?= base_url('assets') ?>/img/slider3.jpg) no-repeat; background-size: cover; height: 600px; ">
					<div class="slide_content">
						<div class="container gambar-gerak">
							<div class="hold-text pull-right">
							</div>
						</div>
					</div>
				</div><!-- /.item -->
			</div>
			<a class="link-prev carousel-control" href="#onebyone_carousel" data-slide="prev"><i class="im-icon-arrow-left-4"></i></a>
			<a class="link-next carousel-control" href="#onebyone_carousel" data-slide="next"><i class="im-icon-arrow-right-5"></i></a>
		</div><!-- /.carousel -->
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6">

				<h2 style="font-family:Open Sans, sans-serif"><b>Lastest News & Events</b></h2>
				<hr />

				<?php foreach ($blogs as $blog) : ?>
					<div class="col-sm-12">
						<blockquote class="blockquote-about">
							<div class="block">
								<span class="nook">&nbsp;</span>
								<strong class="title"><a href="kabar-sekolah-detail.html"><b><?= $blog['post_title'] ?></b></a>
									<small>Terbit pada <?= $blog['post_date'] ?> | <a href="kabar-sekolah-detail.html#komentar">5 Komentar</a></small>
								</strong>
								<q><?= $blog['post_content'] ?> </q> <a href="<?= $blog['guid'] ?>">Baca selengkapnya...</a>
							</div>
						</blockquote>
					</div>
				<?php endforeach; ?>
				<div class="wrap-space"></div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="crewman crewman-center">
					<div class="frame sambutan" id="kepala-sekolah">
						<div class="hold-line">
							<span class="hold-img">
								<img class="img-circle" src="<?= base_url('assets') ?>/img/kepseksmp4.jpeg" alt="" style="max-width: 210px; max-height: 210px;">
							</span>
							<strong class="title">Dr. Rukiah, M.Pd</strong>
							<strong class="office">Kepala Sekolah</strong>
						</div>
						<div class="hold-line">
							<!-- <p>Assalamu'alaikum wr.wb.</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>