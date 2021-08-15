<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends ModelsCategory
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function allProducts()
    {
        $productsCollecton = collect([]);
        $mainCategoryProducts = $this->products;
        $productsCollecton = $productsCollecton->concat($mainCategoryProducts);
        if($this->children->isNotEmpty()) {
            foreach($this->children as $child) {
                $productsCollecton = $productsCollecton->concat($child->products);
            }
        }
        return $productsCollecton;
    }
}
