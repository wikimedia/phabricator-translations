<?php

final class PhabricatorMacroCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Play audio continuously, treating the macro as an audio source. Best for ambient sounds.' => 'Reprodueix l\'àudio contínuament, tractant la macro com a font d\'àudio.  Millor per als sons ambientals.',
      'This page documents the commands you can use to interact with image macros.' => 'Aquesta pàgina documenta les ordres que podeu utilitzar per interactuar amb les macros d\'imatge.',
      'Create Meme' => 'Crea un Meme',
      'Active Macros' => 'Activar Macros',
      'Validity of macro "%s"' => 'Validació de la macro «%s»',
      'Upload New Audio' => 'Puja un àudio nou',
      'Image Macro "%s"' => 'Macro d\'imatge «%s»',
      'MACRO DETAIL' => 'DETALL DE MACRO',
      'Macro Image' => 'Imatge de la macro',
      'Image File' => 'Fitxer d\'imatges',
      'Name of the macro.' => 'Nom de la macro.',
      'Create a Macro' => 'Crear una Macro',
      'Type an emoji name...' => 'Introdueix un nom d\'emoji...',
      'Apply transactions to create a new macro or edit an existing one.' => 'Aplica les operacions per crear una macro nova o editar-ne una existent.',
      'Do not play audio.' => 'L\'àudio no pot ser reproduït.',
      'Edit Macro %s' => 'Edita la macro %s',
      '%s set the audio for %s to loop.' => '%s estableix el clip d\'àudio a %s per reproduir-lo repetidament.',
      '(Marked With Any Flag)' => '(Marcat Amb Qualsevol Bandera)',
      'Active and Disabled Macros' => 'Macros actives i inhabilitades',
      'Disabled Macros' => 'Macros inhabilitades',
      'Configure creation and editing of Macro images.' => 'Configura la creació i edició d\'imatges de macro.',
      'Created on %s' => 'Creat el %s',
      'Can Manage Macros' => 'Pot gestionar macros',
      '%s renamed this macro from %s to %s.' => '%s ha reanomenat aquesta macro de %s a %s.',
      '%s set the audio for %s to play once.' => '%s ha establert l\'àudio perquè es reprodueixi un cop a %s.',
      'Edit Audio: %s' => 'Edita l\'àudio: %s',
      'New macro name.' => 'Nom de macro nou.',
      'No matching flags.' => 'No hi ha banderes coincidents.',
      'Audio Behavior' => 'Comportament de l\'àudio',
      'To change the audio for a macro, you must upload an audio file.' => 'Per canviar l\'àudio d\'una macro, heu de pujar un fitxer d\'àudio.',
      'Image macros must have a file.' => 'Les macros d\'imatge han de tenir un fitxer.',
      'Save Audio Behavior' => 'Desa el comportament de l\'àudio',
      '%s set the audio to play once.' => '%s ha establert l\'àudio a reproduir una vegada.',
      'Macro %s: %s %s' => 'Macro %s: %s %s',
      'Image file to import.' => 'Fitxer d\'imatge a importar.',
      '%s changed the image for this macro.' => '%s ha canviat la imatge per aquesta macro.',
      'Do Not Play' => 'No jugueu',
      'Below' => 'A sota',
      'Created in ages long past' => 'Creat fa molt de temps',
      '%s changed the image for %s.' => '%s ha canviat la imatge per %s.',
      'Above' => 'Damunt',
      'Macro' => 'Macro',
      'Edit Audio' => 'Edita l\'Àudio',
      'Failed to imagecreatefromstring() image template data.' => 'La imatge imagecreatefromstring() no s\'ha pogut crear a partir de dades de plantilla.',
      'Create Macro' => 'Crear una Macro',
      'Macro name.' => 'Nom de la macro.',
      '%s disabled the audio for %s.' => '%s ha desactivat l\'àudio per %s.',
      'Macro name "%s" be: at least three characters long; and contain only lowercase letters, digits, hyphens, colons, underscores, and emoji; and not be composed entirely of latin symbols.' => 'El nom de la macro "%s" ha de tenir: tres caràcters com a mínim; i només contenir minúscules, números, guions, punts, subratllats o emojis; i no pot estar compost completament per símbols llatins.',
      'Macro "%s"' => 'Macro "%s"',
      'Macro was not found.' => 'No s\'ha trobat la macro.',
      'Activate Macro' => 'Activa la macro',
      'The file you uploaded is invalid: it is not recognizable as a valid audio file.' => 'El fitxer que heu pujat no és vàlid: no es reconeix com a fitxer d\'àudio vàlid.',
      'Image Macro' => 'Macro d\'imatge',
      'Macro name is required.' => 'Es requereix el nom de la macro.',
      '[Macro]' => '[Macro]',
      'Macros' => 'Macros',
      'Retrieve image macro information.' => 'Recupera la informació de la macro de la imatge.',
      'Configure Macro Image Forms' => 'Configura els formularis d\'imatge de macros',
      'Play audio once, when the viewer looks at the macro.' => 'Reprodueix l\'àudio una vegada, quan el visor mira la macro.',
      'Create New Macro' => 'Crea una macro nova',
      'Image Macros and Memes' => 'Macros i Memes d\'imatge',
      '%s set the audio to loop.' => '%s ha establert l\'àudio per al bucle.',
      'Edit Macro' => 'Edita la macro',
      'Masterfully imagined by %s on %s.' => 'Imaginat magistralment per %s el %s.',
      '%s changed the audio for %s from %s to %s.' => '%s ha canviat l\'àudio per %s de %s a %s.',
      'Really disable the much-beloved image macro %s? It will be sorely missed.' => 'Segur que voleu desactivar la macro d\'imatge confirmada %s?  Es trobarà a faltar.',
      'Audio File' => 'Fitxer d\'àudio',
      'Generate a meme.' => 'Generar un meme.',
      'No such macro.' => 'No existeix aquesta macro.',
      '%s disabled this macro.' => '%s ha desactivat aquesta macro.',
      'Browse Macros' => 'Navega per les macros',
      '%s restored this macro.' => '%s ha restaurat aquesta macro.',
      '%s attached audio to %s: %s.' => '%s àudio adjuntat a %s: %s.',
      '%s attached audio: %s.' => '%s àudio adjuntat: %s.',
      '%s created this macro.' => '%s ha creat aquesta macro.',
      'Macros must have a name.' => 'Les macros han de tenir un nom.',
      '%s restored %s.' => '%s ha restaurat %s.',
      'Interacting with Macros' => 'Interactuar amb macros',
      'Marked with Flag' => 'Marcat amb bandera',
      'Allows creating and editing macros.' => 'Permet la creació i edició de macros.',
      'Archive Macro' => 'Arxiva la macro',
      'Play Continuously' => 'Reprodueix de manera contínua',
      'Loop' => 'Bucle',
      '%s disabled the audio for this macro.' => '%s ha desactivat l\'àudio per a aquesta macro.',
      'Create easy to remember shortcuts to images and memes.' => 'Crea les dreceres fàcils de recordar a les imatges i els memes.',
      '(No Filtering)' => '(Sense filtre)',
      'Really disable macro?' => 'Realment voleu desactivar la macro?',
      'Llama Diorama' => 'Llama Diorama',
      'Browse Emojis' => 'Navega per Emojis',
      '%s changed the audio for this macro from %s to %s.' => '%s ha canviat l\'àudio d\'aquesta macro de %s a %s.',
      'You do not have permission to manage image macros.' => 'No teniu permís per gestionar les macros d\'imatge.',
      'Template "%s" is not a valid template.' => 'La plantilla «%s» no és una plantilla vàlida.',
      'Email Commands: Macros' => 'Ordres de correu: Macros',
      'Type a macro name...' => 'Escriviu un nom de macro...',
      'Macro "%s" already exists.' => 'La macro «%s» ja existeix.',
      'Play Once' => 'Reprodueix un cop',
    );
  }

}
