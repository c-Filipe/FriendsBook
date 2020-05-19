<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login - FriendsBook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/cadastro.css" />
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
        <form method="POST" action="<?=$base;?>/cadastro">
        
        
            <?php if(!empty($flash)): ?>
              <div class="alert alert-danger" role="alert"> <?=$flash?> </div>
            <?php endif; ?>
            <label for="name">Nome </label>
            
            <input placeholder="Digite seu nome completo" class="input" type="text" name="name" id="name"/>

            <label for="email">Email </label>
            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" id="email" />

            <label for="password">Senha </label>  
            <input placeholder="Digite sua senha" class="input" type="password" name="password" id="password"  />

            <label for="birthdate">Data de Nascimento </label>  
            <input placeholder="Digite sua data de nascimento" class="input" type="text" name="birthdate" id="birthdate"/>


            <input class="button" type="submit" value="Fazer Cadastro" />

            <a href="<?=$base;?>/login">Ja possui uma conta? Faça login</a>
        </form>
       
      </section>

      <script src="https://unpkg.com/imask"></script>
      
      <script>
          IMask(
            document.getElementById('birthdate'),
            {
                mask:'00/00/0000'
            }


          );
          
      </script>

          
    
</body>
</html>