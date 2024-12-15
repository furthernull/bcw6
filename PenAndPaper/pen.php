<?php
    require_once("paper.php");

    class Pen {
        private int $symbols;
        private int $maxSymbols;

        public function __construct(int $maxSymbols = 4096) {
            $this->symbols = $maxSymbols;
            $this->maxSymbols = $maxSymbols;
        }

        public function __toString(): string {
            return 'Pen: (' . $this->symbols . '/' . $this->maxSymbols . ')';
        }

        public function write(Paper $paper, string $message) {
            if ( $this->symbols == 0 ) {
                throw new Exception("Out of ink");
            }
            if ( strlen($message) > $this->symbols ) {
                $paper->addContent(substr($message, 0, $this->symbols));
                $this->symbols = 0;
                throw new Exception("Out of ink");
            }
            $paper->addContent($message);
            $this->symbols -= strlen($message);
        }
    }

    $pen = new Pen();
    $paper = new Paper();

    echo $pen . PHP_EOL;
    echo $paper . PHP_EOL;

    $pen->write($paper, "Hello, world");

    echo $pen . PHP_EOL;
    echo $paper . PHP_EOL;
?>
