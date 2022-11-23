<?php 

namespace App\Remessa;

use App\Remessa\Lines\LineAbstract;

class Remessa {
    
    public $lines = [];

    function addLine(LineAbstract $line) {
        $line->build();
        $this->lines[] = $line;
        return $this;
    }

    function addLines(...$lines) {
        foreach($lines as $line) {
            $this->addLine($line);
        }
        return $this;
    }

    function getText() {
        $arrayText = [];

        foreach($this->lines as $line) {
            $arrayText[] = $line->getLineText();
        }

        return implode("\r\n", $arrayText);
    }
}