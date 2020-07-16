<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\PostHandler;
class ProfileController extends Controller {

    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser === false){
            $this->redirect('/login');

        }
        
    }
    
    public function index($atts = []) {
       $id = $this->loggedUser->id;
       $page = intval(filter_input(INPUT_GET,'page'));
       
       // Detectando o usuario acessado
       if(!empty($atts['id'])){
           $id = $atts['id'];
       }
       // pegando informações do usuário
       $user = UserHandler::getUser($id, true);
       if(!$user){
           $this->redirect('/home');
       }
       $dateFrom = new \DateTime($user->birthdate);
       $dateTo = new \DateTime('today');
       $user->ageYears = $dateFrom->diff($dateTo)->y;

       // pegando o feed do usuário
       $feed = PostHandler::getUserFeed(
            $id,
            $page,
            $this->loggedUser->id
        );

        // verificar se EU sigo o usuario
        $isFollowing = false;
        if ($user->id != $this->loggedUser->id){
            $isFollowing = UserHandler::isFollowing($this->loggedUser->id,$user->id);
        }

        $this->render('profile',[
            'loggedUser' => $this->loggedUser,
            'user' => $user,
            'feed'=> $feed,
            'isFollowing' => $isFollowing
        ]);
        
    }
    public function follow($atts){
        $to = intval($atts['id']);

        if(UserHandler::idExists($to)){
            if(UserHandler::isFollowing($this->loggedUser->id, $to)){
                //Deixar de seguir
                UserHandler::unfollow($this->loggedUser->id, $to);
            }
            else{
                //seguir
                UserHandler::follow($this->loggedUser->id, $to);

            }

        }
        
        $this->redirect('/perfil/'.$to);
        
    }

    

}