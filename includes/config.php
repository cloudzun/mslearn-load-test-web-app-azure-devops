<?php

/**
 * Web app configuration
 */
function config($key = '')
{
    $config = [
        'name' => 'Contoso Costume Rentals',
        'app_url' => 'https://contosorentalsapp10739.azurewebsites.net',
		'graphics'=> false,
    ];

    return isset($config[$key]) ? $config[$key] : null;
}

?>
