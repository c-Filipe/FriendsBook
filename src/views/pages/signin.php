<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login - FriendsBook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css" />
    <script type="text/javascript" src="<?=$base;?>/assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?=$base;?>/assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <a href=""><img src="<?=$base;?>/assets/images/friendsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/login">
        
            <?php if(!empty($flash)): ?>
              <div class="alert alert-danger" role="alert"> <?=$flash?> </div>
            <?php endif; ?> 

            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="ENTRAR" />

            <a href="<?=$base;?>/cadastro">Ainda não tem conta? Cadastre-se</a>
        </form>
        <br/>
        
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/images/moments.jpg" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Compartilhe</h5>
                <p>Registre seus melhores momentos e compartilhe com quem você ama</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/friends-2.jpg" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Conheça novas pessoas</h5>
                <p>Adicione pessoas novas e faça grandes amigos</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/reunion.jpg" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Reencontre</h5>
                <p>Reveja velhos amigos e viva novos momentos</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
        
      </section>
    
</body>
</html>