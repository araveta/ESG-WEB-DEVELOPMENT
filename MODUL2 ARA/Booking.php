<?php include "Header.php";
if(!isset($_GET['id'])){
    $id=1;
}else{
    $id=$_GET['id'];
};
?>

<section>
<div class="container mt-5" style="padding: 2rem 1rem">
        <center>
            <p class="text text-white bg-dark py-2">Reserve your venue now!</p>
        </center>
    <div class="row my-1 mx-1">
        <div class="container my-3" style="border:1px solid #F3F3F3; border-radius: 5px;">
            <div class="row py-3 px-3">
                <div class="col-lg">
                    <?php 
                        echo "<img src='".$building[$id][4]."' width='500' height='250' id='image'/>";
                    ?>
                </div>
                <div class="col-lg">
                    <form class="form" action="MyBooking.php?name='naruto'"id="form" method="post">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="ara_1202190269" readonly>
                        <label for="date">Event Date</label>
                        <input class="form-control" type="date" name="date" id="date" placeholder="mm/dd/yyyy" required>
                        <label for="time">Start Time</label>
                        <input class="form-control" type="time" name="time" id="time" placeholder="--:-- --" required>
                        <label for="dura">Duration</label>
                        <input class="form-control" type="number" name="duration" id="dura"  min="1" max="24" value="1" required>
                        <label for="type">Building Type</label>
                        <select class="form-control" name="type" id="type" onchange="myFunction()" required>
                            <option value="">Choose..</option>
                            <option value="<?php echo $building[0][0]; ?>"><?php echo $building[0][1]; ?></option>
                            <option value="<?php echo $building[1][0]; ?>"><?php echo $building[1][1]; ?></option>
                            <option value="<?php echo $building[2][0]; ?>"><?php echo $building[2][1]; ?></option>
                        </select>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("type").value;
                                var building = <?php echo json_encode($building); ?>;
                                var y = building[x][4];
                                document.getElementById("image").src = y;
                            }
                        </script>
                        <label for="phone">Phone Number</label>
                        <input class="form-control" type="number" name="phone" id="phone" required>
                        <p>Add Service(s)</p>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="catering" value="0" id="Check1">
                        <label class="form-check-label" for="Check1">
                            Catering / $700
                        </label></div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="decor" value="1" id="Check2">
                        <label class="form-check-label" for="Check2">
                           Decoration / $450
                        </label></div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sound" value="2" id="Check">
                        <label class="form-check-label" for="Check3">
                           Soundsystem / $250
                        </label></div>
                        <input class="form-control btn-primary mt-3" type="submit" value="Book">
                    </form>
            </div>
        </div>
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