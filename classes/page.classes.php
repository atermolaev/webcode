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
    }
?>