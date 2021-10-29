<?php

require_once("model/Manager.php");

class CommentManager extends Manager{

    public function getComments($postId)
        {
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT id, auteur, contenu, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM comments WHERE id_projet = ? ORDER BY date DESC');
            $comments->execute(array($postId));

            return $comments;
    }

    public function postComment($postId, $author, $comment){

        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id_projet, auteur, contenu, date) VALUES(?,?,?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
}