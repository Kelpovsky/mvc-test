<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>My Test MVC</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">

                <div id="menu">
                    <ul>
                        <li class="first active"><a href="/">Главная</a></li>
                        <li><a href="/services">Услуги</a></li>
                        <li><a href="/portfolio">Портфолио</a></li>
                        <li class="last"><a href="/contacts">Контакты</a></li>
                    </ul>
                    <br class="clearfix" />
                </div>
            </div>
            <div id="page">
                <div id="sidebar">
                    <div class="side-box">
                        <div class="side-box">
                            <h3>Основное меню</h3>
                            <ul class="list">
                                <li class="first"> <a href="/login">Войти на сайт</a></li>
                                <li><a href="/">Главная</a></li>
                                <li><a href="/services">Услуги</a></li>
                                <li><a href="/portfolio">Портфолио</a></li>
                                <li class="last"><a href="/contacts">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="side-box">    
                        <h3>Новости</h3>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <p align="justify">
                            Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p align="justify">
                            Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p align="justify">
                            Excepteur sint occaecat cupidatat non proident, 
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div>

                </div>
                <div id="content">
                    <div class="box">
                        <?php include 'application/views/' . $content_view; ?>

                    </div>
                    <br class="clearfix" />
                </div>
                <br class="clearfix" />
            </div>
            <div id="page-bottom">
                <div id="page-bottom-sidebar">
                    <h3>Контакты</h3>
                    <ul class="list">

                        <li>Skype: blessedguard1</li>
                        <li class="last">email: pooding11@gmail.com</li>
                    </ul>
                </div>
                <div id="page-bottom-content">
                    <h3>О Компании</h3>
                    <p>
                        <?php
                        $bottom = file_get_contents('application\models\content\content_bottom.txt');
                        print_r($bottom);
                        ?>
                    </p>
                </div>
                <br class="clearfix" />
            </div>
        </div>
        <div id="footer">
            <a href="/">Black Jesus</a> &copy; 2016</a>
        </div>
    </body>
</html>


