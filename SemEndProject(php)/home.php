<!DOCTYPE html>
<html>
    <head>
        <?php include("partials/links.php")?>
    </head>
    <body>
        <section id="header">
            <a href=""><img src="Images/logo.png" class="logo"></a>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="Home.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </section>
        <?php include("partials/bp1.php")?>
        <h2 id="feat">Features</h2>
        <?php include("partials/features.php")?>
        <?php include("partials/pds1.php")?>
        <?php include("partials/footer.php")?>
        <script src="script.js"></script>
    </body>
</html>