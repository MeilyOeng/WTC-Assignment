<?php
    class a
    {
        public function greet(){
            echo "Hi";

        }
    }

    trait b
    {
        public function greet(){
            echo "Hello";
        }
    }

    class sub extends a{
        use b;
        public function name(){
            echo " Lily";
        }
    }
    
    $ob = new sub();
    $ob->greet();
    $ob->name();
?>