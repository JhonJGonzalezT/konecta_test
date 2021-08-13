<?php
    class Connect{

        public static function Connection(){
            return new mysqli("localhost", "root", "Root-123", "konectatest");
        }

    }