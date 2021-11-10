<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fProduct = database_path('json/product.json');
        $jProduct = file_get_contents($fProduct);

        foreach(json_decode($jProduct) as $row) {
            ProductModel::create([
                'name' => $row->name,
                'image' => $row->image,
                'value' => $row->value
            ]);
        }
    }
}
