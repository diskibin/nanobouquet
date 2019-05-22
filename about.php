<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> NANO bouquet </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
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
            <p class='big'>О проекте 
                <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 4.44404C17 1.98963 14.951 0 12.4231 0C10.7579 0 9.30084 0.863575 8.50012 2.15451C7.6994 0.863575 6.24212 0 4.57694 0C2.049 0 0 1.98963 0 4.44404C0 5.72116 0.555873 6.87177 1.44443 7.68235L7.99586 13.7704C8.11605 13.9107 8.29633 14 8.49842 14C8.68561 14 8.85415 13.9229 8.97336 13.7998L15.5577 7.68235H15.5558C16.4445 6.87189 17 5.72128 17 4.44404Z" fill="#D96BFF"/>
                </svg>                        
            </p>
            
            <p>Nano Bouquet — проект о ценности маленьких вещей. <br>
                    Идея проекта зародилась в 2017 году, после долгих поисков интересной и новой ниши в области флористики. После долгих поисков мы нашли искомое: создавать маленькие изделия, ведь они так хороши для небольших подарков близким. <br>
                    С тех пор мы активно работаем в этом направлении.</p> <br><br><br>
            <p class='big'>Наша команда
            <svg class='smallstar' width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFD234"/></svg>
            <svg class ='bigstar' width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="#FFD234"/> </svg></p>
            <div class='team'><img src="img/1.png" class='photo'>
            <p>Анастасия Трифаненко — флорист дизайнер с многолетним опытом работы. Любит цветы и умеет с ними работать.</p></div><br>
            <div class='team'><img src="img/2.png" class='photo'>
            <p>Анастасия Искрова — наш агент и менеджер. С удовольствием примет ваш заказ и передаст его в работу.</p></div> <br>
            <p class='big'>О нас говорят</p>
            <?php
            $dbc = mysqli_connect('localhost', 'u0566924_ds', 'Gfhjkm111222', 'u0566924_nanobouquetds');
            $strSQL = "SELECT * FROM about ORDER BY id DESC LIMIT 10";
            $rs = mysqli_query($dbc, $strSQL);
            while($row = mysqli_fetch_array($rs)) {
                echo '<div class="commentary">';
                echo '<p class="text"><br><b>' . $row[1] . '</b><br><br>' . nl2br($row[3]) . '</p>';
                echo '</div>';
            }
            mysqli_close($dbc);
            ?>
        </div>
        <div class="item3">
            <br>
            <form id='form' method="POST">
                <p class='name'>Ваше имя<span class='zv'>*</span>
                <input type="text" name='name' id='name'></p><br>
                <p>Телефон(необязательно)
                <input type="text" name='phone' id='phone'></p><br>
                <p class='otz'>Отзыв<span class='zv'>*</span>
                <p><textarea class="comment" rows='4' name='commentary' id='commentary'></textarea></p><br>
                <p><button class='send' name='send' id='send'><img src="img/Exclude.png" style="vertical-align: middle"> оставить свой отзыв</p>
            </form>
        </div>
        <div class="item4">
            <br>
            <p class='addition'>Мы всегда рады узнать мнение наших клиентов и мы размещаем лучшие отзывы у себя на сайте. Если вам хотелось бы получить обратную связь, укажите свои контактные данные, наш менеджер свяжется с вами.</p> <br>
        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $("#form").submit(function() {
        if ($("input[id='name']").val().length < 1 && $("#commentary").val().length < 1){
            $('#name')
                .css('border', '1px solid #FF254C');
            $('.name')
                .css('color', '#FF254C');
            $('#commentary')
                .css('border', '1px solid #FF254C');
            $('.otz')
                .css('color', '#FF254C');
        }
        else if($("input[id='name']").val().length < 1){
            $('#name')
                .css('border', '1px solid #FF254C');
            $('.name')
                .css('color', '#FF254C');
            $('#commentary')
                .css('border', '1px solid #D96BFF')
            $('.otz')
                .css('color', '#000000');
        }
        else if($("#commentary").val().length < 1){
            $('#name')
                .css('border', '1px solid #D96BFF');
            $('.name')
                .css('color', '#000000');
            $('#commentary')
                .css('border', '1px solid #FF254C')
            $('.otz')
                .css('color', '#FF254C');
        }
        else{
            $.ajax({
                type: "POST",
                url: "otz.php",
                data: $(this).serialize()
            }).done(function() {
                $(this).find("input").val("");
                location.reload();
                $("#form").trigger("reset");
            });
        }
        return false;
    });
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
