
<section class="home">
    <div class="circle"></div>
    <header>
        <a href="#"><img src="img/bag.png" class="logo"></a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="index.php?content=testList">Shopping Cart</a></li>
            
            <?php if(isset($_SESSION['userId'])) : ?>
                <li>
                <a href="#">
                <?php echo $_SESSION['firstName']; ?>
                <?php echo $_SESSION['lastName'];?>
                <!-- <button class="btn dropdown-toggle removeDot" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    <i class="fa fa-user-circle-o fa-5x profilePic" aria-hidden="true"></i>
                </button> -->
                <i class="fa fa-user-circle-o fa-4x profilePic removeDot" aria-hidden="true"></i>
                </a>
                <ul>
                    <li><a href="#">Profile Pic</a></li>
                    <li><a href="index.php?content=logout">Sign out</a></li>
                </ul>
                </li>

            <?php endif ?>

            <?php if(!isset($_SESSION['userId'])) : ?>
                <li><a href="index.php?content=login">Sign In</a></li>
                <li><a href="index.php?content=register">Sign Up</a></li>
            <?php endif ?>

            <!-- // // session_start();
            // if(isset($_SESSION['userId'])) {
                
            //     echo $_SESSION["firstName"];
            //     echo $_SESSION["lastName"];
            // } else {
            //     echo '<li><a href="index.php?content=login">Sign In</a></li>';
            //     echo '<li><a href="index.php?content=register">Sign Up</a></li>';

            // } -->
        

<!--             
            ?> -->

    
            
            
            
            
        </ul>
    </header>
    <div class="content">
        <div class="textBox">
            <h2>It's not just a <span>Bag</span></h2>
            <p>The Cool Green Bag is an oppritunity to give back to your comunuty.
            </p>
            <?php if(isset($_SESSION['userId'])) : ?>
                
                <?php elseif($_SESSION['isActive'] = 0) :?>
                    <a href="index.php?content=cancel">Cancel This Week</a>
                <?php elseif($_SESSION['isActive'] = 1):?>
                    <a href="index.php?content=cancel">Activate This Week</a>


            <?php endif ?>

            <?php if(!isset($_SESSION['userId'])) : ?>
                <a href="index.php?content=login">Get Started</a>
            <?php endif ?>
            
        </div>
        <div class="imgBox">
            <img src="img/foodbag.png" class="starbucks">
        </div>
    </div>
    <ul class="sci">
        <li><a href="#"><img src="img/facebook.png"></a></li>
        <li><a href="#"><img src="img/twitter.png"></a></li>
        <li><a href="#"><img src="img/instagram.png"></a></li>
        
    </ul>
    <div class="container">
        <div class="drop"></div>
    </div>
    </section>