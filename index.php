<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!--<meta name="viewport" content="width=1400px,initial-scale=-1">-->
<meta name="viewport" content="initial-scale=1, user-scalable=no">
<title>Lucas de Carvalho - Publicitário e Programador Web</title>
<link rel="stylesheet" href="body.css"/>
<link rel="stylesheet" href="style.css"/>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1200);
        return false;
      }
    }
  });
});

<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
</head>
<body>

<header>
	<h3>Lucas de Carvalho</h3>
    <a style="cursor:pointer;" onclick="toggle_visibility('menu');">
    	<i style="color:#fff;float:right;font-size:38px;margin:14px 0;" class="fa fa-bars"></i>
    </a>
    <nav id="menu_desk">
        <ul>
            <li><a href="#inicio">INÍCIO</a></li>
            <li><a href="#formacao">FORMAÇÃO</a></li>
            <li><a href="#web">LINGUAGENS WEB</a></li>
            <li><a href="#digital">COMUNICAÇÃO DIGITAL</a></li>
            <li><a href="#criacao">SOFTWARES DE CRIAÇÃO</a></li>
            <li><a href="#empresas">EMPRESAS</a></li>
            <li><a href="#contato">CONTATO</a></li>
        </ul>
    </nav>
    <nav id="menu">
        <ul>
            <li><a href="#inicio" onclick="toggle_visibility('menu');">INÍCIO</a></li>
            <li><a href="#formacao" onclick="toggle_visibility('menu');">FORMAÇÃO</a></li>
            <li><a href="#web" onclick="toggle_visibility('menu');">LINGUAGENS WEB</a></li>
            <li><a href="#digital" onclick="toggle_visibility('menu');">COMUNICAÇÃO DIGITAL</a></li>
            <li><a href="#criacao" onclick="toggle_visibility('menu');">SOFTWARES DE CRIAÇÃO</a></li>
            <li><a href="#empresas" onclick="toggle_visibility('menu');">EMPRESAS</a></li>
            <li><a href="#contato" onclick="toggle_visibility('menu');">CONTATO</a></li>
        </ul>
    </nav>
</header>



<div class="container" id="inicio">
<figure>
	<a href="https://www.facebook.com/neerodigital" target="_blank"></a>
	<figcaption style="margin-top:220px;"></figcaption>
	<figcaption style="display:none;width:90%;padding:40px 5%;float:left;color:#fff;background:rgba(43, 206, 196, 0.7);position:absolute;bottom:-20px;">Olá, seja bem vindo(a)! Aqui, listo e atualizo minhas competências profissionais afim de divulgar o meu trabalho e a disponibilidade para contratação PJ como analista de marketing/comunicação e/ou programador web.</figcaption>
</figure>
</div>



<div class="container" id="formacao">
<figure>
	
	<figcaption>FORMAÇÃO PROFISSIONAL:</figcaption>

<div class="box" style="width:90%;margin: 0 auto;">
	
	<div id="display">
	<span><img src="img/lsc.png" style="width:100%;background:#ddd;"/></span>
	<h5>Fiz intercâmbio em Londres, onde pude aperfeiçoar o idioma Inglês na antiga escola da Fulham Broadway, a London Study Centre, atual LSC Stanton.</h5>
	</div>

	<div id="display">
	<span><img src="img/uws.png" style="width:100%;background:#ddd;"/></span>
	<h5>Fui certificado como Web Design Specialist pela the University of the West of Scotland onde prestei o curso técnico para a qualificação da CIW.</h5>
	</div>

	<div id="display">
	<span><img src="img/claretiano.png" style="width:100%;background:#ddd;"/></span>
	<h5>Sou graduado em Comunicação Social com habilitação em Publicidade e Propaganda pelo Centro Universitário Claretiano de Rio Claro/SP.</h5>
	</div>
</div>

</figure>
</div>



<div class="container" id="web">
<figure>
	
	<figcaption style="color:#2bcec4;">NÍVEL DE HABILIDADE EM LINGUAGENS WEB:</figcaption>

<div class="box">
	
<span class="chart" data-percent="100">
    <span class="percent"></span> HTML5
</span>

<span class="chart" data-percent="100">
    <span class="percent"></span> CSS3
</span>

<span class="chart" data-percent="95">
    <span class="percent"></span> PHP
</span>

<span class="chart" data-percent="85">
    <span class="percent"></span> JAVASCRIPT
</span>

</div>

</figure>
</div>



<div class="container" id="digital">
<figure>
	
	<figcaption style="color:#c7d401;">NÍVEL DE HABILIDADE EM FERRAMENTAS DE COMUNICAÇÃO DIGITAL:</figcaption>

<span class="chart2" data-percent="100">
    <span class="percent"></span> GOOGLE ANALYTICS
</span>

<span class="chart2" data-percent="100">
    <span class="percent"></span> GOOGLE MEU NEGÓCIO
