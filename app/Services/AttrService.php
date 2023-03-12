<?php

namespace App\Services;

use App\Models\Attr;
use App\Services\BaseService;

class AttrService extends BaseService {

    private $attr;

    public function __construct() {
        $this->attr = new Attr();
    }

    public function getModel() {
        return $this->attr;
    }

    public function getAttrByProductId($id) {
        return $this->attr->where('product_id', $id)->get();
    }
    
}