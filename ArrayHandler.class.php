<?php

class ArrayHandler {

    var $file = "savednotes.php";
    
    function __construct() {
        $this->activeFile = unserialize(file_get_contents($this->file));
    }
    
    static function save($notes) {
        file_put_contents($this->file, serialize($notes));
        
    }
    
    function get() {
        return $this->activeFile;
    }

}