<?php
class SyntaxChecker {
    private $code;

    public function __construct($code) {
        $this->code = $code;
    }

    public function isCorrect() {
        $array = str_split($this->code);
        $counter = 0;

        foreach ($array as $char) {
            if ($char === '{') {
                $counter++;
            } elseif ($char === '}') {
                if ($counter === 0) {
                    return false;
                }
                $counter--;
            }
        }

        return $counter === 0;
    }
}
?>