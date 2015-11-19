<?php
namespace myMvc\Controllers;

use myMvc\Services\View;
use myMvc\Models\UserModel;

    class UserController {
        
        private $UserModel;
        
        /**
         * [__construct description]
         */
        public function __construct() {
            $this->UserModel = new UserModel();
        }
        
        /**
         * [index description]
         * @return [type] [description]
         */
        public function index () {
            $users = $this->UserModel->getArray();
            
            View::setView('views/user/index.php', array('users' => $users));
        }
        
        public function show ($id) {
            $user = $this->UserModel->getRow($id);
            
            View::setView('views/user/show.php', compact('user'));
        }
        
        public function edit ($id) {
            $user = $this->UserModel->getRow($id);

            View::setView('views/user/edit.php', compact('user'));
        }
        
        public function update ($id) {
            $user = $this->UserModel->update($id);
            
            View::setView('views/user/1.php', compact('user'));
            echo "user has been updated";
        }

        public function create () {
            View::setView('views/user/create.php');          
        }
        
        public function insert() {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $user = $this->UserModel->register($name,$email,$username,$password);
        }
        public function delete () {
            $user = $this->UserModel->delete($id);
        }
    }


