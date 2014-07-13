<?php

require 'system.php';

getFile('ArrayHandler','class');
getFile('Notes','class');

// read files
$notes = new Notes();

$notes->display();

//$file = new ArrayHandler();

$nowTime = strtotime("now");
$note[$nowTime] = array(
    'note'          => 'this is a note',
    'noteCreated'   => date("d m Y"),
    'actionBy'      => date("d m Y"),
    'done'          => 'no',
    'priority'      => 'normal'
    );

//ArrayHandler::save($note);
?>