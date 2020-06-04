<?=$render('header', ['loggedUser'=>$loggedUser]);?>
<section class="container main">
    <?=$render('sidebar');?>
    <section class="feed mt-10">
        
        
        <div class="row">
            <div class="column pr-5">

                <div class="box feed-new">
                    <div class="box-body">
                        <div class="feed-new-editor m-10 row">
                            <div class="feed-new-avatar">
                                <img src="<?=$base;?>/media/avatars/default.jpg" />
                            </div>
                            <div class="feed-new-input-placeholder">O que você está pensando, <?=$loggedUser->name;?>?</div>
                            <div class="feed-new-input" contenteditable="true"></div>
                            <div class="feed-new-send">
                                <img src="<?=$base;?>/assets/images/send.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box feed-item">
                    <div class="box-body">
                        <div class="feed-item-head row mt-20 m-width-20">
                            <div class="feed-item-head-photo">
                                <a href=""><img src="<?=$base;?>/media/avatars/default.jpg" /></a>
                            </div>
                            <div class="feed-item-head-info">
                                <a href=""><span class="fidi-name">Filipe Andrade</span></a>
                                <span class="fidi-action">fez um post</span>
                                <br/>
                                <span class="fidi-date">07/03/2020</span>
                            </div>
                            <div class="feed-item-head-btn">
                                <img src="<?=$base;?>/assets/images/more.png" />
                            </div>
                        </div>
                        <div class="feed-item-body mt-10 m-width-20">
                            Pessoal, tudo bem! Busco parceiros para empreender comigo em meu software.<br/><br/>
                            Acabei de aprová-lo na Appstore. É um sistema de atendimento via WhatsApp multi-atendentes para auxiliar empresas.<br/><br/>
                            Este sistema permite que vários funcionários/colaboradores da empresa atendam um mesmo número de WhatsApp, mesmo que estejam trabalhando remotamente, sendo que cada um acessa com um login e senha particular....
                        </div>
                        <div class="feed-item-buttons row mt-20 m-width-20">
                            <div class="like-btn on">56</div>
                            <div class="msg-btn">3</div>
                        </div>
                        <div class="feed-item-comments">
                            
                            <div class="fic-item row m-height-10 m-width-20">
                                <div class="fic-item-photo">
                                    <a href=""><img src="<?=$base;?>/media/avatars/default.jpg" /></a>
                                </div>
                                <div class="fic-item-info">
                                    <a href="">Bonieky Lacerda</a>
                                    Comentando no meu próprio post
                                </div>
                            </div>

                            <div class="fic-item row m-height-10 m-width-20">
                                <div class="fic-item-photo">
                                    <a href=""><img src="<?=$base;?>/media/avatars/default.jpg" /></a>
                                </div>
                                <div class="fic-item-info">
                                    <a href="">Bonieky Lacerda</a>
                                    Muito legal, parabéns!
                                </div>
                            </div>

                            <div class="fic-answer row m-height-10 m-width-20">
                                <div class="fic-item-photo">
                                    <a href=""><img src="<?=$base;?>/media/avatars/default.jpg" /></a>
                                </div>
                                <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
                            </div>

                        </div>
                    </div>
                </div>

                

            </div>
            <div class="column side pl-5">
                <div class="box banners">
                    <div class="box-header">
                        <div class="box-header-text">Patrocinios</div>
                        <div class="box-header-buttons">
                            
                        </div>
                    </div>
                    <div class="box-body">
                        <a href=""><img src="<?=$base;?>/assets/images/patrocinio-1.png" /></a>
                        
                        <a href=""><img src="<?=$base;?>/assets/images/patrocinio-2.png" /></a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body m-10">
                        Criado com ❤️ por Filipe Andrade
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>
<?=$render('footer');?>