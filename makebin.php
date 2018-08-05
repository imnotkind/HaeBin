<?php

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("only post");
}


$id = random_string(10);

shell_exec("mkdir ./b/".$id);
shell_exec("cp ./proto/* ./b/".$id."/");
header("Location: ./b/".$id);


?>