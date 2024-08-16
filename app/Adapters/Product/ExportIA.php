<?php

namespace App\Adapters\Product;

use App\Models\Product;

class ExportIA
{
    /** @param $products [Product] */
    public static function export($products)
    {
        $content = "(Categoria) (modelo) \n";
        /** $product Product */
        foreach ($products as $product) {
            $content .= "{$product->category->name} $product->name R$ $product->selling_price \n";
        }

        return $content;
    }
}
