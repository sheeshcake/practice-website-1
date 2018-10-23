<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="home_style.css" /> 
    <script src="home_script.js"></script> 
</head>
<body>



    <div class="halfbyte">
        <center>
            <h1>HalfByte Corp</h1>
        </center>
    </div>


    <div id="navbar">
        <a href="#">HalfByte</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a style="float:right" href="login.php">Login</a>
    </div>
    <center>
        <section>
            <div id="about" class="about">
                <h1>About HalfByte</h1>
                <p>
            </div>
            
        </section>
    </center>

    <footer>
        
    </footer>
    
</body>
<script>
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    window.onscroll = function() {myFunction(sticky, navbar)};
</script>
</html>