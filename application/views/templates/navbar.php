<body>
  <div class="kerangka-website">
    <header id="header">
      <div class="container">
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-sm-5">
            <div class="row">
              <div class="col-sm-5">
                <img src="<?= base_url('assets') ?>/img/logosmp4.png" width="140" height="140">
              </div>
              <div class="col-sm-7">
                <br>
                <br>
                <h4 style="font-family:Bebas Neue; font-size:48px;"> SMP NEGERI 4 PEKANBARU </h4>
              </div>
            </div>
          </div>
          <div class="col-sm-7">
            <section class="user-navigation">
              <div class="container">

              </div>
            </section>
            <section class="header-section">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <!--  navbar start -->
                    <nav class="navbar navbar-default navbar-business" role="navigation">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle Navigasi</span>
                          Menu Navigasi
                          <span class="wrap-icon pull-left">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </span>
                        </button>
                      </div>
                      <div class="collapse navbar-collapse">
                        <span class="nook">&nbsp;</span>
                        <ul class="nav navbar-nav">
                          <?php
                          $url = explode('/', current_url());
                          $currentUrl = $url[4];
                          ?>
                          <?= ($currentUrl == 'beranda') ? '<li class="active">' : '<li>' ?>
                          <a href="<?= base_url('Welcome/beranda') ?>">Beranda</a>
                          </li>
                          <?= ($currentUrl == 'profil_sekolah') ? '<li class="dropdown active">' : '<li class="dropdown">' ?>
                          <a class="dropdown-toggle" data-toggle="dropdown">Profil Sekolah</a>
                          <ul class="dropdown-menu">
                            <li><a href="<?= base_url('Welcome/profil_sekolah/visi_misi') ?>">Visi &amp; Misi</a></li>
                            <li><a href="sarana-prasarana.html">Sarana &amp; Prasarana</a></li>
                            <li><a href="program-kegiatan.html">Program &amp; Kegiatan </a></li>
                            <li><a href="prestasi.html">Prestasi</a></li>
                          </ul>
                          </li>
                          <?= ($currentUrl == 'profil_guru') ? '<li class="active">' : '<li>' ?>
                          <a href="<?= base_url('Welcome/profil_guru') ?>">Profil Guru</a>
                          </li>
                          <li>
                            <a href="galeri.html">Galeri</a>
                          </li>
                          <li>
                            <a href="http://perpus.smpn4pekanbaru.sch.id/">Perpustakaan</a>
                          </li>
                          <li class="last">&nbsp;</li>
                        </ul>
                        <!--  frame pull-right start -->
                        <div class="frame">
                          <div class="form-search pull-right">
                            <form action="404.html">
                              <fieldset>
                                <div class="field-search">
                                  <input type="text" class="form-control input-sm" placeholder="Cari" />
                                  <button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
                                </div>
                              </fieldset>
                            </form>
                          </div>
                          <div class="profiles-box pull-left active">
                            <ul class="tools tools-middle pull-right">
                              <li><a href="#"><span class="fa-icon-facebook-sign"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </header>
    <?php
    if ($currentUrl != 'beranda') : ?>
      <!-- Bagian Tengah -->
      <div class="tengah" id="main">

        <div class="judul-halaman">
          <div class="container">
            <h1><?= $headerTitle ?></h1>
          </div>
        </div>

        <div class="hold-breadcrumbs">
          <div class="container">
            <ol class="breadcrumb breadcrumb-site">
              <?php foreach ($url as $key => $value) : ?>
                <?php
                if ($key >= 4) {
                  $str = ucwords(str_replace('_', ' ', $value));
                  echo "<li>$str</li>";
                } else {
                  continue;
                } ?>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>

        <div class="container">
        <?php endif; ?>