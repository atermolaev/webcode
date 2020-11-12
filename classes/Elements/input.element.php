<?php
    class Input {
        function __construct(){
            $this->drawInput();
        }

        public function drawInput(){
            echo '<input type="text" />';
        }
    }
?>