<?php

    require('Elements/input.element.php');
    require('page.classes.php');


    class UiRoot {

        function __construct(){
            $page = new Page(
                'Settings',
                'Settings',
                'manage_options',
                'custom-admin-page',
                array($this, 'render'),
            );

            $page->init();
        }

        public function render(){
            $input = new Input();
        }
    }
?>