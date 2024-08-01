<?php require_once('db_connect.php'); ?>
<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> quran Player </title>
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="../H_IMGAES/2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <script src="font-awesome/js/all.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer  src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    }
    #dImage {
        width: 100%;
        max-height: 15vh;
        object-fit: scale-down;
        object-position: center center;
        ;
    }

    img.mini-display-img {
        width: 3.5rem;
        height: 3.5rem;
        object-fit: cover;
        object-position: center center;
        padding: 0.1em;
    }

    img#display-img {
        width: 80%;
        height: 25vh;
        object-fit: scale-down;
        object-position: center center;
    }

        .mlist__ {
            padding: 10px;
            display: flex;
            flex-direction: column;
        }
        .mlist__ .add_new_music
        {
            background-color: blue;
            color: #fff;
            padding: 10px 14px;
            border: none;
            transition: 0.3s;
        }
        .added 
        {
            display: flex;
            justify-content: space-between;
            place-items: center;
        }
        .mlist__ .add_new_music:hover 
        {
            background-color: red;
        }
        .m_begi ul
        {
            display: flex;
            /* flex-direction: row; */
            flex-wrap: wrap;
            margin-top: 50px;
            overflow-y: scroll;
            /* height: 450px; */
            height: 400px;
        }
        
        .m_begi ul::-webkit-scrollbar {
             width: 6px;
             height: 6px;
        }
        .m_begi ul::-webkit-scrollbar-button {
             width: 0px;
             height: 0px;
        }
        .m_begi ul::-webkit-scrollbar-thumb {
             background: blue;
             border: 0px none #ffffff;
             border-radius: 0px;
        }
        .m_begi ul::-webkit-scrollbar-thumb:hover {
             background: darkblue;
             cursor: pointer;
        }
        .m_begi ul::-webkit-scrollbar-thumb:active {
                background: darkblue;
        }
        .m_begi ul::-webkit-scrollbar-track {
             background: #d63384;
                /* border: 83px none #ffffff; */
                border-radius: 0px;
        }
        .m_begi ul::-webkit-scrollbar-track:hover {
                background: #d63384;
        }
        .m_begi ul::-webkit-scrollbar-track:active {
                background: #333333;
        }
        .m_begi ul::-webkit-scrollbar-corner {
                background: transparent;
        }

        .m_begi ul li 
        {
            transform: translatex(50px);
            margin: 10px 10px;
            list-style: none;
            padding: 0px;
            width: fit-content;
            overflow: hidden;
            display: block;
        }
        .li_check 
        {
            display: flex;
            flex-direction: column;
            height: fit-content;
            padding: 0px;
            overflow: hidden;
            position: relative;
        }
        .li_check .li_check_img
        {
            height: 150px;
            width: 100%;
            padding: 0;
            cursor: pointer;
        }
        .li_check .li_check_img img
        {
            width: 130px;
            height: 150px;
        }
        .overlay_123 
        {
            position: absolute;
            background: linear-gradient(transparent, rgba(0,0,0,.8));
            width: 100%;
            height: 150px;
            top: 0;
            place-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            transition: 0.3s;
            opacity: 0;
        }
        .m_begi ul li:hover .overlay_123
        {
            opacity: 1;
        }
        .mname123 
        {
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }
        .mname123 .title__ 
        {
            color: black;
            font-weight: 500;
            margin-top: 5px;
            max-width: 130px;
            font-size: 19px;
        }
        .desc___
        {
            font-size: 12px;
            opacity: .5;
            max-width: 130px;
        }
        .overlay_123 .over_btn 
        {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
        }
        .overlay_123 .over_btn button 
        {
            border: none;
            height: 30px;
            padding: 5px;
            width: 30px;
            border-radius: 50px;
            text-align: center;
            font-size: 14px;
            background-color: inherit;
            color: #fff;
            transition: 0.3s;
        }
        #play__ 
        {
            transform: scale(2,2);
            background-color: rgba(0,0,0,.2);
        }
        #play__:hover 
        {
            background-color: blue;
        }
        #edit__
        {
            transform: translateY(50px);
            opacity: .5;
        }
        #edit__:hover 
        {
            color: red;
            opacity: 1;
        }
        .down_play
        {
            background-color: #fff;
            position: absolute;
            height: 80px;
            bottom: 0;
            width: 100%;
            display: flex;
            flex-direction: row;
            padding: 10px;
            place-items: center;
            justify-content: center;
            justify-content: space-between;
        }
        .down_play .dimg,
        .down_play .ctrls-1,
        .down_play .rnager_
        {
            height: 60px;
            justify-content: space-between;
            width: 100%;
        }
        .down_play .dimg
        {
            display: flex;
            place-items: center;
            justify-content: flex-start;
            overflow: hidden;
        }
        .down_play .dimg .disk 
        {
            height: fit-content;
            display: flex;
            flex-direction: column;
            line-height: 10px;
            margin-left: 10px;
        }
        .down_play .dimg .disk p 
        {
            font-weight: 500;
            font-size: 19px;
        }
        .down_play .dimg .disk span 
        {
            opacity: .6;
            font-size: 14px;
        }
        .down_play .dimg #display-img
        {
            padding: 0;
            position: unset;
            max-height: 70px;
            max-width: 70px;
            height: fit-content;
            border-radius: 5px;
        }
        .down_play .ctrls-1
        {
            /* background-color: red; */
            display: flex;
            flex-direction: row; 
            justify-content: center;
            place-items: center;
            /* width: 50%; */
            position: unset;
            width: fit-content;
        }
        .down_play .ctrls-1 .mx-1 button
        {
            background-color: blue;
            border: none;
            font-size: 20px;
            width: 50px;
            color: #fff;
            border-radius: 50px;
            padding: 10px;
        }
        .down_play .ctrls-1 .mx-1 .nnt 
        {
            background-color: transparent;
            color: rgba(0,0,0,.8);
            transition: 0.3s;
        }
        .down_play .ctrls-1 .mx-1 .nnt:hover 
        {
            color: blue;
        }
        .down_play .rnager_
        {
            display: flex;
            place-items: center;
            justify-content: flex-end;
        }
        .down_play .rnager_ .currentTime
        {
            transform: translate(165px ,-25px);
        }
        .down_play .rnager_ .currentTime small 
        {
            font-size: 12px;
        }
        .ranger_123 
        {
            position: absolute;
            top: 0;
            left: 0px;
            transform: translateY(-5px);

            background-color: red;
            width: 100%;
            height: 5px;
            transition: width 100ms ease-in;
            border-radius: 0px;
            border: none;
            cursor: pointer;
        }
        .mmadm 
        {
            position: relative;
            height: 100vh;
            top: 0;
            margin-left: 260px;
        }
    </style>
