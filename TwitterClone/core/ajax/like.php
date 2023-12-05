<?php
	include '../init.php'; 
	
    if(isset($_POST['like']) && !empty($_POST['like'])){
    	$user_id  = $_SESSION['user_id'];
		$tweet_id = $_POST['like'];
		
        $for_user = Tweet::getData($tweet_id)->user_id;
		$get_id   = $_POST['user_id'];
		date_default_timezone_set("Asia/Seoul");

		User::create('tweet_fav', array('user_id' => $user_id, 'post_id' => $tweet_id));

		echo `<div class="tmp d-none">
             `+ Tweet::countLikes($tweet_id) +`            
		</div>` ;
	}
    if(isset($_POST['unlike']) && !empty($_POST['unlike'])){
    	$user_id  = $_SESSION['user_id'];
    	$tweet_id = $_POST['unlike'];
    	$get_id   = $_POST['user_id'];
		$for_user = Tweet::getData($tweet_id)->user_id;
	
		Tweet::unLike($user_id, $tweet_id);
		
		echo `<div class="tmp d-none">
             `+ Tweet::countLikes($tweet_id) +`            
		</div>` ;
    }

    if(isset($_POST['file'])){
        $getFromT->uploadImage($_POST['files']);
    } 


?>