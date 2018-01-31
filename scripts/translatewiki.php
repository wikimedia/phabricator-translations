#!/usr/bin/env php
<?php

$root = dirname(dirname(__FILE__));
require_once $root.'/scripts/init/init-script.php';

$args = new PhutilArgumentParser($argv);
$args->setTagline(pht('bindings for Phabricator and Translatewiki'));
$args->setSynopsis(<<<EOSYNOPSIS
**translatewiki** __command__ [__options__]
    Import or export translations between libphutil libraries
    (including Phabricator) and Translatewiki.

EOSYNOPSIS
  );
$args->parseStandardArguments();

$workflows = id(new PhutilClassMapQuery())
  ->setAncestorClass('TranslatewikiManagementWorkflow')
  ->execute();
$workflows[] = new PhutilHelpArgumentWorkflow();
$args->parseWorkflows($workflows);
