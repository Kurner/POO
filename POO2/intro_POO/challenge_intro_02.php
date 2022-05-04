<?php

class Connexion
{

    private static $login = "user";
    private static $password = "user";

    static function dbConnect()
    {
        try 
        {
            return $db = new PDO('mysql:host=localhost;dbname=Connexion;charset=utf8', Connexion::$login, Connexion::$password);
        }
        catch(PDOException $e)
        {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function count()
    {
        $count = self::dbConnect()->prepare("SELECT COUNT(*) as total FROM test");
        $count->execute();
        $data = $count->fetch(PDO::FETCH_OBJ);
        echo $data->total;
    }
}

class Post extends Connexion
{
    public $id_post;
    public $title_post;
    public $content_post;

    function addPost($title, $content)
    {
      $add = self::dbConnect()->prepare("INSERT INTO test (title, post_content)
      VALUES ('$title', '$content')");
      $add->execute();
    }
    
    function allPost()
    {
        $found = self::dbConnect()->prepare("SELECT title FROM test");
        $found->execute();
        $data = $found->fetchALL(PDO::FETCH_OBJ);
        foreach($data as $post)
        {
            echo '<p>' . $post->title . '</p>';
        }
    }
    
    function deletePost($title)
    {
        $delete = self::dbConnect()->prepare("DELETE FROM test WHERE title='$title'");
        $delete->execute();
    }

}