</head>
<body>
    <?php 
    include('../dashboard/dashboard.php');
    ?>
    <main class="mmadm">
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
        <div  class="">
            <div class="">
                <div class="">
                 <div class="">

                 <!-- music list  -->
                    <div class="mlist__">
                        <div class="">
                            <div class="added">
                                <h5 class="">Playlist</h5>
                                <div class="">
                                    <button class="add_new_music" data-bs-toggle="modal" data-bs-target="#music_modal" type="button"><i class="fa fa-plus"></i> Add New One</button>
                                </div>
                            </div>
                        </div>
                        <div class="m_begi">
                            <ul class="" id="music-list">
                                <?php 
                                $music = $conn->query('SELECT * FROM `music_list` order by title asc');
                                while($row = $music->fetch_assoc()):
                                ?>
                                <li class="item" data-id="<?= $row['id'] ?>">
                                    <div class="li_check">
                                        <div class="li_check_img">
                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "  ../H_IMGAES/logo1.png" ?>" alt="" class="mini-display-img">
                                        </div>
                                            <div class="mname123">
                                                <span class="title__" title="<?= $row['title'] ?>"><?= $row['title'] ?></span>
                                                <span class="desc___" title="<?= $row['title'] ?>"><?= $row['description'] ?></span>
                                            </div>
                                        <div class="overlay_123">
                                            <div class="over_btn">
                                                <button class=" edit" id="edit__" data-id="<?= $row['id'] ?>"><i class="fa fa-edit"></i></button>
                                                <button class=" play" id="play__"  data-id="<?= $row['id'] ?>" data-type="pause"><i class="fa fa-play"></i></button>
                                                <button class=" delete" id="edit__" data-id="<?= $row['id'] ?>"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                 </div>
                 <!-- downplayer -->
                <div class="down_play">
                        <div class="dimg">
                            <img src="../H_IMGAES/2.png" alt="" id="display-img" class="" >
                            <div class="disk">
                                <p id="inplay-title">Sheikh</p>
                                <span id="inplay-description">Surah:</span>
                            </div>
                        </div>
                        <div class="ctrls-1">
                            <div class="mx-1">
                                <button class="nnt" id="prev-btn"><i class="fa fa-step-backward"></i></button>
                            </div>
                            <div class="mx-1">
                                <button class="" id="play-btn" data-value="play"><i class="fa fa-play"></i></button>
                            </div>
                            <div class="mx-1">
                                <button class="" id="stop-btn"><i class="fa fa-stop"></i></button>
                            </div>
                            <div class="mx-1">
                                <button class="nnt" id="next-btn"><i class="fa fa-step-forward"></i></button>
                            </div>
                        </div>
                        <div class="rnager_">
                            <div class="currentTime">
                                <small id="currentTime">--:--</small>
                                <small>/</small>
                                <small class="text-muted" id="inplay-duration">00:00</small>
                            </div>
                            <div id="range-holder" class="mx-1">
                                <input type="range" id="playBackSlider" value="0" class="ranger_123">
                            </div>
                            <div class="mx-1">
                                <span id="vol-icon"><i class="fa fa-volume-up"></i></span> <input type="range" value="100" id="volume">
                            </div>
                        </div>
                 </div>
                </div>
            </div>
        </div>

        <!-- add new music -->
        <div class="modal" id="music_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class=""> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="music-form">
                            <input type="hidden" name="id" >
                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Sheikh</label>
                                <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" required placeholder="Sheikh Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="control-label">Surah</label>
                                <textarea rows="3" name="description" id="description" class="form-control form-control-sm rounded-0" required placeholder="Write the Surah name here"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="audio" class="control-label">Audio File</label>
                                <input type="file" name="audio" id="audio" class="form-control form-control-sm rounded-0" required accept="audio/*" onchange="displayFileText(this)">
                            </div>
                            <div class="form-group mb-3">
                                <label for="img" class="control-label">Display Image</label>
                                <input type="file" name="img" id="img" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage')">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <div class="col-md-6">
                                <img src="../H_IMGAES/2.png" alt="Image" class="img-fluid img-thumbnail bg-gradient bg-dark" id="dImage">
                                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm rounded-0" style="padding:10px 18px;"       form="music-form" center>Add </button>
                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <!-- update music -->
        <div class="modal text-dark" id="update_music_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title"></i> Update My Playlist</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="update-music-form">
                            <input type="hidden" name="id" >
                            <div class="form-group mb-3">
                                <label for="title2" class="control-label">Song Name</label>
                                <input type="text" name="title" id="title2" class="form-control form-control-sm rounded-0" required placeholder="Song Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description2" class="control-label">Description</label>
                                <textarea rows="3" name="description" id="description2" class="form-control form-control-sm rounded-0" required placeholder="Write the description here/ features"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="audio2" class="control-label">Audio File</label>
                                <input type="file" name="audio" id="audio2" class="form-control form-control-sm rounded-0" accept="audio/*" onchange="displayFileText(this)">
                                <small><i><span class="text-muted">Current:</span> <span id="audio-current"></span></i></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="img2" class="control-label">Display Image</label>
                                <input type="file" name="img" id="img2" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage2')">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <div class="col-md-6">
                                <img src="../H_IMGAES/2.png" alt="Image" class="img-fluid img-thumbnail bg-gradient bg-dark" id="dImage2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm rounded-0" form="update-music-form" style="padding: 10px 14px;">Update </button>
                </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php if(isset($conn) && $conn) @$conn->close(); ?>
</html>
