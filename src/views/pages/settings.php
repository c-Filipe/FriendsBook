<?=$render('header', ['loggedUser'=>$loggedUser]);?>
<section class="container main">

    <?=$render('sidebar', ['activeMenu' => 'config']);?>

        <section class="feed mt-10">
            <div class='config'>
                <form method="POST" action="<?=$base;?>/config" enctype="multipart/form-data">
                    
                    <h1>Configurações</h1></br></br>

                    <label for="avatar"> 
                        Novo Avatar:
                    </label>
                    </br></br>
                    <input  name="avatar" id="avatar" type="file"/>
                    </br></br> </br>  
                    <label for="cover"> 
                        Nova Capa:
                    </label>
                    </br></br>
                    <input  name="cover" id="cover" type="file"/>
                
                    </br></br>
                    <hr/>
                    <br/>
                    <label for="name"> Nome Completo: </label>
                    <br/>
                    <input  name="name" id="name" type="text" value="<?=$loggedUser->name;?>" />
                    <br/>
                    <label for="birthdate">Data de Nascimento: </label>
                    </br>  
                    <input value="<?=date('d/m/Y', strtotime($loggedUser->birthdate));?>"  type="text" name="birthdate" id="birthdate"/>
                    <br/>
                    <label for="city">Cidade: </label>
                    </br>  
                    <input value="<?=$loggedUser->city;?>"  type="text" name="city" id="city"/>
                    <br/>
                    <label for="work">Trabalho: </label>
                    </br>  
                    <input value="<?=$loggedUser->work;?>" type="text" name="work" id="work"/>
                    <br/>
                    <label for="password">Senha: </label>
                    </br>  
                    <input placeholder="Digite sua nova senha"  type="password" name="password" id="password"/>
                    <br/>
                    <label for="password-2">Confirme Nova Senha: </label>
                    </br>  
                    <input placeholder="Digite novamente sua nova senha"  type="password" name="confirmPassword" id="password-2"/>    
                    <br/>
                    <button>Salvar</button>


                </form>
            </div>
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
      
        
<?=$render('footer');?>        