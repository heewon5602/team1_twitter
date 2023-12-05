<?php 

class Comment extends Tweet {
    
    protected static $pdo;

    public static function countLikes_comment($comment_id) {
        $stmt = self::connect()->prepare("SELECT COUNT(*) as count FROM comment_fav WHERE comment_id = :comment_id");
        $stmt->bindParam(':comment_id', $comment_id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // 가져온 레코드 개수를 반환
        if ($row) {
            return $row['count'];
        } else {
            return 0; // 만약 레코드가 없으면 기본값 0으로 반환
        }
    }

    
    public static function userLikeComment( $user_id ,$comment_id){
            
        $stmt = self::connect()->prepare("SELECT `user_id` , `comment_id` FROM `comment_fav` 
        WHERE `comment_id` = :comment_id and `user_id` = :user_id");
        $stmt->bindParam(":comment_id", $comment_id, PDO::PARAM_INT);
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        
        $stmt->execute(); 

        if ($stmt->rowCount() > 0) {
            return true;
        } else return false;

    }
}