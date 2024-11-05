<?php
spl_autoload_register(function ($class){
    // Replace namespace separator with directory separator (/) in the class name
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    // List of directories to search for class files
    $dirs = [
        'app/config','app/controller','app/core','app/exceptions',
        'app/interfaces','app/models','app/services',
        'app/utils','app/views','public'
    ];
    
    foreach ($dirs as $dir) {
        // Construct full file path
        $filename = $dir . DIRECTORY_SEPARATOR . $class . '.php';
        
        // Check if file exists and include it
        if (file_exists($filename)) {
            include $filename;
            return;
        }
    }
});
