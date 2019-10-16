<?php

namespace FirBuilder;

class FirBuilder
{
    private $defaultChar = '*';

    public function getFir(int $size, string $char = null): string
    {
        if (!$char) {
            $char = $this->defaultChar;
        }

        $result = '';

        for($i = 1; $i <= $size; $i++) {
            $result .= $this->repeat($size-$i,' ') . $this->repeat($i*2-1, $char) . $this->repeat($size-$i,' ') . "\n";
        }

        $result .= $this->repeat($size-1,' ') . $char . $this->repeat($size-1,' ') ;

        return $result;
    }

    public function setDefaultChar(string $char): void
    {
        $this->defaultChar = $char;
    }

    public function repeat(int $number, string $char): string
    {
        return str_repeat($char , $number);
    }
}