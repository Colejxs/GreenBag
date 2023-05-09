<section>
    <div class="circle"></div>
    <header>
        <a href="#"><img src="img/bag.png" class="logo"></a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="index.php?content=testList">Shopping Cart</a></li>
            <?php if(!isset(['userId'])) : ?>
                <li><a href="index.php?content=register">Sign Up</a></li>
                <li><a href="index.php?content=login">Sign In</a></li>
            <?php endif ?>

            <?php if(isset(['userId'])) : ?>

            session_start();
            if(isset($_SESSION['userId'])) {
                echo $_SESSION["firstName"];
                echo $_SESSION["lastName"];
            } else {
                echo '<li><a href="index.php?content=login">Sign In</a></li>';
                echo '<li><a href="index.php?content=register">Sign Up</a></li>';

            }
            ?>

    
            
            
            
            
        </ul>
    </header>
    <div class="content">
        <div class="textBox">
            <h2>It's not just a <span>Bag</span></h2>
            <p>The Cool Green Bag is an oppritunity to give back to your comunuty.
            </p>
            <a href="#">Cancel This Week</a>
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