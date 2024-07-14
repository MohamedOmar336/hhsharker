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
                'name_ar' => $product->name_ar,
                'name_en' => $product->name_en,
                'description_ar' => $product->description_ar,
                'description_en' => $product->description_en,
                'price' => $product->price,
                'qty' => $product->quantity,
                'state' => $product->is_available ? 'Yes' : 'No',
                'category' => $product->category ? $product->category->name_en : 'Uncategorized',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'image',
            'name_ar',
            'name_en',
            'description_ar',
            'description_en',
            'price',
            'qty',
            'state',
            'category',
        ];
    }
}
