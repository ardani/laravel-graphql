<?php

namespace App\GraphQL\Type;

use App\UserProfile;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserProfilesType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Profile',
        'description' => 'A type',
        'model' => UserProfile::class
    ];

    public function fields()
    {
        return [
            'avatar' => [
                'type' => Type::string(),
                'description' => 'The avatar of user'
            ],
            'first_name' => [
                'type' => Type::string(),
                'description' => 'The first name of user'
            ],
            'last_name' => [
                'type' => Type::string(),
                'description' => 'The last name of user'
            ]
        ];
    }
}
