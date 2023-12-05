$(function(){
	$(document).on('click','.comment-like-btn', function(){
 		var comment_id  = $(this).data('comment');
		var user_id   = $(this).data('user');
		var comment_counter   = $(this).find('.comment-likes-count');
		var count     = comment_counter.text();
		var button    = $(this);

		//     $.post('http://localhost/twitterclone/core/ajax/like.php', {like:tweet_id, user_id:user_id}, function(){
 		// 	counter.show();
 		// 	button.addClass('unlike-btn');
		// 	button.removeClass('like-btn');
		// 	count++;
		// 	counter.text(count);
		// 	button.find('.fa-heart').addClass('fas');
        //     button.find('.fa-heart').removeClass('far');
        //     button.find('.fa-heart').removeClass('mt-icon-reaction');
        //  }); 

         $.ajax({
            type: "POST",
            url: "core/ajax/Comment.php",
            data: {like:comment_id, user_id:user_id},
            cache: false,
            success: function(data){
            // var result =   $('.tmp').html();
              
               counter.text(data);
               button.addClass('comment-unlike-btn');
               button.removeClass('comment-like-btn');
               
               button.find('.co-fa-heart').addClass('fas');
               button.find('.co-fa-heart').removeClass('far');
               button.find('.co-fa-heart').removeClass('mt-icon-reaction');

              
            }
          })
        
       

          
	});

	$(document).on('click','.comment-unlike-btn', function(){
        var comment_id  = $(this).data('comment');
		var user_id   = $(this).data('user');
		var comment_counter   = $(this).find('.comment-likes-count');
		var count     = comment_counter.text();
		var button    = $(this);

		// $.post('http://localhost/twitterclone/core/ajax/like.php', {unlike:tweet_id, user_id:user_id}, function(){
 		// 	counter.show();
 		// 	button.addClass('like-btn');
		// 	button.removeClass('unlike-btn');
		// 	count--;
		// 	if(count === 0){
		// 		counter.hide();
		// 	}else{
		// 	  counter.text(count);
		// 	}
		// 	  counter.text(count);
        //     button.find('.fa-heart').addClass('far');
        //     button.find('.fa-heart').addClass('mt-icon-reaction');
		// 	button.find('.fa-heart').removeClass('fas');
        // }); 
        $.ajax({
            type: "POST",
            url: "core/ajax/comment_fav.php",
            data: {unlike:comment_id, user_id:user_id},
            cache: false,
            success: function(data){
            // var result =   $('.tmp').html();
               if (data == 0)
               counter.text('');
              else  counter.text(data);

               button.addClass('comment-like-btn');
		       button.removeClass('comment-unlike-btn');
               
                button.find('.co-fa-heart').addClass('far');
                button.find('.co-fa-heart').addClass('mt-icon-reaction');
                button.find('.co-fa-heart').removeClass('fas');

              
            }
          })     

	});
});
