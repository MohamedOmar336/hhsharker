<?php
namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::all()->map(function($product) {
            return [
                'image' => $product->image_url,
                'product_name_ar' => $product->product_name_ar,
                'product_name_en' => $product->product_name_en,
                'product_description_ar' => $product->product_description_ar,
                'product_description_en' => $product->product_description_en,
                'status' => $product->status,
                'category' => $product->category ? $product->category->name_en : 'Uncategorized',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'image',
            'product_name_ar',
            'product_name_en',
            'product_description_ar',
            'product_description_en',
            'status',
            'category',
        ];
    }
}
