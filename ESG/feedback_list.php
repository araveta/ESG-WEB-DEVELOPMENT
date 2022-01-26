<?php 
$page = 'Feedback List';
include "header.php";
$feedback = mysqli_query($conn,"SELECT * FROM feedback");
// tangkap alert
if(isset($_GET['alert'])){
    if($_GET['alert']=='delsuccess'){
        $alert = "<div class='alert alert-success'>Data Berhasil Dihapus!</div>";
    }elseif($_GET['alert']=='delerror'){
        $alert = "<div class='alert alert-danger'>Galat Server/Gangguan Koneksi Database</div>";
    }
}
?>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <?php $alert; ?>
                    <div class="table-responsive my-5">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>FEEDBACK</th>
                                <th>NIM</th>
                                <th>JURUSAN</th>
                                <th>EMAIL</th>
                                <th>TANGGAL</th>
                                <th><b>. . .</b></th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(mysqli_num_rows($feedback)>0){
                                        $i = 1;
                                        while($d=mysqli_fetch_assoc($feedback)){
                                            echo "
                                                <tr>
                                                    <td>$i</td>
                                                    <td>$d[nama]</td>
                                                    <td>$d[feedback]</td>
                                                    <td>$d[nim]</td>
                                                    <td>$d[jurusan]</td>
                                                    <td>$d[email]</td>
                                                    <td>$d[tanggal]</td>
                                                    <td><a href='delete_feedback.php?id=$d[id_feedback]' style='text-decoration:none; color:#000000'><i class='fas fa-trash-alt'></i></a></td>
                                                </tr>
                                            ";
                                            $i++;
                                        }
                                    }else{
                                        echo "<tr><center>Data Belum Tersedia</center></tr>";
                                    }
                                ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>   
        </div>
    </section>
    
    
<?php include "footer.php";?>