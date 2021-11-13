<?php include "Header.php";

if(!isset($_GET['date'])){
    echo "Please fulfill your reservation form";
    exit;
}else{
    $id = rand(100000000,999999999);
    $name = $_GET['name'];
    $in = date('m-d-Y H:i:s', strtotime($_GET['date'].$_GET['time']));
    $dura = "+".$_GET['duration']." hours";
    $out = date('m-d-Y H:i:s',strtotime($dura,strtotime($_GET['date'].$_GET['time'])));
    $type = $building[$_GET['type']][1];
    $phone = $_GET['phone'];
    $price = $_GET['duration']*$building[$_GET['type']][2];
    $add1 = 0;
    $add2 = 0;
    $add3 = 0;
   
}
if(isset($_GET['catering'])){
    $catering = $_GET['catering'];
    $add1 = $service[$catering][1];
}
if(isset($_GET['decor'])){
    $decor = $_GET['decor'];
    $add2 = $service[$decor][1];
}
if(isset($_GET['sound'])){
    $sound = $_POST['sound'];
    $add3 = $service[$sound][1];
}
    $total = $price + $add1 + $add2 + $add3;
    

?>

<section>
<div class="container-fluid mt-5 pt-4">
<center>
    <h2>Thank You <?php echo $name;?> for Reserving</h2>
    <h3>Please double check your reservation details</h3>
</center>
<table class="table table-bordered table-stripped mt-3">
        <th>Booking Number</th>
        <th>Name</th>
        <th>Check-In</th>
        <th>Check-Out</th>
        <th>Building Type</th>
        <th>Phone Number</th>
        <th>Service</th>
        <th>Total Price</th>
    </thead>
    <tbody>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $in;?></td>
        <td><?php echo $out;?></td>
        <td><?php echo $type;?></td>
        <td><?php echo $phone;?></td>
        <td><?php 
        if(isset($_POST['catering'])){
            echo "<li>".$service[$catering][2]."</li>";
        }
        if(isset($_POST['decor'])){
            echo "<li>".$service[$decor][2]."</li>";
        }
        if(isset($_POST['sound'])){
            echo "<li>".$service[$sound][2]."</li>";
        }
        ?></td>
        <td><?php echo "$".$total;?></td>
    </tbody>
</table>
</div>
</section>

<footer>
    <section class="bg-light mt-5 fixed-bottom">
        <div class="container">
            <center>
                <p>ara_1202190269</p>
            </center>
        </div>
    </section>
</footer>
</html>