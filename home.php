<?php
  $channel_id = "UCQqSJr6WYH0Bq7mrlFhzWDw";
  $api_key = "AIzaSyAcl6XbRpadc0Zd30o4ebVWNdBqY8ujnvo";
  if(isset($_GET['channelId'])){
    $channel_id = $_GET['channelId'];
  }

  $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&key=".$api_key."&type=video&channelId=".$channel_id."&maxResults=50";
  $json = file_get_contents($url);

  $data = json_decode($json);

  $videos = $data->items;
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="watch.css"> -->
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>  
    
    

    <div id="main">
        <div id="side_bar"> 
            <div class="itemCategory">
               <a href="?channelId=UCHaoRHtZ-6iZl9eYUTnH2hQ">
                    <div class="category">
                        <i class="fas fa-address-book iconCategory"></i>
                        <span>Nà Ní(Mixi)</span>
                    </div>
                </a>
                <a href="?channelId=UCrcKqsixyf2lqkM_ITGPq1A">
                    <div class="category">
                        <i class="fas fa-bookmark iconCategory"></i>
                        <span>Savanteum</span>
                    </div>
                </a>
                <a href="?channelId=UCjfgkXbwmFzcWK8sqKA0tcA">
                    <div class="category">
                        <i class="fas fa-book-open iconCategory"></i>
                        <span>Motivation</span>
                    </div>
                </a>
            </div>
            <div class="itemCategory">
                <a href="?channelId=UC9xeuekJd88ku9LDcmGdUOA"> 
                    <div class="category">
                        <i class="fas fa-clock iconCategory"></i>
                        <span>K+ Sport</span>
                    </div>
                </a>
                <a href="?channelId=UCQqSJr6WYH0Bq7mrlFhzWDw">
                    <div class="category">
                        <i class="fas fa-home iconCategory"></i>
                        <span> BLV Anh Quân </span>
                    </div>
                </a>
                <a href="?channelId=UCTS0BypVPJxTMnkXTHZNWRQ">
                    <div class="category">
                        <i class="fab fa-bluetooth iconCategory"></i>
                        <span>Hà Quyết </span>
                    </div>
                </a>
                
            </div>
            <div class="itemCategory">
                <a href="?channelId=UCRsd_L7wBGdHLhfacuy3QVw"> 
                    <div class="category">
                        <i class="fas fa-qrcode iconCategory"></i>
                        <span>Spiderum</span>
                    </div>
                </a>

                <a href="?channelId=UCiHC4XYjqdCt-rAoknKqTdw"> 
                    <div class="category">
                        <i class="fas fa-microphone iconCategory"></i>
                        <span>Alias</span>
                    </div>
                </a>
                
                <a href="?channelId=UCHaHD477h-FeBbVh9Sh7syA"> 
                    <div class="category">
                        <i class="fas fa-book iconCategory"></i>
                        <span>BBC</span>
                    </div>
                </a>
            </div>
            <div class="itemCategory">
                <div class="category">
                    <i class="fas fa-home iconCategory"></i>
                    <span>Trang chủ</span>
                </div>
                <div class="category">
                    <i class="fas fa-clock iconCategory"></i>
                    <span>Xem sau</span>
                </div>
                <div class="category">
                    <i class="fas fa-thumbs-up iconCategory"></i>
                    <span>Yêu thích</span>
                </div>
                <div class="category">
                    <i class="fab fa-youtube-square iconCategory"></i>
                    <span>Đăng ký</span>
                </div>
            </div>
        </div>
        <div id="content">
        <div class="videos">
              <?php   foreach ($videos as $video) {?>
                <div class="video">
                    <a href="watch1.php?v=<?= $video->id->videoId ?>&title=<?= $video->snippet->title ?>&channelId=<?= $channel_id?>&channelTitle=<?= $video->snippet->channelTitle ?>">
                        <div class="thumbnail">
                            <img src="<?= $video->snippet->thumbnails->high->url ?>" alt="">
                            <div class="fill">
                                <p><i class="fas fa-play iconPlay"></i>PLAY</p>
                            </div>
                        </div>
                    </a>
                    <div class="title">
                        <div class="author">
                            <img src="https://2.pik.vn/20215cb59f40-8637-426b-a875-b62f6550aeb0.png" alt="">
                        </div>
                        <div class="title_content">
                            <h4><?= $video->snippet->title ?></h4>
                            <span class="channelTitle"><?= $video->snippet->channelTitle ?></span>
                            <span  class="chanelName2">1.2M lượt xem</span>
                        </div>
                    </div>
                </div>
              <?php   } ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
