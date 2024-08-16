<?php

namespace App\Http\Controllers\Product;

use App\Adapters\Product\ExportIA;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class ProductExportController extends Controller
{
    public function create()
    {
        $products = Product::with('category')->get()->sortBy('product_name');

        $product_array[] = array(
            'Product Name',
            'Product Slug',
            'Category Id',
            'Unit Id',
            'Product Code',
            'Stock',
            "Stock Alert",
            'Buying Price',
            'Selling Price',
            'Product Image',
            "Note"
        );

//        foreach ($products as $product) {
//            $product_array[] = array(
//                'Product Name' => $product->name,
//                'Product Slug' => $product->slug,
//                'Category Id' => $product->category_id,
//                'Unit Id' => $product->unit_id,
//                'Product Code' => $product->code,
//                'Stock' => $product->quantity,
//                "Stock Alert" => $product->quantity_alert,
//                'Buying Price' => $product->buying_price,
//                'Selling Price' => $product->selling_price,
//                'Product Image' => $product->product_image,
//                "Note" => $product->note
//            );
//        }

        $this->store($products);
    }

    public function store($products)
    {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '4000M');

        try {
//            $spreadSheet = new Spreadsheet();
//            $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
//            $spreadSheet->getActiveSheet()->fromArray($products);
//            $Excel_writer = new Xls($spreadSheet);
            header('Content-Type: application/txt');
            header('Content-Disposition: attachment;filename="products.txt"');
            header('Cache-Control: max-age=0');
//            ob_end_clean();
//            $Excel_writer->save('php://output');
//            print(ExportIA::export($products));
            file_put_contents('php://output', ExportIA::export($products));
            exit();
        } catch (Exception $e) {
            return;
        }
    }
}
