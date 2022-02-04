<?php

class Validation {

    public function validateText( string $input ) : bool {
        
        $returnvalue = true;

        if ( empty( trim( $input ))) {
            $returnvalue = false;
        }

        return $returnvalue;
    }

    public function validateUsername( string $input ) : bool {
        require('../db/db.php');

        $returnvalue = true;

        $sql = "SELECT * FROM user WHERE username = '$input';";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            $returnvalue = false;
        }

        return $returnvalue;
    }
    
}