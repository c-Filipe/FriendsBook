<?=$render('header', ['loggedUser'=>$loggedUser]);?>
<section class="container main">
    <?=$render('sidebar',['activeMenu' => 'home']);?>
    <section class="feed mt-10">
        
        
        <div class="row">
            <div class="column pr-5">
                <?=$render('feed-new', ['loggedUser'=>$loggedUser]);?>

                <?php foreach($feed['posts'] as $feedItem): ?>
                    <?=$render('feed-item', [
                        'data'=>$feedItem,
                        'loggedUser' => $loggedUser
                        ]);?>  
                <?php endforeach; ?>
                <?php if($feed['total'] > 10 ): ?>
                    <div class="feed-pagination"> 
                        <a class="button-controller" href="<?=$base;?>/home?page=<?=$feed['currentPage']-1;?>">Anterior</a>
                        <?php for($q=0; $q<$feed['pageCount']; $q++): ?>
                            <a class="<?=($q==$feed['currentPage']?'active':'');?>" href="<?=$base;?>/home?page=<?=$q;?>"><?=$q+1;?></a>
                        <?php endfor ?>
                        <a class="button-controller" href="<?=$base;?>/home?page=<?=$feed['currentPage']+1;?>">Proxima</a>
                    </div>
                <?php endif ?>           
                      

            </div>
            <div class="column side pl-5">
                <?=$render('right-side');?>
                
            </div>
        </div>

    </section>
</section>
<?=$render('footer');?>