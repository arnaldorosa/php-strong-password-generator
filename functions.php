<?php 
    
    function generate_password($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = "";
    
        for ($i = 0; $i < $length; $i++) {
            $random_index = random_int(0, strlen($chars) - 1);
            $password .= $chars[$random_index];
        }
        return $password;
    }

?>