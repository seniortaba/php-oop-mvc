<?php

class Page
{
    public int $id;
    public string $title;
    public string $content;

    public function findById($id)
    {
        $dsn = "mysql:host=localhost;dbname=php-oop-mvc";
        $user = "root";
        $password = "root";

        try{
            $dbh = new PDO($dsn, $user, $password);
        }catch(PDOException $e){
            echo "Connection Failed: ". $e->getMessage() .'</br>';
            die();
        }

        $sql = "SELECT * FROM pages WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(['id' => $id]);
        $pageData = $stmt->fetch();
        $this->id = $pageData['id'];
        $this->title = $pageData['title'];
        $this->content = $pageData['content'];


    }
}