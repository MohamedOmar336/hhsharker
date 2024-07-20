<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'type' => $row['type'],
            'product_name_ar' => $row['product_name_ar'],
            'product_name_en' => $row['product_name_en'],
            'product_description_ar' => $row['product_description_ar'],
            'product_description_en' => $row['product_description_en'],
            'category_id' => $row['category_id'],
            'subcategory_id' => $row['subcategory_id'],
            'model_number' => $row['model_number'],
            'status' => $row['status'],
            'catalog' => $row['catalog'],
            'image' => $row['image'],
            'characteristics_en' => json_encode($row['characteristics_en']),
            'characteristics_ar' => json_encode($row['characteristics_ar']),
            'optional_features_ar' => $row['optional_features_ar'],
            'optional_features_en' => $row['optional_features_en'],
            'best_selling' => $row['best_selling'],
            'featured' => $row['featured'],
            'recommended' => $row['recommended'],
            'hp_dimensions_volume_en' => $row['hp_dimensions_volume_en'],
            'hp_dimensions_volume_ar' => $row['hp_dimensions_volume_ar'],
            'color' => $row['color'],
            'power_supply' => $row['power_supply'],
            'type_freon' => $row['type_freon'],
            'technical_specifications' => $row['technical_specifications'],
            'saso_certificate' => $row['saso_certificate'],
        ]);
    }
}
