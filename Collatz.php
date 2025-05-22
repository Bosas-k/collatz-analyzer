<?php

class Collatz {
    protected int $start;
    protected int $end;

    const AUTHOR = "Ignas";
    const VERSION = "1.0";

    public function __construct(int $start, int $end = null) {
        $this->start = $start;
        $this->end = $end ?? $start;
    }

    public function getSequence(int $n): array {
        $sequence = [$n];
        while ($n !== 1) {
            $n = ($n % 2 === 0) ? $n / 2 : 3 * $n + 1;
            $sequence[] = $n;
        }
        return $sequence;
    }

    public function getIterations(int $n): int {
        return count($this->getSequence($n)) - 1;
    }
}
