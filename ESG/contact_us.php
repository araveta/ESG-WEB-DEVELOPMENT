<?php 
$page = 'Contact Us';
include "header.php";
if(isset($_POST['submit'])){
    if(isset($_POST['nama'])&&($_POST['email'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $feedback = $_POST['pesan'];
        $date = date('Y-m-d', strtotime('+7hours'));
        $submit = mysqli_query($conn, "INSERT INTO feedback (nama,feedback,nim,jurusan,email,tanggal) VALUES ('$nama','$feedback','$nim','$jurusan','$email','$date')");
        if($submit){
            $alert = "<div class='alert alert-success'>Terimakasih, Feedback Anda Berhasil Direkam</div>";
        }else{
            $alert = "<div class='alert alert-danger'>Server Gagal/Gangguan Koneksi Database</div>";
        }
    }else{
        $alert = "<div class='alert alert-danger'>Form Belum Terisi dengan Lengkap</div>";
    }
}
?>
    <section>
        <div class="container px-3 pt-3 my-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form class="p-3" action="" method="post"> 
                        <?php $alert; ?>
                        <div class="mb-3">
                            <h2 class="text-center" style="color: #273793;"><b>Contact Us</b></h2>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label"><b>Nama</b></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" aria-describedby="emailHelp" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nim" class="form-label"><b>NIM</b></label>
                                <input type="text" class="form-control" placeholder="NIM" aria-label="First name" name="nim" required>
                            </div>
                            <div class="col">
                                <label for="Jurusan" class="form-label"><b>Jurusan</b></label>
                                <input type="text" class="form-control" placeholder="Jurusan Kuliah" aria-label="Last name" name="jurusan" required>
                            </div>
                          </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"  required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label"><b>Pesan</b></label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan" placeholder="Pesan yang ingin anda sampaikan" required></textarea>
                        </div>
                        <button type="submit" name="submit" value="KIRIM PESAN" class="btn-contact mb-3" style="width:100%;">Kirim Pesan</button>
                        <a href="feedback_list.php"><p class="text-right mt-3" style="color:#273793;"><b><u>Lihat feedback</u></b></p></a>
                      </form>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>