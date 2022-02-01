<?php

function get_template($template, $data = []) {
    ob_start();

    extract($data);
    include($template);

    $out = ob_get_contents();

    ob_end_clean();
    return $out;
}