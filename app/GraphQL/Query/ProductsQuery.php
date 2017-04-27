<?php

namespace App\GraphQL\Query;

use App\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class ProductsQuery extends Query
{
    protected $attributes = [
        'name' => 'Products Query',
        'description' => 'A query of product'
    ];

    public function type()
    {
        return GraphQL::paginate('products');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::string()
            ],
            'title' => [
                'name' => 'title',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        $where = function ($query) use ($args) {
            if (isset($args['id'])) {
                $query->where('id',$args['id']);
            }

            if (isset($args['title'])) {
                $query->where('title','like','%'.$args['email'].'%');
            }
        };
        $with = array_keys($fields->getRelations());
        return Product::with($with)
            ->where($where)
            ->select($fields->getSelect())->paginate();
    }
}
