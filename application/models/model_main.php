<?php

class model_main {

    public function insert_data() {
        if (isset($_POST['article'])) {
            $article = $_POST['article'];
            $myObject = new DB;
            $res = $myObject->connectdb();

            $statement = $res->prepare("INSERT INTO news(articles)
             VALUES(?)");

            $statement->execute(array($article));
        }
    }

    public function get_data() {
        $myObject = new DB;
        $res = $myObject->connectdb();
        try {
            $sql = 'SELECT * FROM news ORDER BY id desc';
            foreach ($res->query($sql) as $row) {
                $result[] = $row['articles'];
            }
        } catch (\pdoexception $e) {
            echo "database error: " . $e->getmessage();
            die('lol');
        }


        return $result;
    }

}
