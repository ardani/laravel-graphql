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
        $with = array_keys($fields->getRelations());
        return Product::with($with)
            ->select($fields->getSelect())->paginate();
    }
}
