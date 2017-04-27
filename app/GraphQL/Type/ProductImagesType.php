<?php

namespace App\GraphQL\Type;

use App\ProductImage;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductImagesType extends GraphQLType
{
    protected $attributes = [
        'name' => 'ProductImages',
        'description' => 'A type product images',
        'model' => ProductImage::class
    ];

    public function fields()
    {
        return [
            'product_id' => [
                'type' => Type::int(),
                'description' => 'The product id of product'
            ],
            'image' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The image of product'
            ]
        ];
    }
}
