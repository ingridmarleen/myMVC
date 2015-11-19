<?php
namespace myMvc\Models;

use myMvc\Services\Database;

    class ArticleModel {

        public function __construct () {

        }

        /**
         * [getArray description]
         * @return [type] [description]
         */
        public function fetchAll() {

            $sql = "SELECT * FROM article";
            $stmt = Database::conn()->prepare($sql);
            $stmt->execute();

            $collection = $stmt->fetchAll();

            return $collection;
            
        }

        /**
         * [getRow description]
         * @param  [type] $id [description]
         * @return [type]     [description]
         */
        public function fetch($id) {

            $sql = "SELECT * FROM article WHERE id = :id";
            $stmt = Database::conn()->prepare($sql);
            $stmt->bindparam(":id", $id); 
            $stmt->execute();

            # Fetch all records into an array
            $row = $stmt->fetch();

            return $row;
            
        }

        /**
         * [insert description]
         * @param  [type] $input [description]
         * @return [type]        [description]
         */
        public function create($title,$body) {

            $sql = "INSERT INTO article (title, body) VALUES (:title, :body)";
            $stmt = Database::conn()->prepare($sql);

            $stmt->bindparam(":title", $title);
            $stmt->bindparam(":body", $body);
            
            $stmt->execute();
            
            return "Article created";
            
        }

        /**
         * [update description]
         * @param  [type] $input [description]
         * @return [type]        [description]
         */
        public function update ($id) {

            $sql = "UPDATE article SET title = :title, body = :body WHERE id = :id";
            $stmt = Database::conn()->prepare($sql);
            
            $title = $_POST['title'];
            $body = $_POST['body'];
            
            $stmt->bindparam(":id", $id);
            $stmt->bindparam(":title", $title);
            $stmt->bindparam(":body", $body);
            
            $stmt->execute();
            
            return "Article updated";
            
        }

        /**
         * [delete description]
         * @param  [type] $id [description]
         * @return [type]     [description]
         */
        public function delete ($id) {

            $stmt = Database::conn()->prepare("DELETE FROM article WHERE id=:id");
            $stmt->bindparam(":id",$id);
            $stmt->execute();
            return true;

        }
    }