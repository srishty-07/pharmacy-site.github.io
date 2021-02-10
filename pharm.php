<?php
 $submit="false";
 if(isset($_POST['name'])){
    
 $server = "localhost";
 $username = "root";
 $password = "";

 // Create a database connection
 $con = mysqli_connect($server, $username, $password);

 // Check for connection success
 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }
//  else{
//  echo "Success connecting to the db";
//  }

$name=$_POST['name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$message=$_POST['message'];


$sql= " INSERT INTO `smform`.`smform` ( `name`, `Email`, `Phone`, `message`, `date`) VALUES ( '$name', 
'$Email', '$Phone', '$message', current_timestamp());";

// echo $sql;

if($con->query($sql)==true){
    // echo "succesfuly inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM PHARMACY</title>
    <link rel="stylesheet" href="p.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@800&family=Redressed&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width:1170px)" href="phone.css">

    <!-- below link is for source to use cart sybol  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>
    
    <nav id="navbar">
        <div id="logo">
            <img src="int/logo.jpg" alt="SMlogo">
        </div>
        <ul>
            <li class="item"><a href="#home">HOME</a></li>

            <li class="item"><a href="#services">SERVICES</a></li>
            <li class="item"><a href="#connection-section">CONNECTIONS</a></li>
            <li class="item"><a href="#contact">CONTACT US</a></li>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="search here">

            </div>
        </ul>
    </nav>
    <section id="home">
       
        <h1 class="heading-1">SM pharma</h1>
        <p>Get the best medicines online now on your <b>SMpharma.com</b> withing fraction of time with billing at time
        </p>
        <button class="btn">order now<i class="fa fa-shopping-cart fa-2x"></i></i> </button>
        <!-- https://www.w3resource.com/icon/font-awesome/web-application-icons/shopping-cart.php -->
    </section>
    <section class="container">
        <h1 class="heading-2">
            <-- Our Services -->
        </h1>
        <div id="services">
            <div class="box">

                <h2 class="heading-2-center">HOME-DELIVERY</h2>
                <img class="image1" src="int/hdel.jpg" alt="">
                <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur, nostrum
                    id officiis illo nesciunt magnam, quisquam molestias, laboriosam nulla quia praesentium perferendis!
                    Aperiam assumenda, quo fugit totam enim vero.</p>
            </div>
        </div>

    </section>
    <section class="container">
        
        <div id="services">
            <div class="box">

                <h2 class="heading-2-center">ORDER ON CALL</h2>
                <img class="image2" src="int/call.jpg" alt="">
                <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur, nostrum
                    id officiis illo nesciunt magnam, quisquam molestias, laboriosam nulla quia praesentium perferendis!
                    Aperiam assumenda, quo fugit totam enim vero.</p>
            </div>
        </div>

    </section>
    <section class="container">
        <!-- <h1 class="heading-2">Our services</h1> -->
        <div id="services">
            <div class="box">

                <h2 class="heading-2-center">ADD THEM IN THE CART</h2>
                <img class="image1" src="int/cart.jpg" alt="">
                <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur, nostrum
                    id officiis illo nesciunt magnam, quisquam molestias, laboriosam nulla quia praesentium perferendis!
                    Aperiam assumenda, quo fugit totam enim vero.</p>
            </div>
        </div>

    </section>


    <section id="connection-section" >
        <h2 class="third-heading">Connection with:</h2>
        <div id="connectionus">
            <div class="connection">
                <img src="int/l1.gif" alt="connection section" width="480px" height="111px">
                <img src="int/l2.jpg" alt="connection section" width="480px" height="111px">
                <img src="int/l3.gif" alt="connection section" width="480px" height="111px">
                <img src="int/l4.jpg" alt="connection section" width="480px" height="111px">
                <img src="int/l5.jpg" alt="connection section" width="480px" height="111px">
            </div>
        </div>
    </section>
    <section id="contact">

        <h1 class="heading4">You can contact us via:</h1>
        <div id="contact-box">
            <form action="pharm.php" method="post">
               
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">

                </div>

                <div class="form-group">
                    <label for="Email-Id">Email: </label>
                    <input type="text" name="Email" id="Email" placeholder="Enter your Email-Id">

                </div>

                <div class="form-group">
                    <label for="Phone">Phone No. : </label>
                    <input type="text" name="Phone" id="Phone" placeholder="91********">

                </div>

                <div class="form-group">
                    <label for="name">Kindly tell us what you want to say: </label>
                    <textarea name="message" id="message" cols="40" rows="10"
                        placeholder="Enter your message(max 100-150 words)"></textarea>


                </div>
                <div class="form-group">
                    <button class="btn">submit</button>

                </div>
             
             
               
                <?php
                if($submit){
                 echo "<p style='color:darkgreen;font-size:23px'>Thanks,Your response has been submitted</p>";}
                ?>

            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.SMpharma com. All rights reserved!
        </div>
    </footer>
</body>

</html>

