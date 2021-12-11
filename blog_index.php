<?php
?>

<!DOCTYPE html>
        <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="LoginPage" />
        <meta name="author" content="Ernest Nana Kwaku Ampomah - Benefo" />
        <meta name=" keywords" content="Log In" />
        <meta name="viewport" content="width = device-width, initial-scale = 2" />
        <title>HomePage</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="blog_index.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">
    </head>

    <body>
        <!--The Header containing the Navigation Bar-->
        <header>
                        
            <img class="logo" src="bmslogo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                    <li><a href="/BMSmain - Copy/home.php">Home</a></li>
                    <li><a href="blog_index.php">Create Posts</a></li>
                    <!--<li><a href="#">Read Other Posts</a></li>
                    <li><a href="editpost.php">Edit Post</a></li>-->
                </ul>
            </nav>
            <a class="cta" href="#"><button>Log Out</button></a>
            </header>



        <!-- Here is the text entry area.-->
        <form method="POST" action="create_post">
            <div class="text_area">
                <input type="text" name="title" class="area" placeholder="Enter title here." required>
            </div>

            <div class="body_area">
                <textarea class="text_area" name="body" id="" cols="30" rows="10" placeholder="Share your insights here" required></textarea>
            </div>
            <button type="submit" class="button" name="submit">Post</button>
        </form>


        <!--The footer containing contact buttons-->
            <footer>
                <div class="container">
                    <ul class="flex-row">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        
                        <li><a href="">Terms</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>

                    <ul class="flex-row">
                        <li><i class= "fa fa-youtube"></i></li>
                        <li><i class= "fa fa-twitter"></i></li>
                        <li><i class= "fa fa-facebook"></i></li>
                        <li><i class= "fa fa-instagram"></i></li>
                    </ul>

                    <p>&copy 2020 BMT</p>
                </div>
            </footer>
    </body>
</html