


  
       
        <div class="col-md-12 twitter2">
          <h2>Twitter Timeline</h2>
          <p>Use the first image below to see a timeline featuring every player on the team or select an individual player to only see their timeline.  </p>
          <div class="switzer">
  <div class="col-xs-4 col-md-2 football1"><img id="football" src="img/fedora.png" width="100%" height="auto"><p>Football Team</p></div>
  
        <div class="col-xs-4 col-md-2 switzer1"><img  id="switzer" src="http://image.cdnllnwnl.xosnetwork.com/pics33/400/DY/DYXDUJIDHHPSRBP.20160502205547.jpg" width="100%" height="auto"><p>Ryan Switzer</p></div>
        
       <div class="col-xs-4 col-md-2 trubisky1"><img id="trubisky" src=" http://image.cdnllnwnl.xosnetwork.com/pics33/400/GQ/GQNVEZAYPUJVZRM.20160502205547.jpg" width="100%" height="auto"><p>Mitch Trubisky</p></div>
        <div class="col-xs-4 col-md-2 hood1"><img id="hood" src="http://image.cdnllnwnl.xosnetwork.com/pics33/400/FN/FNUUAYIUJBBCEAQ.20160502205547.jpg" width="100%" height="auto"><p>Elijah Hood</p></div>
        <div class="col-xs-4 col-md-2 weiler1"><img id="weiler" src="http://image.cdnllnwnl.xosnetwork.com/pics33/400/AB/ABXBMIGLKHDHSKF.20160502205547.jpg" width="100%" height="auto"><p>Nick Weiler</p></div>
         <div class="col-xs-4 col-md-2 logan1"><img id="logan" src="http://image.cdnllnwnl.xosnetwork.com/pics33/400/XU/XUGSENYMUTRUREO.20130620213316.jpg" width="100%" height="auto"><p>TJ Logan</p></div>
          </div>
     <div class="col-md-12 twitterfeed" style="overflow:scroll; height:600px;">
        
 <div id="uncfeed1" class="uncfeed1">
<?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
//$twitter = new TwitterAPIExchange($settings);
//echo $twitter->buildOauth($url, $requestMethod)
//             ->setPostfields($postfields)
//             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=unc&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

foreach($tweetData['statuses'] as $index => $items){
    
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a class="screenname" href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a class="screenname" href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'];
    echo '<br/>';
    echo '</div>';
    
}
?>          

</div>          
          
 <div id="footballfeed" class="footballfeed">         
<?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$url = 'https://api.twitter.com/1.1/lists/statuses.json';
$getfield = '?slug=Football&owner_screen_name=madisonlynwalls&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

foreach($tweetData as $index => $items){
    
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'];
    echo '<br/>';
    echo '</div>';
    
}


?>
</div>
 
<div id="switzerfeed" class="switzerfeed">
            
<?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=Switz03&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

foreach($tweetData as $index => $items){
    
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'];
    echo '<br/>';
    echo '</div>';
    
}


?>
  
 </div>

<div id="trubiskyfeed" class="trubiskyfeed">
  <?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=Mtrubisky10&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

foreach($tweetData as $index => $items){
    
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'];
    echo '<br/>';
    echo '</div>';
    
}

?>

</div>

<div id="hoodfeed" class="hoodfeed">
  <?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=So_Hood34&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

foreach($tweetData as $index => $items){
    
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'];
    echo '<br/>';
    echo '</div>';
    
}

?>

</div>

<div id="weilerfeed" class="weilerfeed">
  <?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=NickWeiler24&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

foreach($tweetData as $index => $items){
    
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'];
    echo '<br/>';
    echo '</div>';
    
}

?>

</div>
 
 <div id="loganfeed" class="loganfeed">
  <?php
ini_set('display_errors', 1); /**Set to zero**/
require_once('TwitterAPIExchange.php');
echo "<script>console.log('before requesttwitter')</script>";
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "379510591-4GQrz21HmnKhybVSYRtl5OWsGj5sqU3xDXcIhL3L",
    'oauth_access_token_secret' => "PUi9ZH46e2IouB8QZuQ1g1hgnyWdOJqPITndYkjUXtrXj",
    'consumer_key' => "W4zo87gplIrea9HhRHP8LqrO0",
    'consumer_secret' => "5bANhdcXUYEh9TVVaCeXjAfKdHGs7JNk2kMU3mPyeoDNxgigvc"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=T_Ocho8&count=100';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$tweetData= json_decode(
    
            $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc=TRUE);

             echo "<script>console.log('after request and decode twitter')</script>";
foreach($tweetData as $index => $items){
    echo "<script>console.log('inside loop')</script>";
    $userArray = $items ['user'];
    echo '<div class="profile-pic">' ; 
    echo '<a href="https://twitter.com/' .$userArray['screen_name'] . '"><img src="' . $userArray['profile_image_url'] . '"></a>';
    echo '<a href="https://twitter.com/' . $userArray['screen_name'] . '">' . $userArray['name'] . '</a>' . '<br/>' . $items ['text'] . $userArray['media'];
    echo '<br/>';
    echo '</div>';
    
}

?>
 </div>
  </div>
    </div>