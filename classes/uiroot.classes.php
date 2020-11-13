<?php

    require('Elements/input.element.php');
    require('page.classes.php');


    class UiRoot {

        function __construct(){
            $settingsPage = new Page(
                'Settings',
                'Settings',
                'manage_options',
                'custom-admin-page',
                array($this, 'render'),
            );

            $settingsPage->init_menu_page();
        }

        public function render(){
            ?>
                <h1>Settings</h1>
                <div style="padding: 25px 0">Текст: 
            <?
                $input = new Input();
            ?>
                </div>
            <?
        }
    }
?>