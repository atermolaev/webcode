<?php
    class Page {
        private $label;
        private $menuLabel;
        private $relatives;
        private $token;
        private $pageFunction;

        public function __construct($label, $menuLabel, $relatives, $token, $pageFunction){
            $this->label = $label;
            $this->menuLabel = $menuLabel;
            $this->relatives = $relatives;
            $this->token = $token;
            $this->pageFunction = $pageFunction;
        }

        public function init_options_page(){
            add_action('admin_menu', array($this, 'add_options_page'));
        }

        public function init_menu_page(){
            add_action('admin_menu', array($this, 'add_menu_page'));
        }

        public function add_options_page(){
            add_options_page(
                $this->label,
                $this->menuLabel,
                $this->relatives,
                $this->token,
                $this->pageFunction,
            );
        }

        public function add_menu_page(){
            add_menu_page(
                $this->label,
                $this->menuLabel,
                $this->relatives,
                $this->token,
                $this->pageFunction,
            );
        }

        public function form_start($action, $method){
            echo '<form action="'.$action.'" method="'.$method.'">';
        }

        public function form_end($saveValue){
            echo '<input type="submit" value="'.$saveValue.'" />';
            echo '</form>';
        }

        public function h1($str){
            echo '<h1>'.$str.'</h1>';
        }

        public function h2($str){
            echo '<h2>'.$str.'</h2>';
        }

        public function h3($str){
            echo '<h3>'.$str.'</h3>';
        }

        public function h4($str){
            echo '<h4>'.$str.'</h4>';
        }

        public function h5($str){
            echo '<h5>'.$str.'</h5>';
        }

        public function h6($str){
            echo '<h6>'.$str.'</h6>';
        }
    }
?>