</span>

<span class="chart2" data-percent="100">
    <span class="percent"></span> FACEBOOK FOR BUSINESS
</span>

<span class="chart2" data-percent="95">
    <span class="percent"></span> GOOGLE ADWORDS
</span>

</div>

</figure>
</div>



<div class="container" id="criacao">
<figure>
	
	<figcaption style="color:#f90;">NÍVEL DE HABILIDADE EM SOFTWARES DE CRIAÇÃO:</figcaption>

<span class="chart3" data-percent="100">
    <span class="percent"></span> ADOBE DREAMWEAVER
</span>

<span class="chart3" data-percent="100">
    <span class="percent"></span> SUBLIME TEXT
</span>

<span class="chart3" data-percent="95">
    <span class="percent"></span>  ADOBE FLASH
</span>

<span class="chart3" data-percent="65">
    <span class="percent"></span> ADOBE PHOTOSHOP
</span>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="jquery.easypiechart.min.js"></script>

<script src="classie.js"></script>
<script>
function graphs() {
$(function() {
	$('.chart').easyPieChart({
		easing: 'default',
		barColor: '#2bcec4',
		onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent));
		}

	});
	
});
}



function graphs2() {
$(function() {
	$('.chart2').easyPieChart({
		easing: 'default',
		barColor: '#c7d401',
		onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent));
		}

	});
	
});
}



function graphs3() {
$(function() {
	$('.chart3').easyPieChart({
		easing: 'default',
		barColor: '#f90',
		onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent));
		}

	});
	
});
}



function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 1000,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");

			window.onload = graphs();

        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();



function init2() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 1600,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");

			window.onload = graphs2();

        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init2();



function init3() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 2200,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");

			window.onload = graphs3();

        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init3();

</script>
</div>

</figure>
</div>



<div class="container" id="empresas">
<figure>
	
	<figcaption>EXPERIÊNCIA PROFISSIONAL:</figcaption>

<div class="box" style="width:90%;margin: 0 auto;">
	
	<div id="display">
	<span><img src="img/claretiano.png" style="width:100%;background:#ddd;"/></span>
	<h5>Trabalhei na Ação Educacional Claretiana como Desenvolvedor Web, no setor de TI, onde, junto à equipe, desenvolvi diversos projetos para a intituição, incluindo suas vertentes de rádio, TV, Colégios, Faculdades e Editoras.</h5>
	</div>

	<div id="display">
	<span><img src="img/whp.png" style="width:100%;background:#ddd;"/></span>
	<h5>Fui estagiário de comunicação corporativa na Whirpool Latin America, onde pude conhecer os processos da comunicação em uma multinacional e conviver com grandes profissionais de diversas áreas da companhia.</h5>
	</div>

	<div id="display">
	<span><img src="img/wcomn.png" style="width:100%;background:#ddd;"/></span>
	<h5>A WCOMN é um escritório de comunicação digital que estou à frente e mantenho desde 2010. Nesse período, através dela, pude trabalhar em centenas de projetos para dezenas de clientes como agências de propaganda e empresas.</h5>
	</div>
	
</div>

</figure>
</div>



<div class="container" id="contato">
<figure>
	<figcaption>ENTRE EM CONTATO</figcaption>
	<?php
        if(!isset($_POST["submit"]))
        {
        ?>
        
        <form action="/#contato" method="POST">
        <input type="text" name="name" placeholder="Digite seu nome" />
        <input type="text" name="email" placeholder="Digite seu e-mail" />
        <textarea name="text" placeholder="Como posso ajudar?"></textarea>
        <input type="submit" name="submit" value="ENVIAR" />
        </form>
        
        <?php
        }
        else{
			
		//Just get the headers if we can or else use the SERVER global
		if ( function_exists( 'apache_request_headers' ) ) {
		$headers = apache_request_headers();
		}
		else {
		$headers = $_SERVER;
		}
		
		//Get the forwarded IP if it exists
		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
		$the_ip = $headers['X-Forwarded-For'];
		}
		elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
		$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
		}
		else {
		$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
		}
        
        $to = 'lucasuix@gmail.com';
        $subject = 'Contato via site';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["text"];
        
        $text = '<p>FORMULÁRIO ENVIADO VIA: www.lucasdecarvalho.com.br.</p>
        <p>Nome: '.$name.'
        <p>Email: '.$email.'
        <p>Mensagem:<br /><br />'.$message.'</p>
        <hr>
        <p>IP: '.$the_ip.'</p>';
        
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From:" .$email. "\r\n"; // remetente
        $headers .= "Return-Path: $email \r\n"; // return-path
        
        mail($to,$subject,$text,$headers,$the_ip);
        echo "<p id='warm'>Mensagem enviada com sucesso! Obrigado.</p>";
        
        }
        ?>
</figure>
</div>

</body>
</html>