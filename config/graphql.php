<?php
use App\GraphQL\Query\ProductsQuery;
use App\GraphQL\Query\UsersQuery;
use App\GraphQL\Type\ProductImagesType;
use App\GraphQL\Type\ProductsType;
use App\GraphQL\Type\UserProfilesType;
use App\GraphQL\Type\UsersType;

return [
    'prefix' => 'graphql',
    'routes' => 'query/{graphql_schema?}',
    'controllers' => \Rebing\GraphQL\GraphQLController::class . '@query',
    'middleware' => [],
    'default_schema' => 'default',
    // register query
    'schemas' => [
        'default' => [
            'query' => [
                'users' => UsersQuery::class,
                'products' => ProductsQuery::class,
            ],
            'mutation' => [
            ],
            'middleware' => []
        ],
    ],
    // register types
    'types' => [
        'product_images' => ProductImagesType::class,
        'products'  => ProductsType::class,
        'user_profiles'  => UserProfilesType::class,
        'users'  => UsersType::class,
    ],
    'error_formatter' => ['\Rebing\GraphQL\GraphQL', 'formatError'],
    'params_key'    => 'params'
];
