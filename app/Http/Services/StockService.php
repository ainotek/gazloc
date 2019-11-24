<?php


namespace App\Http\Services;


use App\Models\Stock;

class StockService
{
    public function getStockProductAndSupplier(){
        return Stock::with('products')->get();
    }
}
