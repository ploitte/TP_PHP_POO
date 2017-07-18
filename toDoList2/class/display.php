<?php

    class Display{ // Class utilitaire
 
        public static function move( $msg ){
            echo "<p style = 'color: green'> . $msg . </p>";
        }

        public static function fight( $msg ){
            echo "<p style = 'color: red'> . $msg . </p>";
        }

        public static function train( $msg ){
            echo "<p style = 'color: blue'> . $msg . </p>";
        }
    }

?>