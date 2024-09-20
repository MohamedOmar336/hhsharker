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
            'product_name_en' => $row['product_name_en'],
            'product_name_ar' => $row['product_name_ar'],
            'model_number' => $row['model_number'],
            'product_option_title' => $row['product_option_title'],
            'product_option_list' => json_encode($row['product_option_list']), // Assuming JSON format
            'main_option' => $row['main_option'],
            'feature_title_en' => $row['feature_title_en'],
            'feature_description_en' => $row['feature_description_en'],
            'feature_icon_en' => $row['feature_icon_en'],
            'feature_title_ar' => $row['feature_title_ar'],
            'feature_description_ar' => $row['feature_description_ar'],
            'feature_icon_ar' => $row['feature_icon_ar'],
            'characteristics_en' => $row['characteristics_en'],
            'characteristics_description_en' => $row['characteristics_description_en'],
            'characteristics_icon_en' => $row['characteristics_icon_en'],
            'characteristics_ar' => $row['characteristics_ar'],
            'characteristics_description_ar' => $row['characteristics_description_ar'],
            'characteristics_icon_ar' => $row['characteristics_icon_ar'],
            'technical_specification' => $row['technical_specification'],
            'saso' => $row['saso'],
            'product_image' => $row['product_image'],
            'group' => $row['group'],
            'category' => $row['category'],
            'sub_category' => $row['sub_category'],
            'child' => $row['child'],
            'sub_child' => $row['sub_child'],
            'status' => $row['status'],
            'best_selling' => $row['best_selling'] ? 1 : 0,
            'featured' => $row['featured'] ? 1 : 0,
            'recommened' => $row['recommened'] ? 1 : 0,
            'title_tag_en' => $row['title_tag_en'],
            'title_tag_ar' => $row['title_tag_ar'],
            'meta_description_en' => $row['meta_description_en'],
            'meta_description_ar' => $row['meta_description_ar'],
            'product_schema_en' => json_encode($row['product_schema_en']), // Assuming JSON format
            'product_schema_ar' => json_encode($row['product_schema_ar']), // Assuming JSON format
        ]);
    }
}
