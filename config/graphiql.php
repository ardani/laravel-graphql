<?php

return [

    'paths' => [
        // Absolute path to public assets folder
        'assets' => public_path('vendor/graphiql'),
        // Url to the assets folder
        'assets_public' => 'vendor/graphiql',
        // Absolute path to views folder
        'views' => base_path('resources/views/vendor/graphiql'),
    ],

    'routes' => [
        // Path to send the graphql queries
        'graphql' => 'graphql/query',
        // Path to the graphiql ui
        'ui' => 'graphql-ui'
    ],

    'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json'
    ],
];
