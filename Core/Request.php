<?php

namespace Core;

class Request
{
    public function get($key, $default = null, $prefix = null)
    {
        return isset($_GET[$key])
            ? ($prefix ?: null) . $_GET[$key]
            : $default;
    }

    public function post($key, $default = null, $prefix = null)
    {
        return isset($_POST[$key])
            ? ($prefix ?: null) . $_POST[$key]
            : $default;
    }

    public function All()
    {
        return $_POST;
    }
}
