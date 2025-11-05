<?php
    class CategoriaController {

        public function index($id, $img) {
            require "../views/categoria/index.php";
        }

        public function frutas($id, $img) {
            require "../views/categoria/frutas.php";
        }

        public function legumes($id, $img) {
            require "../views/categoria/legumes.php";
        }

    }