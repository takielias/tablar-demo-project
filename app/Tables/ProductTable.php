<?php

namespace App\Tables;

use App\Models\Product;
use Takielias\TablarKit\DataTable\DataTable;
use Takielias\TablarKit\Enums\ExportType;

class ProductTable extends DataTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDataSource(Product::select('id', 'product_name', 'product_code', 'product_price'))
            ->column(name: 'id', title: 'SN')
            ->column(name: 'product_name', title: 'Name', search: true)
            ->column(name: 'product_code', title: 'Code', search: true)
            ->column(name: 'product_price', title: 'Price', search: true)
            ->column(name: 'action', title: 'Action', callback: function ($item) {
                return view('common.action', ['item' => $item])->render();
            }, formatter: 'html')
            ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
            ->paginate(10);
    }

}
