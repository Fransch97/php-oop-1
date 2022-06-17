<?php

    class Movie{
        private $title;
        private $genre;
        private $release_date;
        private $actors;
        private $studio;
        private $likes;
        
        public function __construct($_title,$_genre,$_release_date,$_studio, $_likes = 0)
        {
            $this->setTitle($_title);
            $this->setGenre($_genre);
            $this->setReleaseDate($_release_date);
            $this->setStudio($_studio);
            $this->setLikes($_likes);
        }

        // SETTER
        public function setTitle($X_title){
            $this->title = $X_title;
        }
        public function setGenre($X_genre){
            $this->genre = $X_genre;
        }
        public function setReleaseDate($X_release_date){
            $this->release_date = $X_release_date;
        }
        public function setActor($X_actor){
            $this->actors = $X_actor;
        }
        public function setStudio($X_studio){
            $this->studio = $X_studio;
        }
        public function setLikes($X_likes){
            $this->likes = $X_likes;
        }
        public function setIncrementLikes($X_increment = 1){
            $this->likes += $X_increment;
        }
    
        // GETTER
        public function getAllData(){
            $data = [
                'title'=>$this->getTitle(),
                'genre'=>$this->getGenre(),
                'release_date'=>$this->getReleaseDate(),
                'actors'=>$this->getActor(),
                'studio'=>$this->getStudio(),
                'likes'=>$this->getLikes()
            ];
            return $data;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function getReleaseDate(){
            return $this->release_date;
        }
        public function getActor(){
            return $this->actors ;
        }
        public function getStudio(){
            return $this->studio;
        }
        public function getLikes(){
            return $this->likes;
        }
       
    
    }
?>