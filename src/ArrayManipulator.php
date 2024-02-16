<?php

namespace Marejeo\Opensource;

use Arrayy\ArrayyRewindableExtendedGenerator;
use Arrayy\Arrayy;

class ArrayManipulator {

    use ArrayyRewindableExtendedGenerator;

    public $arraye;

    public $arrayi;

    public function __construct() {
        $this->arraye = new Arrayy();
        $this->arrayi = new ArrayyRewindableExtendedGenerator();
    }

    public function __destruct() {
        $this->arraye = null;
        $this->arrayi = null;
    }
}