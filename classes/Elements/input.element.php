<?php
    class Input {
        private $label;
        private $name;

        function __construct($name, $label){
            $this->label = $label;
            $this->name = $name;

            $this->drawInput();
        }

        public function drawInput(){
            if(array_key_exists($this->name, $_POST)) {
                $value = $_POST[$this->name];
                update_option($this->name, $value, '', 'yes');
            } else {
                $value = get_option($this->name);
            }

            echo '<div>';
            echo $this->label.':&nbsp;<input type="text" name="'.$this->name.'" value="'.$value.'" />';
            echo '</div>';
        }
    }
?>