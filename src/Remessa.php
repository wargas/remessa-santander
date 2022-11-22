<?php 

namespace App\Remessa;

use App\Remessa\Lines\LineAbstract;

class Remessa {
    
    private $lines = [];

    function addLines(LineAbstract $line) {
        $this->lines[] = $line;
        return $this;
    }

    function getText() {
        $arrayText = [];

        foreach($this->lines as $line) {
            $arrayText[] = $line->getLineText();
        }

        return implode("\n", $arrayText);
    }
}