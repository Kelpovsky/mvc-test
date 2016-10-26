<?php

class clients {

    protected $resultData = array();

    public function __construct($userData) {
        foreach ($userData as $key => $value) {
            $this->resultData[$key] = $value;
        }
    }

    public function register() {

        $userFile = fopen("users/users.txt", 'a');
        fputs($userFile, $this->resultData['login'] . "`");
        fputs($userFile, $this->resultData['password'] . "`");
        fputs($userFile, $this->resultData['email'] . ";");
        fclose($userFile);

        return $this->resultData;
    }

    public function userLogin() {

        $userFile = 'users/users.txt';
        $users = explode(";", file_get_contents($userFile));

        return $this->success($users);
    }

    public function success($users) {

        foreach ($users as $value) {
            $elements = explode("`", $value);

            if (!empty($elements[0])) {
                if ($elements[0] == $this->resultData['login'] && $elements[1] == $this->resultData['password']) {
                    header('Location: index.php');
                } 
            }
        }
        return 'your login shit';
    }

    public function recoverEmail() {
        mail("pooding11@gmail.com", "Ваш пароль", $clientData['password'], "From:sukablyat@sobaka.com");
    }

}
