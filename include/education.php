<?php 
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	//gat data berita
  $sql = "SELECT `b`.`cover`,`k`.`kategori_berita`,`b`.`judul`,`p`.`penulis`, `b`.`isi` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita`=`k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis`= `p`.`id_penulis` WHERE `b`.`id_berita`='$id_berita'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $id_berita = $data[0];
    $judul = $data[1];
    $kategori_berita = $data[2];
    $penulis = $data[3];
    $cover = $data[4];
  }
}
?>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        K-Drama
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      
                      <?php
                        $sql_b= "SELECT `b`.`id_berita`, `b`.`Judul`, `k`.`kategori_berita`, `p`.`penulis`, `b`. `cover` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` =  `k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis` = `p`.`id_penulis`
                        WHERE 	`b`.`id_kategori_berita`=2 ORDER BY `b`.`id_berita` DESC";
                        $query_b = mysqli_query($koneksi, $sql_b);
                        while($data_b = mysqli_fetch_row($query_b)){
                          $id_berita = $data_b[0];
                          $judul = $data_b[1];
                          $kategori_berita= $data_b[2];
                          $penulis=$data_b[3];
                          $cover=$data_b[4];

                        ?>
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/<?php echo $cover;?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                          <?php echo $judul;?>
                          </h2>
                          <p class="fs-15">
                            <div class="btn-group">
                              <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>"
                              class="btn btn-primary stretched-link">Detail</a>
                            </div>
                          </p>
                        </div>
                      </div>
                          <?php }?>
  
                      
                    </div>
                    <div class="col-lg-4">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Berita Korea
                      </h2>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5>
                                <a href= "index.php?include=detail-berita&data=88" style="color:#000">Korea Selatan Sukses Luncurkan Satelit Mata-mata untuk Intai Korut</a></h5>                                
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="admin/cover/trending-1.jpeg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                              <h5>
                                <a href= "index.php?include=detail-berita&data=81" style="color:#000">Sinopsis Drama SWEET HOME Season 2, Kembalinya Song Kang Menghadapi Para Monster</a></h5>                                
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="admin/cover/kdrama.jpeg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5>
                                <a href= "index.php?include=detail-berita&data=90" style="color:#000">Lokasi Syuting Hyun Bin & Son Ye Jin Viral Bikin Desa Ini Kebanjiran Turis</a></h5>
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="admin/cover/kdrama-1.jpeg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                          Trending
                        </h2>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/kpop-merch-1.jpeg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600"><a href="index.php?include=detail-berita&data=89" style="color:#000">Pengertian Merchandise Kpop yang Sering Diburu oleh Kpopers</a>
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/hongdae.jpeg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600"><a href="index.php?include=detail-berita&data=92" style="color:#000">
                          Jalan-jalan ke Kota Seoul, Jangan Lupa ke Kawasan Hongdae, Cakep!
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->
