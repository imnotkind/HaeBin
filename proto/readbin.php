<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents('./log.json','[]');
    echo "cleared!";
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo file_get_contents("./log.json");
}

