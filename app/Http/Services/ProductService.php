<?php


namespace App\Http\Services;


use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductService
{
    public function getProductBySupplier($supplier){
        return $products = Product::all()->find('store_id', $supplier);
    }

    public function getProductByStore($store){
        return $products = Product::all()->find('store_id', $store);
    }

    public function getProductBySupplierAndStore($supplier ,$store){
        $products =  DB::table('stocks')
            ->select('products.name',
                'products.description',
                'products.picture',
                'stocks.active',
                'stocks.quantity',
                'stocks.price',
                'suppliers.name as supplier_name',
                'suppliers.phone as supplier_phone',
                'suppliers.email as supplier_email',
                'suppliers.active as supplier_active',
                'suppliers.logo as supplier_logo'
            )
            ->join('stores', 'stores.id', '=', 'stocks.store_id')
            ->join('products', 'products.id', '=', 'stocks.product_id')
            ->join('suppliers', 'suppliers.id', "=", "products.supplier_id")
            ->where([['suppliers.id', "=", $supplier], ['stores.id', "=", $store] ])->get();
        return $products;
    }


}
