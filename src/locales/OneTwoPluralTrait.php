<?php

trait OneTwoPluralTrait {
  public function selectPluralVariant($variant, $translations) {
    if ($variant === 1) {
        $choice = 0;
    } elseif ($variant === 2) {
        $choice = 1;
    } else {
        $choice = 2;
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