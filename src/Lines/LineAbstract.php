<?php

namespace App\Remessa\Lines;

use App\Remessa\Campo;

abstract class LineAbstract {
    var $campos = [];

    function addCampo($value, $type, $size) {
        $campo =  new Campo($value, $type, $size);
        $this->campos[] = $campo;
    }

    function getLineText() {
        $text = '';
        foreach($this->campos as $campo) {
            $text .= $campo->getFormatedValue();
        }

        return $text;
    }

    abstract function build();

}