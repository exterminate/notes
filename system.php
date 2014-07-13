<?php

function getFile($file, $type) {
    require $file.".".$type.".php";
}