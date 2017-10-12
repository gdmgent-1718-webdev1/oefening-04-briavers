<?php

function getTyping($watIs){
    return "de waarde is ". gettype($watIs);
};

    echo getTyping("test"),PHP_EOL;
    echo getTyping(true),PHP_EOL;
    echo getTyping(2.7),PHP_EOL;
    echo getTyping(2),PHP_EOL;
    echo getTyping(['lol', 'hoop']),PHP_EOL;

