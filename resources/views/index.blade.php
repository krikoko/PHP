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
    <div class="container">
        <div class="header">
            <a href="index.html"><img class="logo" src="img/kisspng-smartphone-mobile-phone-accessories-logo-cellular-internet-access-5b0d877d9e6fe9.196958561527613309649.png" alt="logo" width="120px" height="100px"></a>
            <ul class="menu">
                <li><a href="#">Главная</a></li>
                <li><a href="http://127.0.0.1:8000/about">О нас</a></li>
                <li><a href="http://127.0.0.1:8000/catalog">Каталог</a></li>
            </ul>
            <h1><?= $title;?></h1>
        </div>
        <hr size=10px color=aliceblue>
        <div class="main">
            <h2><?= $head;?></h2>
            <div class="side">
                <div class="block1">
                    <h4>Наш онлайн магазин...</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut&nbsp;perferendis, nam distinctio ipsa dolorum optio expedita laborum harum laboriosam mollitia perspiciatis nisi, nobis voluptatibus nesciunt dignissimos accusamus a&nbsp;cum ex&nbsp;facere eligendi minima qui sint commodi, maiores! Voluptates id&nbsp;veniam qui, vero magnam vel accusantium sapiente accusamus. Iusto, ipsa, dicta!</p>
                    <h4>Что наш магазин пердлагает?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae est nam, ipsum? Doloremque delectus ipsa sit perferendis ad&nbsp;doloribus, error totam a&nbsp;facilis neque! Vero expedita facere itaque, eum voluptatum aliquid facilis repellat corporis velit excepturi harum magni neque. Officiis voluptatum quas harum esse nihil eos iusto alias, omnis nulla vitae. Id&nbsp;obcaecati suscipit incidunt minus soluta tempora ut&nbsp;sint illum, fugiat cumque optio doloribus atque veniam rerum necessitatibus consequuntur architecto sequi nisi voluptates dolorum reprehenderit ullam aliquam. Fugit quae porro quaerat beatae cupiditate eveniet magni nulla consequatur quo incidunt nihil blanditiis consectetur vero, esse nisi, minima obcaecati laboriosam, molestias.</p>
                </div>
                <div class="block">
                    <h4>Самый лучшие предложения только для вас!</h4>
                    <p>
                        Нашим клиентам всегда лучшие предложения! И&nbsp;только сейчас у&nbsp;нас скидка на&nbsp;любой смартфон до&nbsp;70%!
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur iure adipisci tempore repellat eaque minus, quo accusantium ab&nbsp;dolorem labore, repudiandae ipsam, at&nbsp;quia laborum quae delectus quasi sit totam deserunt distinctio alias. Illo, earum non reprehenderit omnis. Rerum similique rem culpa sit doloremque architecto quasi, porro eligendi quam vel.</p>
                </div>
            </div>
        </div>
        <hr size=10px color=aliceblue>
        <div class="footer"> <span>&laquo;Все права защищены &copy;&nbsp;2019&raquo;</span></div>
    </div>
</body>

</html>