<h1><?= $user->username?></h1>

<div class="row">
    <div class="col-md-12">
        <ul class="thumbnails">
            <?php
            foreach ($userMedia->data as $media) {
                $content = '<li class="col-sm-4 col-xs-12"><div class="thumbnail"><div class="blockDtl">';
                if ($media->type === 'video') {
                    $poster = $media->images->low_resolution->url;
                    $source = $media->videos->standard_resolution->url;
                    $content .= "<video class=\"media video-js vjs-default-skin\" width=\"250\" height=\"250\" poster=\"{$poster}\"
                           data-setup='{\"controls\":true, \"preload\": \"auto\"}'>
                             <source src=\"{$source}\" type=\"video/mp4\" />
                           </video>";
                } else {
                    $image = $media->images->low_resolution->url;
                    $content .= "<img class=\"media\" src=\"{$image}\"/>";
                }
                $avatar = $media->user->profile_picture;
                $username = $media->user->username;
                $comment = $media->caption->text;
                $content .= "<div class=\"content\">
                           <div class=\"avatar\" style=\"background-image: url({$avatar})\"></div>
                           <p class=\"comment\">{$comment}</p>
                         </div>";
                echo $content . '</div></div></li>';
            }
            ?>
        </ul>
    </div>
</div>

<?php

//$instagram = new Instagram(array(
//    'apiKey'      => 'b4b035a860fc43119e6000ea7bb655a9',
//    'apiSecret'   => 'fd476573dd6c483b9edf95acdd8be033',
//    'apiCallback' => 'http://vinstagram.ru/accounts/view/'
//));

//echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
//
//if (isset($_GET['code'])) {
//    $code = $_GET['code'];
//    $data = $instagram->getOAuthToken($code);
//    $username = $data->user->username;
//    var_dump($data);
//    // store user access token
//    $instagram->setAccessToken($data);
//    // now you have access to all authenticated user methods
//    $result = $instagram->getUserMedia(2629599616);
//    var_dump($result);
//}
//
//$instagram = new Instagram('b4b035a860fc43119e6000ea7bb655a9');
//$result = $instagram->getPopularMedia();
//var_dump($result);


//var_dump($res);

?>