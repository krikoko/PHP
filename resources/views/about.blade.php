<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <style>
    * {
    width: 1200px;
    margin: 0 auto;
}

html,
body {
	height: 100%;
}
html {
    background-color: aliceblue;
}

body {
    background-color: #f8f8f8;
}

.container {
    flex: 1 0 auto;
    background-color: lightgrey;
    margin: 0 auto;
}

.header {
    background-image: url(img/images.jpg);
    height: 100px;
}

.menu {
    margin-top: 15px;
    width: 100px;
    float: left;
    list-style-type: none;
    color: black;
    font-size: 20px;
    text-transform: uppercase;
    font-family: monospace;
}

li a {
    text-shadow: white -1px -1px 0, #333 1px 1px 0;
    font-family: monospace;
    color: greenyellow;
}

li a:hover {
    color: red;
}

li a:active {
    color: yellow;
}

li a:hover:before {
    content: "^";
}

img.logo {
    width: 91px;
    float: right;
    outline: none;
    ;
}

h1 {
    font: bold 3em Arial, sans-serif;
    color: yellow;
    /* Цвет текста, совпадает с цветом фона */
    text-shadow: black -1px -1px 0, #333 1px 1px 0;
    margin-top: 10px;
    text-align: center;
}

h2 {
    margin-top: 20px;
    margin-left: 20px;
}

a {
    padding: 5px;
    text-decoration: none;
}

a:hover{
    color: blue;
}

a:active{
    color: chartreuse;
}

.block1 {
    outline: 1px solid black;
    margin: 40px 5px;
    width: 100%;
    height: 400px;
}

.block {
    outline: 1px solid black;
    margin: 40px 5px;
    width: 100%;
    height: 400px;
    background-image: url(img/ab2ffc4e5cf32612def8e4ee22.png);
    background-repeat: no-repeat;
}

.side {
    width: 100%;
    display: flex;
    justify-content: center;
}

.footer {
    flex: 0 0 auto;
  
  height: 100%;
    text-align: center;
    background-color: darkslategrey;
    height: 150px;
}

h4 {
    color: brown;
    padding: 5px;
    width: 100%;
    float: left;
}

h3{
    margin: 20px;
}

p {
    color: darkblue;
    padding: 15px;
    float: left;
    width: auto;
}

input {
    width: 90%;
    padding: 5px;
    margin: 5px;
}
input[type="radio"]{
    width: 100px;
    
}
form{
    width: 35%;
    margin 5px;
}
img{
    width: 150px;
}

img:hover{
    outline: 1px solid red;
}

.img{
    margin-right: 50px;
    
    width: 200px;
}

.button{
    margin-bottom: 50px;
    border-radius: 20px;
    padding: 10px;
    margin-top: 20px;
    margin-left: 50px;
    width: 100px;
}

.button:hover{
    background-color:greenyellow;
    color: red;
}

.button:active{
    background-color: darkred;
}
span{
   
    color: white;
}
    </style>
</head>

<body>
    <div class="header">
        <a href="index.html"><img class="logo" src="img/kisspng-smartphone-mobile-phone-accessories-logo-cellular-internet-access-5b0d877d9e6fe9.196958561527613309649.png" alt="logo" width="120px" height="100px"></a>
        <ul class="menu">
            @foreach ($li as $li)
            <li><a>{{$li}}</a></li>
            @endforeach
        </ul>
        <h1>MobileShop</h1>
    </div>
    <hr>
    <h2><?= $p;?></h2>
    <form action="#"> Имя
        <input type="text" placeholder="имя">
        <br> Фамилия
        <input  type="text" placeholder="фамилия">
        <br> Отчество
        <input  type="text" placeholder="отчество">
        <br> Дата рождения
        <input type="date">
        <br> Ваш пол M
        <input type="radio" name="pol" checked> Ж
        <input type="radio" name="pol"><br> Номер телефона
        <input  type="tel" placeholder="+79999999999">
        <br> E-mail
        <input  type="email" placeholder="exmple@mail.ru">
        <br> Пароль
        <input  type="password" placeholder="Пароль">
        <br> Повторить пароль
        <input  type="password" placeholder="Повтор пароля">
        <br>
        <input class="botton" type="submit" value="Регистрация">
        <input class="botton" type="reset" value="Отмена"> </form>
    <h4>Адрес:</h4>
    <p>Самарская область,<br>Кинельский район,<br>улица Октябрьская, дом&nbsp;20, второй этаж<br>8(495)374-369-82</p> <br>
    <iframe src="https://www.google.com/maps/d/embed?mid=1UQMeFMfnQcZa8mFwXiNQwkB0ErGW1GZb&hl=ru" width="640" height="480"></iframe>
    <hr> <div class="footer"><span>&laquo;Все права защищены &copy;&nbsp;2019&raquo;</span></div>
</body>

</html>