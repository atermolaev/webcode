<?php

    require('Elements/input.element.php');
    require('page.classes.php');


    class UiRoot {
        public $page;

        function __construct(){
            $this->page = new Page(
                'Settings',
                'Settings',
                'manage_options',
                'custom-admin-page',
                array($this, 'render'),
            );

            $this->page->init_menu_page();
        }

        public function render(){
            $this->page->form_start('', 'POST');

            $this->page->h1('Settings');

            $input = new Input('first', 'Настройка1');

            $this->page->form_end('Сохранить');
        }
    }
?>