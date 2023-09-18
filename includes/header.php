<div class="header-bar">
    <div class="info-top-grid">
        <div class="info-contact-agile">
            <?php
            session_start();
            $user_id=$_SESSION['user_id'];
            $ret=mysqli_query($con,"select * from tbluser where user_id='$user_id'");
            $row=mysqli_fetch_array($ret);
            $username=$row['username'];
            $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {
                ?>
            <ul>
                <li>
                    <span class="fas fa-phone-volume"></span>
                    <p><?php  echo $row['MobileNumber'];?></p>
                </li>
                <li>
                    <span class="fas fa-envelope"></span>
                    <p><?php  echo $row['Email'];?></p>
                </li>
                <li>
                </li>
            </ul><?php } ?>
        </div>
    </div>
    <div class="">
        <div class="hedder-up ">
            <div class="row">
                <h1 class="col-md-6 nav_heading">Dream Gallery</h1>
                <?php
                if(isset($_SESSION['user_id'])){
                
                    echo '<h1 class="nav_heading col-md-6 text-right">Welcome : <span class="text-secondary">'.$username.'</span> </h1>';
                };
                ?>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Photo Category
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                                    $ret=mysqli_query($con,"select * from tblarttype");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <a class="nav-link"
                            href="product.php?cid=<?php  echo $row['ID'];?>&&artname=<?php  echo $row['ArtType'];?>"><?php  echo $row['ArtType'];?></a>
                        <?php } ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <?php
                if(!isset($_SESSION['user_id'])){
                    echo '<li class="nav-item">
                    <a href="signup.php" class="nav-link">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>';
                }
                else{
                    echo '<li class="nav-item">
                            <a href="logout.php" class="nav-link">Logout</a>
                        </li>';
                }
                ?>

            </ul>
        </div>
    </nav>
</div>
<!-- Slideshow 4 -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form action="#" method="post">
                        <div class="fields-grid">
                            <div class="styled-input">
                                <input type="text" placeholder="Your Name" name="Your Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="email" placeholder="Your Email" name="Your Email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="password" name="password" required="">
                            </div>
                            <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- //Modal 1-->