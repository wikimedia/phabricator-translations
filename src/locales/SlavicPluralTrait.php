<?php
trait SlavicPluralTrait {
    public function selectPluralVariant($variant, array $translations) {
        $mh = $variant % 100;
        if ($mh > 10 && $mh < 20) {
            $choice = 2;
        } else {
            switch($variant % 10) {
                case 1:
                    $choice = 0;
                    break;
                case 2:
                case 3:
                case 4:
                    $choice = 1;
                    break;
                default:
                    $choice = 2;
            }
        }
        if (!isset($translations[$choice])) {
            // This shouldn't happen, but don't crash if a translator
            // enters the wrong number of plural forms
            return end($translations);
        } else {
            return $translations[$choice];
        }
    }
}