<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music Player</title>
        <link rel="shortcut icon" href="./H_IMGAES/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="./css/footer.css">
        <!-- jquery cdn  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- iconic.io  -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>


        <div class="footer">
            <div class="footer_cont">
                <div class="s1">
                    <div class="footer_logo">
                        <a href="#"><img src="./H_IMGAES/logo1.png" alt=""></a>
                    </div>
                    <div class="ab_foot">
                        <p>ABOUT</p>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Developer</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Jobs</a></li>
                    </div>
                    <div class="lnk_foot">
                        <P>LINKS</P>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Legal</a></li>
                        <li><a href="#">Copywright</a></li>
                    </div>
                    <div class="cont_foot">
                        <P>CONNECT</P>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google+</a></li>
                    </div>
                    <div class="sub_foot">
                        <P>SUBCRIBE</P>
                        <form action="">
                            <label for="">Do you want to subscribe to our newsletter?</label>
                            <input type="email" placeholder="Your Email" required>
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <hr>
                <div class="s2">
                    <p>cookies</p>
                    <p>©<span id="year"></span> Copyright. All rights reserved</p>
                </div>
            </div>
        </div>



    </body>
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</html>