<?php

final class PhabricatorOwnersCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Automatically trigger audits for commits affecting files in this package.' => 'Activeu automàticament auditories per a validacions que afectin fitxers d’aquest paquet.',
      'Path Exists in Repository' => 'El camí existeix al repositori',
      'Audit Unreviewed Commits and Commits With No Owner Involvement' => 'Comproveu les validacions sense revisar i les validacions sense implicació del propietari',
      '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => '%s ha canviat el propietari del paquet %s, ha afegit %s:%s; s\'ha suprimit %s:%s.',
      'Auto Review' => 'Revisió automàtica',
      'Auto review information.' => 'Informació de revisió automàtica.',
      'Users and projects which own the package.' => 'Usuaris i projectes propietaris del paquet.',
      'Repository callsign %s not recognized' => 'No es reconeix l\'indicatiu de trucada del repositori %s',
      'Subscribe to Changes With Non-Owner Author' => 'Subscriviu-vos als canvis amb l\'autor que no sigui propietari',
      'Specify the files and directories which comprise this package.' => 'Especifiqueu els fitxers i directoris que formen aquest paquet.',
      'Group sections of a codebase into packages for re-use in other areas of Phabricator, like Herald rules.' => 'Agrupa les seccions d\'una base de codi en paquets per a la seva reutilització en altres àrees de Phabricator, com les normes de Herald.',
      'Review Changes With Non-Owner Author' => 'Reviseu els canvis amb l\'autor que no sigui propietari',
      '%s renamed this package from %s to %s.' => '%s ha reanomenat aquest paquet de "%s" a "%s".',
      'Audit Unreviewed Commits' => 'Comproveu les validacions no revisades',
      'List of dictionaries, each describing a path.' => 'Llista de diccionaris, cadascun dels quals descriu un camí.',
      '%s changed %s ignored attribute(s), added %s: %s.' => '%s ha canviat %s atribut(s), afegit %s:%s.',
      'Path specification list references repository PHID "%s", but that is not a valid, visible repository.' => 'La llista d\'especificacions de camins fa referència al repositori PHID "%s", però no és un repositori visible vàlid.',
      'The repository callsign is not recognized.' => 'No es reconeix l\'indicatiu de trucada del repositori.',
      'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.' => 'Els noms dels paquets no poden contenir comes (\',\') ni signes d\'exclamació (\'!\'). Aquests caràcters són ambigus quan els noms dels paquets s’analitzen sintàcticament des de la línia d’ordres.',
      '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => '%s ha canviat %s atribut(s), afegit %s:%s; suprimit %s:%s.',
      'Ignore generated files (review only).' => 'Ignora els fitxers generats (només revisa).',
      'Automatically trigger reviews for commits affecting files in this package.' => 'Activeu automàticament les ressenyes de les validacions que afectin fitxers d’aquest paquet.',
      'No commits in this package.' => 'Cap validació en aquest paquet.',
      'Review All Changes' => 'Reviseu tots els canvis',
      'Review All Changes (Blocking)' => 'Revisa tots els canvis (bloqueig)',
      'No active Herald rules add this package as an auditor, reviewer, or subscriber.' => 'Cap regla Herald activa afegeix aquest paquet com a auditor, revisor o subscriptor.',
      'Provide one of a single owner phid (user/project), a single affiliated user phid (user), or a repository/path.' => 'Proporcioneu un únic propietari phid (usuari/projecte), un únic usuari afiliat phid (usuari), o un repositori/camí.',
      'Search for packages by included repositories.' => 'Cerqueu paquets als repositoris inclosos.',
      'Audit All Commits' => 'Auditar Totes Les Validacions',
      'Audit Commits With No Owner Involvement' => 'Validacions d\'auditoria sense implicació del propietari',
      'No repository PHID for path "%s"!' => 'No hi ha cap repositori PHID per al camí "%s"!',
      'Review Changes With Non-Owner Author (Blocking)' => 'Reviseu els canvis amb l\'autor que no sigui propietari (bloqueig)',
      '%s added %s owner(s): %s.' => '%s ha afegit %s propietaris: %s.',
      '%s changed %s ignored attribute(s), removed %s: %s.' => '%s ha canviat %s atribut(s), suprimit %s:%s.',
      'This package has no open problem commits.' => 'Aquest paquet no té cap validació oberta.',
      '%s removed %s owner(s): %s.' => '%s ha suprimit %s propietaris: %s.',
      '%s changed the audit rule for this package from %s to %s.' => '%s ha canviat la regla d\'auditoria d\'aquest paquet de %s a %s.',
    );
  }

}
