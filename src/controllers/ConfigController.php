<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class ConfigController extends Controller {

    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser === false){
            $this->redirect('/login');

        }
        
    }
    
    public function index() {
        $user = UserHandler::GetUser($this->loggedUser->id);
        $flash = "";        
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        
        
        $this->render('settings',[
            'loggedUser' => $this->loggedUser,
            'user' => $user,
            'flash' => $flash                
        ]);
    
    }
    public function settingsAction(){
        $name = filter_input(INPUT_POST, 'name');
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $city = filter_input(INPUT_POST, 'city');
        $work = filter_input(INPUT_POST, 'work');
        $password = filter_input(INPUT_POST, 'password');
        $confirmPassword = filter_input(INPUT_POST, 'ConfirmPassword');

        if($name ){
            $updateFields =[];
        
            $user = UserHandler::GetUser($this->loggedUser->id);

            // BIRTHDATE
            $birthdate = explode('/',$birthdate);
                if(count($birthdate) != 3) {
                $_SESSION['flash'] = "Data de nascimento inválida!";
                echo "<script> history.back() </script>";
                $this->redirect('/config');

                }
                $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];
                if(strtotime($birthdate) === false){
                    $_SESSION['flash'] = "Data de nascimento inválida!";
                    echo "<script> history.back() </script>";
                    $this->redirect('/config');
                    
                }
                $updateFields['birthdate'] = $birthdate;

                // PASSWORD
                if(!empty($password)){
                    if($password === $confirmPassword){
                        $updateFields['password'] = $password;
                    }
                    else{
                        $_SESSION['flash'] = 'As senhas digitadas não conferem';
                        echo "<script> history.back() </script>";
                        $this->redirect('/config');

                    }
                }

                // OUTROS CAMPOS
                $updateFields['name'] = $name;
                $updateFields['city'] = $city;
                $updateFields['work'] = $work;

                UserHandler::updateUser($updateFields,$this->loggedUser->id);

        } 
        $this->redirect('/config');      
    }

}