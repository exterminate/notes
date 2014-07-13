<?php

class Notes {

    public function __construct() {
        $this->notes = new ArrayHandler();
    }
    
    function display() {
        foreach ($this->notes->get() as $key => $note) {
            $this->note = $note['note'];
            $this->actionBy = $note['actionBy'];
        }
    }

}