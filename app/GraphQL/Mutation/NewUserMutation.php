<?php
/**
 * Created by PhpStorm.
 * User: ardani
 * Date: 8/4/17
 * Time: 10:02 AM
 */

namespace App\GraphQL\Mutation;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;
use App\User;

class NewUserMutation extends Mutation
{
    protected $attributes = [
        'name' => 'NewUser'
    ];

    public function type()
    {
        return GraphQL::type('users');
    }

    public function args()
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string())
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::nonNull(Type::string())
            ],
            'password' => [
                'name' => 'password',
                'type' => Type::nonNull(Type::string())
            ],
            'first_name' => [
                'name' => 'first_name',
                'type' => Type::nonNull(Type::string())
            ],
            'last_name' => [
                'name' => 'last_name',
                'type' => Type::string()
            ],
            'avatar' => [
                'name' => 'avatar',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $args['password'] = bcrypt($args['password']);
        $user = User::create($args);
        if (!$user) {
            return null;
        }

        $user->user_profiles()->create($args);
        return $user;
    }
}
