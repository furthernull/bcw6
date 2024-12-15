<?php
    class Paper {
        private int $maxSymbols;
        private string $content;

        public function _construct(int $maxSymbols = 1024) {
            $this->maxSymbols = maxSymbols;
            $this->content = NULL;
        }

        public function _toString() {
            return 'Paper: (' . strlen($this->content) . '/' . $this->maxSymbols . ')';
        }

        public function _addContent(string $message) {
            $availableSymbol = $this->maxSymbols - strlen($this->content);

            if ( $availableSymbol == 0 ) {
                throw new Exception("Out of space");
            }

            if ( strlen($message) > availableSymbol ) {
                $this->content .= substr($message, 0, availableSymbol);
                throw new Exception("Out of space");
            }
            $this->content .= $message;
        }

        public function _show() {
            echo $this->content . PHP.EOL;
        }
    }
?>
