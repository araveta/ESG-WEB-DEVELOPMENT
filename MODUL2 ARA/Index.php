<?php include "Header.php";?>
<section>
    <div class="container py-5 mt-5">
        <center>
            <h3>WELCOME TO ESD VENUE RESERVATION</h3>
            <p class="text text-white bg-dark py-2">Find your best deal for your event, here!</p>
        </center>
    <div class="row">
<?php 
    for ($row = 0; $row < 3; $row++) {
    echo "
    <div class='col-sm'>
    <div class='card mt-3'>
        <img class='card-img-top' src='".$building[$row][4]."' width='1000' height='200' />
        <div class='card-body'>
            <h5 class='card-title'>".$building[$row][1]."</h5>
            <h6 class='card-subtitle mb-2 text-muted'>$".$building[$row][2]." / Hour </h6>
            <h6 class='card-subtitle mb-2 text-muted'>".$building[$row][3]." Capacity </h6>
            </div>";
    echo "<ul class='list-group text-center'>";
        for ($i=0; $i < 4; $i++) {
            if($features[$row][$i]=="No Free Parking"||$features[$row][$i]=="No Full AC"||$features[$row][$i]=="No Cleaning Service"){
                echo "
                <li class='list-group-item font-weight-bold' style='color:red'>".$features[$row][$i]."</li>
                ";
            }else{
                echo "
                <li class='list-group-item font-weight-bold' style='color:green'>".$features[$row][$i]."</li>
                ";
            }
        }      
    echo "</ul>";
    echo "<div class='card-footer'><center><a class='btn btn-primary' href='Booking.php'>Book Now</a></center></div>";
    echo "</div>";
    echo "</div>";
    break;
    }
?>
    </div>
    </div>

</section>
<footer>
    <section class="bg-light mt-5">
        <div class="container">
            <center>
                <p>ara_1202190269</p>
            </center>
        </div>
    </section>
</footer>
</html>