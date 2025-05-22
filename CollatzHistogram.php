<?php
include_once "Collatz.php";

class CollatzHistogram extends Collatz {

    private array $histogram = [];

    public function generateHistogram(): void {
        for ($i = $this->start; $i <= $this->end; $i++) {
            $iterations = $this->getIterations($i);
            if (!isset($this->histogram[$iterations])) {
                $this->histogram[$iterations] = 0;
            }
            $this->histogram[$iterations]++;
        }
    }

    public function printHistogram(): void {
        ksort($this->histogram);
        echo "<h3>Collatz iteracijų histograma</h3>";
        echo "<strong>Iteracija ; Dažnis</strong><br>";
        foreach ($this->histogram as $iteration => $frequency) {
            echo "$iteration ; $frequency<br>";
        }
    }

    public function getHistogram(): array {
        return $this->histogram;
    }
}
