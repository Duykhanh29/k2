
<?php
  $v=$_GET['v'];
  $title = $_GET['title'];
//   $channelTitle = $_GET['channelTitle'];
  $channel_id = "UCQqSJr6WYH0Bq7mrlFhzWDw";
  $api_key = "AIzaSyAcl6XbRpadc0Zd30o4ebVWNdBqY8ujnvo";
  if(isset($_GET['channelId'])){
    $channel_id = $_GET['channelId'];
  }

  $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&key=".$api_key."&type=video&channelId=".$channel_id."&maxResults=10";
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
    <link rel="stylesheet" href="watch.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>  
  
</div>
    <div id="main">
        <div class="content_left">
        <iframe class="mainVideo" src="https://www.youtube.com/embed/<?=$v?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="title">
                <h4 class="titleVideo"><?= $title ?></h4>
                <div class="details">
                    <p class="note">124.222 lượt xem <i class="fas fa-circle"></i> 24 thg 8, 2021</p>
                    <p class="likeBotton"> <i class="fas fa-thumbs-up bottomLike"></i>    700</p>
                    <p class="disLikeBotton"><i class="fas fa-thumbs-down"></i> 8</p>
                    <p class="shareBotton"><i class="fas fa-share"></i>SHARE</p>
                    <p class="saveBotton"><i class="fas fa-save saveBotton"></i>SAVE</p> 
                    
                </div>

            </div>
            <div class="infor">
                <img src="https://2.pik.vn/20215cb59f40-8637-426b-a875-b62f6550aeb0.png" alt="">
                <span class="name">Duy Khánh</span>
                <div class="SubBotton"></div>
            </div>
            <div class="comments">
                <p>84 Comments</p>
                <input type="text" placeholder="Add a public comment">
            </div>
        </div>
        <div class="content_right">
        <?php   foreach ($videos as $video) {?>
            <div class="video">
                <a href="watch.php?v=<?= $video->id->videoId ?>&title=<?= $video->snippet->title ?>&channelId=<?= $channel_id?>">
                    <div class="thumbnail">
                        <img src="<?= $video->snippet->thumbnails->high->url ?>" alt="">
                        <div class="fill">
                            <p><i class="fas fa-play iconPlay"></i>PLAY</p>
                        </div>
                    </div>
                </a>
                <div class="description">
                    <p class="titleSubVideo">
                        <?= $video->snippet->title ?>
                    </p>
                    <p class="noteSubVideo"> <?= $video->snippet->channelTitle ?> </p>
                    <p class="date"> 992,130 views <i class="fas fa-circle"></i> Feb 19, 2017</p>
                </div>
            </div>
        <?php } ?>  
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
