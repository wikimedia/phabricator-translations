<?php

final class PhabricatorSpacesSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  '%s updated the space description for %s.' => '%s aktualizoval popis priestoru %s.',
  '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Táto chyba zvyčajne znamená, že %s je zapnuté, ale neexistujú žiadne priestory so zásadou zobrazenia „%s“. Tieto nastavenia si protirečia a naznačujú nesprávnu konfiguráciu.)',
  'Spaces User Guide' => 'Používateľská príručka k priestorom',
  'Hide Active Spaces' => 'Skryť aktívne priestory',
  '%s updated the space description.' => '%s aktualizoval popis priestoru.',
  '%s archived space %s.' => '%s archivoval priestor %s.',
  'PHID of the policy space this object is part of.' => 'PHID priestoru zásad, do ktorého tento objekt patrí.',
  'Default edit policy for newly created spaces.' => 'Predvolená zásada úpravy pre novovytvorené priestory.',
  'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Predvoleným priestorom môže byť iba prvý vytvorený priestor a musí ním zostať navždy.',
  'Search for objects in certain spaces.' => 'Vyhľadať objekty v určitých priestoroch.',
  'Activate Space: %s' => 'Aktivovať priestor: %s',
  'Support for Spaces' => 'Podpora priestorov',
  '%s renamed space %s from %s to %s.' => '%s premenoval priestor %s z %s na %s.',
  'Create a Space' => 'Vytvoriť priestor',
  '%s activated this space.' => '%s aktivoval tento priestor.',
  'Archive Space: %s' => 'Archivovať priestor: %s',
  'Spaces must have a name.' => 'Priestory musia mať názov.',
  'Existing objects in this Space will be hidden from query results by default.' => 'Existujúce objekty v tomto priestore budú vo výsledkoch dopytov predvolene skryté.',
  '%s made this the default space.' => '%s nastavil tento priestor ako predvolený.',
  '%s archived this space.' => '%s archivoval tento priestor.',
  'Type a space name...' => 'Zadajte názov priestoru...',
  'Existing objects will no longer be hidden from query results.' => 'Existujúce objekty už nebudú vo výsledkoch dopytov skryté.',
  'You do not have permission to create spaces.' => 'Nemáte oprávnenie vytvárať priestory.',
  'Ask someone to give you access to a space so you can view and create objects.' => 'Požiadajte niekoho, aby vám udelil prístup k priestoru, aby ste mohli zobrazovať a vytvárať objekty.',
  'Default Space' => 'Predvolený priestor',
  'Archive Space' => 'Archivovať priestor',
  'CHANGES TO SPACE DESCRIPTION' => 'ZMENY POPISU PRIESTORU',
  'Default view policy for newly created spaces.' => 'Predvolená zásada zobrazenia pre novovytvorené priestory.',
  'Spaces' => 'Priestory',
  'Drift Aimlessly' => 'Bezcieľne sa unášať',
  'Browse Spaces' => 'Prehliadať priestory',
  'Can Create Spaces' => 'Môže vytvárať priestory',
  'All Spaces' => 'Všetky priestory',
  'Control access to groups of objects.' => 'Riadenie prístupu k skupinám objektov.',
  'If you activate this space, you will be able to create objects inside it again.' => 'Ak tento priestor aktivujete, budete v ňom opäť môcť vytvárať objekty.',
  'Create Space' => 'Vytvoriť priestor',
  'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Prihláste sa alebo požiadajte niekoho, aby vytvoril verejný priestor, ku ktorému majú prístup odhlásení používatelia.',
  'Policy Namespaces' => 'Menné priestory zásad',
  '%s activated space %s.' => '%s aktivoval priestor %s.',
  '%s created this space.' => '%s vytvoril tento priestor.',
  'Space %s: %s' => 'Priestor %s: %s',
  'No Access to Spaces' => 'Žiadny prístup k priestorom',
  '%s renamed this space from %s to %s.' => '%s premenoval tento priestor z %s na %s.',
  'No spaces found.' => 'Nenašli sa žiadne priestory.',
  'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'Táto inštalácia používa na organizáciu objektov priestory, odhlásení používatelia však nemajú prístup k žiadnym priestorom.',
  'Edit Space' => 'Upraviť priestor',
  '%s made space %s the default space.' => '%s nastavil priestor %s ako predvolený.',
  'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'POZNÁMKA: Vytvárate **predvolený priestor**. Do tohto priestoru budú umiestnené všetky existujúce objekty. Predtým, než budete môcť vytvárať ďalšie priestory, musíte vytvoriť predvolený priestor.',
  'Activate Space' => 'Aktivovať priestor',
  'Show Only Active Spaces' => 'Zobraziť iba aktívne priestory',
  'Policy namespaces to segment object visibility throughout your instance.' => 'Menné priestory zásad na rozdelenie viditeľnosti objektov v rámci celej vašej inštancie.',
  'If you archive this Space, you will no longer be able to create new objects inside it.' => 'Ak tento priestor archivujete, už v ňom nebudete môcť vytvárať nové objekty.',
  '%s created space %s.' => '%s vytvoril priestor %s.',
  'Active Spaces' => 'Aktívne priestory',
  'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'Táto inštalácia používa na organizáciu objektov priestory, váš účet však nemá prístup k žiadnym priestorom.',
);
  }

}
