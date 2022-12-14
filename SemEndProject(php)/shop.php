<!DOCTYPE html>
<html>
    <head>
    <?php include("partials/links.php")?>
    </head>
    <body>
        <section id="header">
        <a href=""><img src="Images/logo.jpeg" class="logo"></a>
            <div>
                <ul id="navbar">
                    <li><a href="Home.php">Home</a></li>
                    <li><a class="active" href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </section>
        <section id="bigpicture2">
            <p>30% off for Students<p>
        </section>
        <?php include("partials/pds2.php")?>
        <section id="pages">
            <a class="active" href="shop.php">1</a>
            <a  href="shop2.php">2</a>
        </section>
        <?php include("partials/footer.php")?>
        <script src="script.js"></script>
    </body>
</html>
