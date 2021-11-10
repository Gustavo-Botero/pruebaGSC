<?php

namespace Database\Seeders;

use App\Models\AmountModel;
use Illuminate\Database\Seeder;

class AmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fAmount = database_path('json/amount.json');
        $jAmount = file_get_contents($fAmount);

        foreach (json_decode($jAmount) as $row) {
            AmountModel::create([
                'product_model_id' => $row->product_model_id,
                'amount' => $row->amount
            ]);
        }
    }
}
