<?php 
	include '../init.php';
	$user_id = $_SESSION['user_id'];
if(isset($_POST['follow']) && !empty($_POST['follow'])){
	$following_id   = $_POST['follow'];
	// $user       = User::getData($user_id);
	date_default_timezone_set("Asia/Seoul");
    
    $data = [
        'follower_id' => $user_id , 
        'following_id' => $following_id
    ];
    Follow::create('follow' , $data);

    echo Follow::countFollowers($following_id);
}
if(isset($_POST['unfollow']) && !empty($_POST['unfollow'])){ 
    $following_id  = $_POST['unfollow'];

    Follow::delete('follow' , ['following_id' => $following_id , 'follower_id' => $user_id]);
    echo Follow::countFollowers($following_id);
}
