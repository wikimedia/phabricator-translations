<?php

final class PhabricatorPhluxFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Mettre à jour la variable',
      'Variable value must be valid JSON.' => 'La valeur de la variable doit être du JSON valide.',
      'Lowercase letters, digits, dot and hyphen only.' => 'Lettres minuscules, chiffres, points ou tirets uniquement.',
      'Edit Variable: %s' => 'Modifier la variable: %s',
      'Key/Value Configuration Store' => 'Enregistrement de Clé/Valeur de configuration',
      'Variable "%s"' => 'Variable « %s »',
      'Phlux Variables' => 'Variables de Phlux',
      'Enter value as JSON.' => 'Saisir la valeur en JSON.',
      'Variable key must be unique.' => 'La clé de la variable doit être unique.',
      'Create Variable' => 'Créer une variable',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s a actualisé cette variable.',
      '%s created this variable.' => '%s a créé cette variable.',
      'Edit Variable' => 'Éditer une variable',
      'Variable List' => 'Liste de variables',
      'Variable key is required.' => 'La clé de la variable est requise.',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'La clé de variable « %s » ne doit contenir que des lettres minuscules, chiffres, point et tiret.',
    );
  }

}
