<?php
namespace myMvc\Controllers;

use myMvc\Services\View;
use myMvc\Models\ArticleModel;

    class ArticleController {
        
        private $ArticleModel;
        
        /**
         * [__construct description]
         */
        public function __construct() {
            $this->ArticleModel = new ArticleModel();
        }
        
        /**
         * [index description]
         * @return [type] [description]
         */
        public function index () {
            $articles = $this->ArticleModel->fetchAll();
            
            View::setView('views/article/index.php', array('articles' => $articles));
        }
        
        public function show ($id) {
            $article = $this->ArticleModel->fetch($id);
            
            View::setView('views/article/show.php', compact('article'));
        }
        
        public function edit ($id) {
            $article = $this->ArticleModel->fetch($id);

            View::setView('views/article/edit.php', compact('article'));
        }
        
        public function update ($id) {
            $article = $this->ArticleModel->update($id);
            
            header('location: //localhost/myMvc_v2/public/articles/' . $article);
            echo "article has been updated";
        }
        
        public function create () {
            View::setView('views/article/create.php', compact('article'));
        }
        
        public function insert () {
            $title = $_POST['title'];
            $body = $_POST['body'];
            
            $article = $this->ArticleModel->create($title,$body);
            
            header('location: //localhost/myMvc_v2/public/articles/' . $article);
            echo "Article created";
        }
        
        public function delete () {
            $article = $this->ArticleModel->delete($id);
        }
    }


