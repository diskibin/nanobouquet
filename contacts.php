<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <title> NANO bouquet </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/contacts.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<style>
	@font-face {
    font-family: Neucha;
    src: url(fonts/Neucha.ttf);
	font-weight: regular;
   	}
    @font-face {
    font-family: Open Sans;
    src: url(fonts/OpenSans.ttf);
	font-weight: regular;
   	}
	</style>
</head>
<body>
    <div class="grid-container">
        <div class="item1">
            <a class='logo' href="index.html"><img src="img/logo.svg"></a>
            <div id="myLinks">
                <a id='menunav' class='about' href="about.php">о нас</a>
                <a id='menunav' class='portfolio' href="portfolio.html">портфолио</a>
                <a id='menunav' class='contacts' href="contacts.php">контакты</a>
                <a id='menunav' class='phone' href="tel:79161119099">+7 (916) 111-90-99</a>
            </div>
            <a class='menu' href="javascript:void(0);"  onclick="myFunction()"><img width="90%" height="90%" src="img/tripoloski.png"></a>
        </div>
        <div class="item2">
            <br>
            <p class='big'>Хотите сделать заказ?</p>
            <p>Заполните форму ниже, наш менеджер свяжется с вами</p> <br>
            <form id='form' method="POST">
                <p class='name'>Ваше имя<span class='zv'>*</span>
                <input type="text" name='name' id='name'></p><br>
                <p class='num'>Телефон<span class='zv'>*</span>
                <input type="text" name='phone' id='phone'></p><br>
                <p>Комментарий</p>
                <p><textarea class="comment" rows='4' name='commentary' id='commentary'></textarea></p><br>
                <p><button class='send' name='send' id='send'><img src="img/Exclude.png" style="vertical-align: middle"> отправить</p>
            </form>
        </div>
        <div class="item3">
            <br>
            <p class='big'>Контакты</p>
            <p class='small'>+7 (916) 111-90-99</p>
            <p>briarnine@gmail.com</p> <br><br>
            <p class='big'>Мы в соцсетях</p>
            <img class='icon' id='instagram' src="img/instagram.png">
            <img class='icon' id='fb' src="img/fb.png">
            <img class='icon' id='twitter' src="img/twitter.png">
            <img class='icon' id='vk' src="img/vk.png">
            <br><br><br>
            <p class='big'>Время работы</p>
            <p>С 9:00 до 23:00 ежедневно</p>
        </div>
    </div>

    <div id="modal_form">
        <span id="modal_close">X</span>
        <div class='modalw'><p class='big'>Спасибо!
            <svg class='smallstar' width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFD234"/></svg>
            <svg class ='bigstar' width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="#FFD234"/> </svg></p>
        <p>Ваш заказ принят в обработку :) Мы перезвоним вам в рабочее время и уточним сроки и детали работ.</p></div>
    </div>

</body>
<script type="text/javascript">
var instagram = document.getElementById("instagram");
instagram.onmouseover = function(){
    this.setAttribute("src","img/instagramactive.png");
}
instagram.onmouseout = function(){
    this.setAttribute("src","img/instagram.png");
}
var fb = document.getElementById("fb");
fb.onmouseover = function(){
    this.setAttribute("src","img/fbactive.png");
}
fb.onmouseout = function(){
    this.setAttribute("src","img/fb.png");
}
var twitter = document.getElementById("twitter");
twitter.onmouseover = function(){
    this.setAttribute("src","img/twitteractive.png");
}
twitter.onmouseout = function(){
    this.setAttribute("src","img/twitter.png");
}
var vk = document.getElementById("vk");
vk.onmouseover = function(){
    this.setAttribute("src","img/vkactive.png");
}
vk.onmouseout = function(){
    this.setAttribute("src","img/vk.png");
}

$(document).ready(function() {

    $("#form").submit(function() {
        if ($("input[id='name']").val().length < 1 && $("input[id='phone']").val().length < 1){
            $('#name')
                .css('border', '1px solid #FF254C');
            $('.name')
                .css('color', '#FF254C');
            $('#phone')
                .css('border', '1px solid #FF254C');
            $('.num')
                .css('color', '#FF254C');
        }
        else if($("input[id='name']").val().length < 1){
            $('#name')
                .css('border', '1px solid #FF254C');
            $('.name')
                .css('color', '#FF254C');
            $('#phone')
                .css('border', '1px solid #D96BFF')
            $('.num')
                .css('color', '#000000');
        }
        else if($("input[id='phone']").val().length < 1){
            $('#name')
                .css('border', '1px solid #D96BFF');
            $('.name')
                .css('color', '#000000');
            $('#phone')
                .css('border', '1px solid #FF254C')
            $('.num')
                .css('color', '#FF254C');
        }
        else{
            $.ajax({
                type: "POST",
                url: "send.php",
                data: $(this).serialize()
            }).done(function() {
                $(this).find("input").val("");
                $('#modal_form') 
                        .css('display', 'block')
                $('#name')
                    .css('border', '1px solid #D96BFF');
                $('.name')
                    .css('color', '#000000');
                $('#phone')
                    .css('border', '1px solid #D96BFF');
                $('.num')
                    .css('color', '#000000');
                $("#form").trigger("reset");
            });
        }
        return false;
    });

});
$('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
		$('#modal_form')
                .css('display', 'none')
	});

    function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</html>
