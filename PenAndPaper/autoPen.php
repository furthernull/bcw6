<?php
    require_once('pen.php');

    class AutoPen extends Pen {
        private bool $isOpen;

        public function __construct() {
            parent::__construct();
            $this->isOpen = false;
        }

        public function __toString(): string {
            return parent::__toString() . PHP_EOL 
            . 'is open: ' . ($this->isOpen ? 'true' : 'false');
        }

        public function prepare() {
            $this->isOpen = !$this->isOpen;
        }

        public function write(Paper $paper, string $message) {
            if (!$this->isOpen) {
                throw new Exception("Pen is closed");
            }
            parent::write($paper, $message);
        }
    }
?>
