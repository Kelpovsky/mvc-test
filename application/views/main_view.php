<html>
    <body>
    <h1>Добро пожаловать!</h1>

    <img src="/images/office.jpg" align="left" >
    <form method="post" action="">
        <input type="text" name="article">
        <input type="submit" value="Запостить">
    </form>
    <p>    <?php
        foreach ($data as $value) {
            echo "$value" . "</br></br>";
        }
        ?>

    </p>
    </body
</html>