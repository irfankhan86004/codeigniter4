<?php

namespace App\Models;

class Images_model extends Models {

    protected $table = null;

    function __construct() {
        $this->table = 'images';
        parent::__construct($this->table);
    }
}
