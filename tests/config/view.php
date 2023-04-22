<?php

return [
    "engine" => "blade",
    "extension" => ".blade.php",
    "cache" => sys_get_temp_dir(),
    "path" => realpath(__DIR__ . "/../views")
];
