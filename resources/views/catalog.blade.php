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
        <li><a href="index.html">Главная</a></li>
        <li><a href="contacts.html">Регистрация</a></li>
        <li><a href="#">Каталог</a></li>
    </ul>
     <h1>MobileShop</h1>
    </div>
    <h1><?= $com;?></h1>
    <hr>
    <h2><?= $head;?></h2>
    <div class="url"><img src="img/142665_5.jpg" alt="samsung" height="100px" width="100">
    <a href="catalog/equipment1.html">Samsung J7</a>
    <img src="img/a-4.jpg" alt="huawei" height="100px" width="100">
    <a href="catalog/equipment2.html">Huawei P20 Pro</a>
    <img src="img/apple-iphone-11-256-.jpg" alt="iphone" height="130px" width="130">
    <a href="catalog/equipment3.html">Iphone 11</a></div>
    <hr> <div class="footer"><span>&laquo;Все права защищены &copy;&nbsp;2019&raquo;</span></div>
</body>
</html>