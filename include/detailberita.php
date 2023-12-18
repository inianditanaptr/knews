<?php
if(isset($_GET['data'])){
  $id_berita = $_GET['data'];
  $sql ="SELECT `b`.`cover`, `k`.`kategori_berita`,`b`.`judul`,`p`.`penulis`,`b`.`tanggal`, `b`.`isi`  FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita`=`k`.`id_kategori_berita`
  INNER JOIN `penulis` `p` ON `b`.`id_penulis`=  `p`.`id_penulis` 
  WHERE `b`.`id_berita`='$id_berita'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $cover = $data[0];
    $kategori_berita = $data[1];
    $judul = $data[2];
    $penulis = $data[3];
    $tanggal = $data[4];
    $isi = $data[5];
  }
}
 
?>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                      <h1 class="font-weight-600 mb-4"><?php echo $judul;?>
                      </h1>
                      <p><strong><?php echo "Dipublikasikan pada $tanggal";?></strong></p>
                      <tr>
                        <td width="40%" rowspan="6"><img src="admin/cover/<?php echo $cover;?>" 
                        class="img-fluid" alt="Cover Berita" title="Berita"></td>
                      </tr>
                      <tr>
                        <p><strong><?php echo "Penulis : $penulis";?></strong></p>
                      <tr>
                        <td><?php echo $isi;?></td>
                      </tr>
                      <tr>
                        <td>
                        <?php
                          $sql_h = "SELECT `t`.`tag` from `tag_berita` `tb`
                                    inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` 
                                    where `tb`.`id_berita`='$id_berita'";
                          $query_h = mysqli_query($koneksi,$sql_h);
                          while($data_h = mysqli_fetch_row($query_h)){
                          $tag= $data_h[0];
                        ?>
                        <li><?php echo $tag;?></li>
                        <?php }?>
                          </td>
                      </tr>
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
            </div><!-- .table-responsive -->

          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 katalog-sidebar">
      
            
           
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->