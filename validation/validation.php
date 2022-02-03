<?php

class Validation {

    public function validateText( string $input ) : bool {
        
        $returnvalue = true;

        if ( empty( trim( $input ))) {
            $returnvalue = false;
        }

        return $returnvalue;
    }
    
}