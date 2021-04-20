<nav class="navbar navbar-expand-lg navbar-light  fixed-top"style="background-color:white;>
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="MIUMIU.png" alt="" width="200" height="40">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <?php
                if(isset($_SESSION['code_custom'])){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Account</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/php/logout.php">Logout</a>
                </li>
                <?php
                }else{
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>