<?php

require_once("Manager.php");
class CommentManager extends Manager{

    public function getComments($postId)
        {
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT * FROM comments WHERE id_post = ?');
            $comments->execute(array($postId));

            return $comments;
    }

    public function postComment($postId, $author, $content){

        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id_post, author, content, date) VALUES(?,?,?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $content));

        return $affectedLines;
    }
}