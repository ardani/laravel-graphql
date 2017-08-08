<?php

use App\GraphQL\Mutation\NewUserMutation;
use App\GraphQL\Mutation\UpdateUserMutation;
use App\GraphQL\Query\MyProfileQuery;
use App\GraphQL\Query\ProductsQuery;
use App\GraphQL\Query\UsersQuery;
use App\GraphQL\Type\MyProfileType;
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
                'myProfile' => MyProfileQuery::class,
            ],
            'mutation' => [
                'newUser' => NewUserMutation::class,
                'updateUser' => UpdateUserMutation::class
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
        'myprofile'  => MyProfileType::class
    ],
    'error_formatter' => ['\Rebing\GraphQL\GraphQL', 'formatError'],
    'params_key'    => 'params'
];
