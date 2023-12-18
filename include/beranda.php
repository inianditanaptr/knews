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
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8">
                <div class="position-relative">
                  <img
                    src="assets/images/nct-bg.jpeg"
                    alt="banner"
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2><a style="color:#fff">Latest news</a></h2>

                    <div
                      class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <h5><a href="index.php?include=detail-berita&data=80">Kisah Korean Garlic Cheese Bread yang Viral di Indonesia, Kok Bisa?</a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="admin/cover/korean bread.jpeg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5><a href="index.php?include=detail-berita&data=82">Belajar dari Drama "True Beauty", Ada Dampak Bully Bagi Korban</a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="admin/cover/true beauty.png"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex pt-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <h5><a href="index.php?include=detail-berita&data=84">Siap-siap, 2025 BTS Rilis Album Baru</a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="admin/cover/bts.jpeg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Tag Berita</h2>
                    <ul class="vertical-menu">
                      <li><a href="#">Politik</a></li>
                      <li><a href="#">Viral</a></li>
                      <li><a href="#">Olahraga</a></li>
                      <li><a href="#">Sepak Bola</a></li>
                      <li><a href="#">Badminton</a></li>
                      <li><a href="#">Bisnis</a></li>
                      <li><a href="#">Gaya Hidup</a></li>
                      <li><a href="#">Covid 19</a></li>
                      <li><a href="#">Teknologi</a></li>
                      <li><a href="#">Uang</a></li>
                      <li><a href="#">Korupsi</a></li>
                      <li><a href="#">Kriminal</a></li>
                      <li><a href="#">Properti</a></li>
                      <li><a href="#">Tren</a></li>
                      <li><a href="#">Sains</a></li>
                      <li><a href="#">Selebriti</a></li>
                      <li><a href="#">Film</a></li>
                      <li><a href="#">Edukasi</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/new jeans.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=85" style="color:#000">
                        Daftar Pemenang MAMA Awards 2023 Hari Kedua, NewJeans Si Kecil-Kecil Cabe Rawit Menang 2 Daesang Sekaligus
                        </a></h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/myongdong.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=87" style="color:#000">
                        Myeongdong, Surga Belanja Pencinta KPop dan Drakor Bergeliat</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/red baloon.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=83" style="color:#000">
                        Sinopsis K-Drama Red Ballon yang sedang trending</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/jjampong.webp"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=79" style="color:#000">
                        Jjampong: Mie Seafood Pedas Asal Korea yang Populer Banget</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/korean food-1.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=77" style="color:#000">
                        Makanan Korea yang berasal dari 1.700 tahun lalu</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="card-title">
                          Berita Indonesia Saat Ini
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/fl1NdojgVz4" title="Demi Menemui Pacar, ART di Bekasi Nekat Kurung Anak Majikan di Dalam Rumah!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/GiYpTvg6eXM" title="Cemburu, Pria di Jakarta Barat Bakar Motor Bos Konveksi!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/77lkG-J0NUE" title="Kronologi Pencurian dan Penyekapan di Rumah Dinas Wali Kota Blitar, Santoso" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/N4Z_XBqLbdc" title="Inilah Tingkah Lucu Para Cucu Presiden Joko Widodo!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="card-title">
                            Berita Korea
                          </div>
                          <p class="mb-3">See all</p>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="admin/cover/yt korea-1.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href= "https://youtu.be/Uq1ANdWRIh0?si=hUSJG8rODKH6fIPF" style= "color:#000">North Korea's most powerful woman | DW Documentary</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="admin/cover/yt korea-2.avif"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href= "https://youtu.be/vNWMnGGFOvg?si=QRBVvWBojImCuTt-" style= "color:#000">BTS' Jungkook makes Spotify history as K-pop solo artist</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="admin/cover/yt korea-3.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href="https://youtu.be/aKQUBwO49tc?si=E_ibexJ6U6STp7ek" style="color:#000">BTS’ V, Blackpink’s Jennie allegedly spotted together in Paris amid dating rumors | INQToday</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="admin/cover/yt korea-4.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href="https://youtu.be/z2dW-Wr_TOk?si=Mkm6eAXJK2ztGA2p" style="color:#000">[#2023MAMA] LE SSERAFIM (르세라핌) | All Moments</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center pt-3 pb-2"
                        >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>