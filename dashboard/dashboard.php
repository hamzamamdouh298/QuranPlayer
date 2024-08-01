<?php 

// session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../H_IMGAES/2.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/profile.css" />
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  </head>
  <body>
    <style>
.sidebar .sidebar-content {
  display: flex;
  height: 100%;
  flex-direction: column;
  justify-content: space-between;
  padding: 30px 16px 50px 16px;
  /* padding: 0px;   */
  /* background-color: #f1f1f1; */
  
}
    </style>

  <!-- dashboard -->
    <nav>
      <!-- <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">CodingLab</span>
      </div> -->
      <div class="sidebar">
        <div class="logo">
          <!-- <i class="bx bx-menu menu-icon"></i> -->
          <img src="../H_IMGAES/logo1.png" alt="">
          <p  class="logo-name">
            <?php
                if(isset($_SESSION["username"])) {
                    echo "<span>"?>
                    <?php echo $_SESSION["username"] ;?>
                    <?php 
                    echo "</span>";
                }
                else 
                {
                    echo "<span>not logged in</span>";
    
                }
            ?>
        </p>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="#" class="nav-link active">
                <i class='bx bx-home-alt-2 icon'></i>
                <span class="link">My List</span>
              </a>
            </li>
            <!-- <li class="list">
              <a href="#" class="nav-link">
                <i class='bx bx-clipboard icon'></i>
                <span class="link">Dashboard</span>
              </a>
            </li> -->
            <!-- <li class="list">
              <a href="#" class="nav-link">
                <i class='bx bx-user icon'></i>
                <span class="link">Artists</span>
              </a>
            </li> -->
            <!-- <li class="list">
              <a href="#profile_click" class="nav-link profile_pp">
                <ion-icon name="layers-outline" class="icon"></ion-icon>
                <span class="link">Upload Music</span>
              </a>
            </li> -->
            <!-- <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Likes</span>
              </a>
            </li> -->
            <!-- <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">My Playlists</span>
              </a>
            </li> -->
          </ul>

          <!-- <div class="bottom-cotent">
            <li class="list">
              <a href="#" class="nav-link active_1">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li> -->
            <!-- <li class="list">
              <a href="../login system/logout.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li> -->

            <?php

                if(isset($_SESSION["username"])) {
                    echo <<<EOT
                    <li class="list">
                    <a href="../login system/logout.php" class="nav-link">
                    <i class="bx bx-log-out icon"></i>
                    <span class="link">Logout</span>
                    </a>
                    </li> 
                    EOT;
                }
                else 
                {
                    echo <<<EOT
                    <li class="list">
                    <a href="../login system/login.php" class="nav-link">
                    <i class="bx bx-log-out icon"></i>
                    <span class="link">Login</span>
                    </a>
                    </li> 
                    EOT;
                }
            ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- <div id="body"> -->
      <!-- <div class="body1"> -->
        <!-- < ?php include('headSlide.html'); ?> -->
        <!-- < ?php include('mylist.html'); ?> -->

        <!-- < ?php include('../music_player/index.php'); ?> -->


        <!-- upload music -->
        <!-- <div id="profile_click">
          <div class="m_upload">
            <form action="upload.php" method="post">
                <div class="m_close11">
                        <p>Upload Music</p>
                        <i class='bx bx-x'></i>
                </div>
                <div class="diff">
                    <div class="mainf">
                        <span>Title</span>
                        <input type="text" placeholder="Song Title" name="title">
                    </div>
                </div>
                <div class="mainf">
                    <span>Description</span>
                    <textarea name="description" id="" cols="30" rows="10" placeholder="optional"></textarea>
                </div>
                <div class="mainf">
                    <span>Audio File</span>
                    <input type="file" name="audio" accept="audio/*">
                </div>
                <div class="mainf ss">
                    <span>Image</span>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                    <input type="file" name="img" accept="image/*" value="" id="filePhoto" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">
                    <img id="previewHolder" />
                </div> 
                <div class="mainf">
                    <input type="submit" name="upload" value="upload New Music">
                </div>
            </form>
          </div>
        </div> -->


      <!-- </div> -->
    <!-- </div> -->

  </body>
  <script>
    var bar = document.querySelector('.sidebar-content');
    var list = bar.getElementsByClassName('nav-link');
    for (var i = 0; i < list.length; i++) {
      list[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }


    // var log_bar = document.querySelector('.bottom-cotent');
    // var list = bar.querySelector('bottom-cotent .nav-link');
    // for (var p = 0; p < list.length; p++) {
    //   list[p].addEventListener("click", function() {
    //     var current = document.getElementsByClassName("active_1");
    //     current[0].className = current[0].className.replace(" active_1", "");
    //     this.className += " active_1";
    //   });
    // }

      function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#previewHolder').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      } else {
        alert('select a file to see preview');
        $('#previewHolder').attr('src', '');
      }
    }

    $("#filePhoto").change(function() {
      readURL(this);
  });


    //hide modal
    $(" .m_upload .m_close11 i").click(function(){
      $(".m_upload").hide();
    });
    //open modal
    $(".profile_pp").click(function(){
      $(".m_upload").show();
    });
  </script>
</html>

