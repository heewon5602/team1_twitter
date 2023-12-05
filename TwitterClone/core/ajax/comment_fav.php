<?php
	include '../init.php'; 
	
    if(isset($_POST['comment_fav']) && !empty($_POST['comment_fav'])){
    	$user_id  = $_SESSION['user_id'];
		$comment_id = $_POST['comment_fav'];
		
        $for_user = Tweet::getData($comment_id)->user_id;
		$get_id   = $_POST['user_id'];
		date_default_timezone_set("Asia/Seoul");

		User::create('comment_fav', array('user_id' => $user_id, 'comment_id' => $comment_id));

		echo `<div class="tmp d-none">
             `+ Comment::countLikes_comment($tweet_id) +`            
		</div>` ;
	}
    if(isset($_POST['unlike']) && !empty($_POST['unlike'])){
    	$user_id  = $_SESSION['user_id'];
    	$comment_id = $_POST['unlike'];
    	$get_id   = $_POST['user_id'];
		$for_user = Comment::getData($comment_id)->user_id;
	
		Comment::unLike($user_id, $comment_id);
		
		echo `<div class="tmp d-none">
             `+ Comment::countLikes_comment($comment_id) +`            
		</div>` ;
    }

    if(isset($_POST['file'])){
        $getFromT->uploadImage($_POST['files']);
    } 


?>