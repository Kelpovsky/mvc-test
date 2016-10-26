<html>
    <h1>Добро пожаловать!</h1>
    
        <img src="/images/office.jpg" align="left" >
    <form method="post" action="">
        <input type="text" name="article">
        <input type="submit" value="Запостить">
    </form>
    <p>    <?php
        foreach ($data as $value) {
                echo "<pre>";
                echo "$value" . "</br>";
            
        }

        //print_r($data);
        ?>

    </p>
</html>