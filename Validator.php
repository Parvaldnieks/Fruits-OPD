<?php

//Pure method - tapec static
class Validator {
    static public function string($data, $min = 0, $max = INF) {
        $data = trim($data);

        return is_string($data)
               && strlen($data) >= $min
               && strlen($data) <= $max;
            }

    static public function number($data, $min = 0, $max = INF) {
           $data = trim($data);

        return is_numeric($data)
               && strlen($data) >= $min
               && strlen($data) <= $max;
            }
    }