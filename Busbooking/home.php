<?php include("nav.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BookMyBus Ticket Booking</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
        body{
            background: linear-gradient(to left,tomato,purple );
            background-repeat: no-repeat;
            width:100%;
            background-attachment: fixed;
            overflow-x: hidden;
            margin:0;
        }
        .img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            width: 1000px;
            height: 600px;
        }
        .about-intro{
            font-size: 20px;
            font-style: italic;
            text-align: center;
            /*color: black;*/
        }
        #contact_us{
            font-size:20px;
            font-style: oblique;
            text-align: center;
            /*color: black;*/
        }        
    </style>
</head>
<body>
    <div>
        <figure>
            <img src="image/1.jpg" class="img" alt="error"/>
        </figure>
    </div><br>
    <div class="about-intro" id="AboutUs">
        <h1>About Us</h1>      
            <p>Plan your trip, reserve bus tickets, and arrive at your destination. We offer a complete online bus booking platform where you can buy and sell bus seats. The traveler can purchase bus tickets online, and in exchange, a text message with travel details will be delivered to confirm the seat reservation.Plan your journey ahead of time, save time buying bus tickets, avoid lengthy lines, discover your boarding location quickly, and enjoy your joyous journey in comfort using BookMyBus efficient bus reservation system. Join us on our journey to redefine bus travel. Let us be your trusted partner in exploring the world one journey at a time.           </p>
    </div><br><br>
    <div id="contact_us">
        <h1>Contact Us</h1>
        <p>123, Main Street, Banglore</p>
        <p>Email-Id: bookmybus@gmail.com</p>
        <p>Phone: 9876543210</p>
    </div><br>
    <?php include("footer.php");
    ?>
</body>
</html>