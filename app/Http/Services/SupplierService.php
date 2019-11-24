<?php


namespace App\Http\Services;


use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierService
{

    public function getSupplier($supplier){
        return Supplier::all()->find($supplier);
    }

    public function getAllSuppliers(){
        return Supplier::orderBy('name')->get();
    }

    public function getSuppliersAndPRoductsByStore(){
        $suppliers = Supplier::with('products')->get();
        return $suppliers;
    }
}
