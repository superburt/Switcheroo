<?php 
    $post = @$_GET['post'];
    $posts = array();
    if (!empty($post)){
        $posts[] = array(
            'image' => 'https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'name' => 'Jenny',
            'comment' => $post,
            'rating'=>'<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>',
            'date' => 'Date: 3/1/2019',
            'button'=> '<a href="booking.php"><button class="bookBut">Book Ride</button></a>'
        );

    }
    $posts[] = array(
            'image' => 'https://media.istockphoto.com/photos/portrait-of-smiling-handsome-man-in-blue-tshirt-standing-with-crossed-picture-id1045886560?k=6&m=1045886560&s=612x612&w=0&h=hXrxai1QKrfdqWdORI4TZ-M0ceCVakt4o6532vHaS3I=',
            'name' => 'Jason',
            'comment' => 'My Class finishes at 10:50am can someone drive to my spot?',
            'rating'=>'<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>',
            'date' => 'Date: 1/1/2019',
            'button'=> '<a href="booking.php"><button class="bookBut">Book Ride</button></a>'
    );
    $posts[] = array(
        'image' => 'https://media.istockphoto.com/photos/nice-selfie-picture-id629130320?k=6&m=629130320&s=612x612&w=0&h=pJPg6oWVU-bXC9ZMnliuiupta1dNmk6crvLmvuSDGOk=',
        'name' => 'Sarah',
        'comment' => 'Pick me up! I dont wanna walk!',
        'rating'=>'<div class=star>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </div>', 
        'date' => 'Date: 2/1/2019',
        'button'=> '<a href="booking.php"><button class="bookBut">Book Ride</button></a>'
    );
    $posts[] = array(
        'image' => 'https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Jenny',
        'comment' => 'I hate walking for 10 minutes to my car! Who wants to switch!?',
        'rating'=>'<div class=star>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        </div>',  
        'date' => 'Date: 3/1/2019',
        'button'=> '<a href="booking.php"><button class="bookBut">Book Ride</button></a>'
    );
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Switcheroo</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>           
        <div class="content">    
            <div class="navbar">
                <a href="index.php" id="logo"><img src="logo.png"></a>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Menu</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="index.php" >Home</a>
                            <a href="profile.html" >My Profile</a>
                            <a href="settings.html" >My settings</a>
                            <a href="help.html" >Give me Help</a>
                            <a href="login.php" >Log Out</a>
                        </div>
                </div>
            </div>
            <script>
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                window.onclick = function(e) {
                    if (!e.target.matches(".dropbtn")) {
                        var myDropdown = document.getElementById("myDropdown");
                        if (myDropdown.classList.contains("show")) {
                        myDropdown.classList.remove("show");
                    }
                }
                }
            </script>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4" id="col1">
                        <div class="post2">
                            
                            <a href="profile.html"><img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"></a>
                            <form method="get" action="index.php">
                                <h4>Offer a Ride</h4>
                                <input id="postinput" type="text" name="post">
                                <input type="submit" id="submitbutton">
                            </form>
                            </div>
                    </div>
                    <div class="col-md-12 col-lg-8" id="col2">
                        <h5>Live Feed</h5>
                        <div class="posts">
                        <?php foreach ($posts as $post) { ?>
                            <div class="post1">
                                <img src="<?= $post['image']  ?>"height="200" width="200"><br>
                                <?= $post['name'] ?><br>
                                <?= $post['comment'] ?><br>
                                <?= $post['rating']?><br>
                                <?= $post['date'] ?><br>
                                <?= $post['button'] ?>
                                <br>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footerTXT">
                    <ul>
                        <li><a href="contactUs.html">Contact Us</a></li>
                        <li>|</li>
                        <li><a href="aboutUs.html">About Us</a></li>
                    </ul>
                </div>
        </div>
</body>
</html>


