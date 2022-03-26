<?php 
$page = 'Home';
include "header.php"; ?>

<!---Section Title + Video-->
    <section id="title" style= "background-image: url(./assets/img/Frame.png); padding-bottom: 40px; margin-top: -15px;">
      <div class="container  mb-5">
        <h2 class="title"> 
          <b>
          <font color="black">Welcome To</font>
          <font color="#273793">ERP Studygroup</font>
          </b> 
        </h2>
        <!--video-->
        <div class="container-md">
          <center>
            <div class="video-esg">
              <video src="./assets/video/lab riset ess.mp4" width="700" controls></video>
            </div>
          </center>

        </div>
      </div>
    </section>

    <!-- Section Tentang Kami & Kegiatan -->

    <section id="about-us" style= "background: linear-gradient(0deg, #d1c9ff 5%, #FFFFFF 90%); padding-bottom: 50px;">
      <div class="container mt-5 mb-5">
        <center><p class="title-about-us"><b>Tentang Kami</b></p></center>
        <p class="content-about-us">
         ERP Study Group merupakan salah satu study group yang berada dibawah naungan program S1 Sistem Informasi yang tergabung dalam Laboratorium Riset Enterprise System & Solution (ESS), Fakultas Rekayasa Industri, Telkom University. ERP Study Group berfungsi untuk mengkoordinir dan mengelola kegiatan maupun pelatihan terkait minat mahasiswa Sistem Informasi yang tergabung dalam Laboratorium ESS khususnya pada bidang Enterprise Resource Planning dengan harapan dapat menjadi wadah untukmahasiswa/i Sistem Informasi dalam mengembangkan potensinya lebih jauh.
        </p>
      </div>
      <!-- KEGIATAN -->
      <center><p class="title-activity"><b>Kegiatan</b></p></center>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="1 slide" ></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="2 slide" ></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="3 slide" ></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="4 slide" style="margin-right: 0.3cm;"></div>           
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="1 slide"></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="2 slide"></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="3 slide"></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="4 slide"></div>           
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="1 slide"></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="2 slide"></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="3 slide"></div>
                <div class="col"><img src="https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg" width="250" alt="4 slide"></div>            
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </section>

    <section class="mt-5">
      <div class="container">
        <p class="title-socmed"><b>Find us on social media!</b></p>
        <div id="social-media">
          <div class="container">
            <center>
              <table class="text-center">
                <tr>
                  <td style="padding : 30px">
                    <a href=""><button class="btn-socmed"><i class="fab fa-youtube stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>ERP Laboratory</b></p>
                  </td>
                  <td style="padding : 30px">
                    <a href=""><button class="btn-socmed"><i class="fab fa-line stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>@dny3610n</b></p>
                  </td>
                  <td style="padding : 30px">
                    <a href=""><button class="btn-socmed"><i class="fab fa-instagram stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>@erpstudygroup</b></p>
                  </td>
                  <td style="padding : 30px">
                    <a href=""><button class="btn-socmed"><i class="fab fa-linkedin stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>ERP Study Group</b></p>
                  </td>
                </tr>
              </table>
            </center>
          </div>
        </div>
      </div>
    </section>
    
<?php include "footer.php"; ?>