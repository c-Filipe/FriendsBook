<?php
    namespace src\handlers;
    use \src\models\Post;
    use \src\models\user;
    use \src\models\UserRelation;

    class PostHandler {

        public static function addPost($idUser, $type, $body) {
            $body = trim($body);
            if(!empty($idUser) && !empty($body)){

                Post::insert([
                    'id_user' => $idUser,
                    'type' => $type,
                    'created_at' => date('Y-m-d H:i:s'),
                    'body' => $body
                ])->execute();
            }

            

        }

        public static function getHomeFeed($idUser){
            //1. lista de usuarios que eu sigo.
            $userList = UserRelation::select()->where('user_from',$idUser)->get();
            $users = [];
            foreach($userList as $userItem){
                $users[] = $userItem['user_to'];
            }
            $users[] = $idUser;

            
            //2. pegar os posts ordenado pela data

            $postList = Post::select()
                ->where('id_user','in',$users)
                ->orderBy('created_at','desc')
            ->get();
            

            //3.transformar o resultado em objetos dos models.
            $posts = [];
            foreach($postList as $postItem){
                $newPost = new post();
                $newPost->id = $postItem['id'];
                $newPost->type = $postItem['type'];
                $newPost->created_at = $postItem['created_at'];
                $newPost->body = $postItem['body'];
                $newPost->mine = false;

                if($postItem['id_user'] == $idUser){
                    $newPost->mine = true;
                }


                //4. preecher as informações adicionais no post.
                $newUser = User::select()
                    ->where('id',$postItem['id_user'])
                ->one(); 
                $newPost->user = new User();
                $newPost->user->id = $newUser['id'];
                $newPost->user->name = $newUser['name'];
                $newPost->user->avatar = $newUser['avatar']; 

                //4.1 to-do preencher informações de LIKE
                $newPost->likeCount = 0;
                $newPost->liked = false;

                //4.2 to-do preencher informações de COMMENTS
                $newPost->comments = [];


                $posts[] = $newPost;
            }


            
            //5. retornar o resultado.
            return $posts;
        }
    
    }

?>
    