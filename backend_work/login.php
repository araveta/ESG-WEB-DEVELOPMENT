<?php 
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
?>
<script>
    $(document).ready(function(){
        $("#login").modal('show');
    });
</script>
<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Login</h4>
                <form action="checkin.php" method="post">
                    <div class="mb-3">
                        <label for="username"><b style="color:#273793;">Username</b></label>
                        <input type="text" name="username" class="username form-control" placeholder=" Username" required/>
                    </div>
                    <div class="mb-3">
                        <label for="password"><b style="color:#273793">Password</b></label>
                        <input type="password" name="password" class="password form-control" placeholder=" Password" required/>
                    </div>
                    <input type="hidden" name="url" value="<?= $url; ?>">
                    <input class="btn login form-control" type="submit" name="submit" value="Login" />
                </form>
            </div>
        </div>
    </div>  
</div>
<?php include "footer.php";?>