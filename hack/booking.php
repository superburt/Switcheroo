<!DOCTYPE HTML>
<html>
    <head>
        <title>Bookings</title>
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
                        if (!e.target.matches('.dropbtn')) {
                            var myDropdown = document.getElementById("myDropdown");
                            if (myDropdown.classList.contains('show')) {
                            myDropdown.classList.remove('show');
                        }
                    }
                    }
                </script>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12" id="bookCol">
                            <div class="book">
                                <h4>Book a Ride!</h4>
                                <form method="GET" action="index.php"> 
                                    <label>Location for pickup</label><br>
                                    <input type="radio" value="Bus Depot" name="campus">Bus depot
                                    
                                    <input type="radio" value="Cinema" name="campus">cinema
                                    
                                    <input type="radio" value="Law block" name="campus">Law block
                                    <br>
                                    <label>Time of pickup</label><br>
                                    <input type="datetime" name="date">
                                    <br>
                                    <label>Optional: Message for Switcheroo</label>
                                    <br>
                                    <input type="text" name="greeting" id="greeting" placeholder="Enter optional greeting!!">
                                    <br><br>
                                    <input type="submit">

                                    
                                </form>
                            </div>
                            <div class="row" id="mapRow">
                                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.2782979796702!2d153.0515043147052!3d-27.55387218285575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91417e4fffffff%3A0xba3d6ea0c09dd0de!2sGriffith+University%2C+Nathan+Campus!5e0!3m2!1sen!2sau!4v1564838043460!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            </div>
        </div>
        </body>
</html>