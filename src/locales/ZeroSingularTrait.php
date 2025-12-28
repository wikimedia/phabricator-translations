<?php

trait ZeroSingularTrait {

  public function selectPluralVariant($variant, $translations) {
    if ($variant == 0 || $variant === 1) {
        return reset($translations);
    } else {
        return end($translations);
    }
  }
}