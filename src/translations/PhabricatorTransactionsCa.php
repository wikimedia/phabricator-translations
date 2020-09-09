<?php

final class PhabricatorTransactionsCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Bloca/amaga els camps',
      'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in Settings.' => 'No teniu cap factor MFA vinculat al vostre compte, per tant no podeu signar aquest grup de transaccions amb MFA. Afegiu MFA al vostre compte a la Configuració.',
      'Unmark as "Edit" Form' => 'Desmarca com a formulari "editable"',
      'Parameter "%s" is not a list of transactions.' => 'El paràmetre "%s" no és una llista de transaccions.',
      'Transactions have no effect:' => 'Les transaccions no tenen cap efecte:',
      'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => 'Aquest endpoint soporta aquests tipus de transaccions. Veieu més a baix l\'informació detallada sobre cada tipus de transacció.',
      'To silence this edit, run this command:' => 'Per silenciar aquesta edició, executeu aquesta comanda:',
      'Builtin Form "%s"' => 'Formulari integrat "%s"',
      '%s added a comment.' => '%s ha afegit un comentari.',
      'Empty Comment' => 'Comentari buit',
      'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => 'La política seleccionada %s us exclou. Escolliu una %s política que us permeti %s l\'objecte.',
      'All users are already subscribed to this %s.' => 'Tots els usuaris ja estan subscrits a aquest %s.',
      'Edge transaction has no \'%s\'!' => 'La transacció aresta no té \'%s\'!',
      'No object exists with PHID "%s".' => 'No existeix cap objecte amb PHID "%s".',
      'Reorder Edit Forms' => 'Reordena Formularis d\'Edició',
      'Reorder Create Forms' => 'Reordena Formularis de Creació',
      'The %s action(s) you are taking have no effect:' => 'Les %s accions que esteu executant no tenen cap efecte:',
      '%s removed %s subscriber(s) for %s: %s.' => '%s ha esborrat %s subscriptors per %s: %s.',
      'Engine: Editor' => 'Motor: Editor',
      '%s moved %s to %s on the %s board.' => '%s ha mogut %s a %s en el panell %s.',
      '%s added %s file(s) for %s: %s.' => '%s ha afegit %s fitxer(s) per %s: %s.',
      'To continue, configure multi-factor authentication in Settings.' => 'Per continuar, configureu l\'autenticació de factors múltiples a Configuració.',
      'SearchEngine class to export data from.' => 'La classe SearchEngine des de la que exportar les dades.',
      '%s added %s file(s): %s.' => '%s ha afegit %s fitxer(s): %s.',
      'In %s, %s wrote:' => 'En %s, %s ha escrit:',
      'Unmark as Create Form' => 'Desmarca com Formulari de Creació',
      'Mark as Edit Form' => 'Marca com Formulari d\'Edició',
      'Edges already exist; transaction has no effect.' => 'Les arestes ja existeixen; la transacció no té cap efecte.',
      '%s updated the preamble for this form.' => '%s ha actualitzat el preàmbul per a aquest formulari.',
      '%s marked %s inline comment(s) as done.' => '%s ha marcat %s comentaris en línia com a fets.',
      'Email Body Text' => 'Text del Cos de l\'Email.',
      'Optional instructions, shown above the form.' => 'Instruccions opcionals, mostrades sobre el formulari.',
      'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Aquest grup de transaccions requereix MFA per a aplicar-se, però no podeu proporcionar una resposta MFA via Conduit. Editeu aquest objecte via interfície web.',
      'Subtype key "%s" does not identify a valid subtype.' => 'La clau de subtipus "%s" no s\'identifica com un subtipus vàlid.',
      'Name of the form.' => 'Nom del formulari.',
      'No search engines match "%s". Available engines which support data export are: %s.' => 'No hi ha cap motor de cerca que coincideixi amb "%s". Els motors de cerca disponibles que suporten exportació de dades són: %s.',
      'Default Create Form' => 'Formulari de Creació per defecte.',
      '%s changed the visibility for %s.' => '%s ha canviat la visibilitat de %s.',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s ha editat els subscriptors, ha afegit %s: %s; esborrat %s: %s.',
      'Take Action' => 'Prendre Acció',
      'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Feu servir "--output <path>" per especificar un arxiu de sortida, o "--output -" per escriure a stdout.',
      'Form Disabled' => 'Formulari deshabilitat',
      'Failed to serialize() value for key "%s".' => 'Fallat aplicant serialize() al valor de la clau "%s".',
      '%s marked %s inline comment(s) as not done.' => '%s ha marcat %s comentaris en línia com no fets.',
      'Recipient Removed' => 'Receptor Eliminat',
      'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'EditField (amb clau "%s", de la classe "%s") està generant transaccions, però no té EditType.',
      'Transaction' => 'Transacció',
      'Bulk Edit Actions' => 'Edita Accions en Volum',
      'Primary Fields' => 'Camps Primaris',
      '%s moved %s on %s board(s): %s.' => '%s ha mogut %s en %s panell(s): %s.',
      'Transactions' => 'Transaccions',
      'Export format.' => 'Format d\'exportació.',
      'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Arrossega i deixa anar camps per canviar l\'ordre en què apareixen al menú "Crear" de l\'aplicació.',
      'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => 'Valor \'%s\' invàlid per la transacció Aresta. El valor hauria de contenir només claus \'%s\' (afegir arestes), \'%s\' (eliminar arestes) i \'%s\' (establir arestes).',
      'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'El monograma "%s" identifica un objecte d\'un tipus incorrecte. L\'objecte carregat té classe "%s", però aquest editor opera sobre objectes de tipus "%s".',
      '🔒 Locked' => '🔒 Bloquejat',
      'New Object' => 'Nou Objecte',
      '%s enabled this form.' => '%s habilitat per aquest formulari.',
      'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'EditEngine "%s" ha creat o carregat un objecte invàlid: l\'objecte (de classe "%s") ha d\'implementar "%s", però no ho fa.',
      'Edit Configurations' => 'Edita configuracions',
      'Edit type (with key "%s") is missing a Conduit parameter type.' => 'El tipus d\'edició (amb clau "%s") no té un tipus de paràmetre Conduit.',
      'Validation Errors' => 'Errors de validació',
      'You are about to apply a bulk edit which will affect %s object(s).' => 'Esteu a punt d\'aplicar una edició en volum que afectarà %s objecte(s).',
      'You do not have access to any forms which are enabled and marked as edit forms.' => 'No teniu accés a cap formulari que estigui activat i marcat com a formulari d\'edició.',
      'You are editing the default values for this form.' => 'Estàs editant els valors per defecte per aquest formulari.',
      'This job is already configured to run silently.' => 'Aquesta tasca ja està configurada per còrrer silenciosament.',
      'Failed to base64 encode value for key "%s".' => 'Fallat en codificar en base64 el valor per la clau "%s".',
      'This form ("%s") has been disabled, so it can not be used.' => 'Aquest formulari ("%s") ha estat deshabilitat, per tant no pot ser utilitzat.',
      'Browse Forms' => 'Explora els formularis',
      'Specify an export format with "--format".' => 'Especifiqueu un format d\'exportació amb "--format".',
      'Using HTTP Parameters' => 'Utilitzant paràmetres d\'HTTP',
      'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => 'El subtipus "%s" no és vàlid: les claus de subtipus han de tenir una longitud mínima de 3 bytes.',
      'Expected a query key or a set of query constraints.' => 'Esperava una clau de consulta o un conjunt de restriccions de consulta.',
      'Enable Form' => 'Habilita el formulari',
      'Tell No One' => 'No li diguis a ningú',
      '%s edited edge metadata for %s.' => '%s ha editat les metadades d\'aresta per %s.',
      'Create Forms' => 'Crea formularis',
      'Post as Comment' => 'Publica un comentari',
      'Edit Configuration' => 'Edita la configuració',
      'Query does not match any objects you have permission to edit.' => 'La consulta no coincideix amb cap objecte que tingueu permís per editar.',
      'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => 'Voleu marcar aquest formulari com a formulari d\'edició? Els usuaris que el poden veure podran fer-lo servir per editar objectes.',
      'Query does not match any objects.' => 'La consulta no coincideix amb cap objecte.',
      '✘ Hidden' => '✘ Amagat',
      'EditEngine BuiltinKey contains an invalid key character "/".' => 'La BuiltinKey del EditEngine conté el caràcter invàlid "/".',
      '%s rescinded a token.' => '%s ha rescindit un token.',
      '%s awarded a token.' => '%s ha concedit un token.',
      'Mentioned or subscribed users will not be notified.' => 'Els usuaris mencionats o subscrits no seran notificats.',
      'New object subtype key.' => 'Nova clau de subtipus d\'objecte.',
      'Acting User' => 'Usuari Suplent',
      '%s added a comment to %s.' => '%s ha afegit un comentari a %s.',
      '%s changed locked and hidden fields.' => '%s ha canviat camps bloquejats i ocults.',
      'Edit Form %d: %s' => 'Edita el formulari %s: %s',
      'Output path already exists. Use "--overwrite" to overwrite it.' => 'La ruta de sortida ja existeix. Feu servir "--overwrite" per a sobreescriure-la.',
      'Change Subtype' => 'Canviar Subtipus',
      'Drag and drop fields to reorder them.' => 'Arrossegueu i deixeu anar camps per a reordenar-los.',
      '%s removed %d subscriber(s): %s.' => '%s ha eliminat %s subscriptor(s): %s.',
      'Not an Edit Form' => 'No és un Formulari d\'Edició',
      'Mark Form' => 'Marca el Formulari',
      'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine ("%s") conté un caràcter invàlid "/".',
      'Change Default Values' => 'Canvieu els Valors per Defecte.',
      '%s added %s watcher(s) for %s: %s.' => '%s ha afegit %s vigilant(s) per %s: %s.',
      'No default edit engine configuration for bulk edit.' => 'No hi ha un motor d\'edició per defecte configurat per a edicions en volum.',
      'After running this command, reload this page to see the new setting.' => 'Després d\'executar aquesta comanda, recarregueu aquesta pàgina per veure el nou paràmetre.',
      'Save Defaults' => 'Desa per defecte',
      'Change how forms in other applications are created and edited. Advanced!' => 'Canvieu com es crea i edita un formulari en altres aplicacions. Avençat!',
      'Form Order' => 'Ordeneu el Formulari',
      'Mention In' => 'Menció A',
      'HTTP Parameters' => 'Paràmetres d\'HTTP',
      'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => 'La transcacció té el tipus "%s", però aquest tipus de transacció no està suportat per aquest editor (%s).',
      'Edit Engines' => 'Motors d\'Edició',
      'Disable this form? Users will no longer be able to use it.' => 'Deshabilitar aquest formulari? Els usuaris ja no podran fer-lo servir.',
      'Bulk Editor' => 'Editor en Volum',
      'Transaction edge specification contains unexpected key "%s".' => 'L\'especificació de la transacció d\'aresta conté la clau inesperada "%s".',
      'Support Applications' => 'Suportar Aplicacions',
      'Transaction must have a PHID before calling %s!' => 'La transacció ha de tenir un PHID abans de cridar a %s!',
      'No Manage Permission' => 'Sense permís de gestió',
      'Really remove this comment?' => 'Realment vols eliminar aquest comentari?',
      'Changed Policy' => 'Política canviada',
      'Forms' => 'Formularis',
      'Disable Form' => 'Deshabilita el formulari',
      'Mention' => 'Menció',
      'Post Comment' => 'Publica un comentari',
      '%s moved this task to %s on the %s board.' => '%s ha mogut aquesta tasca a %s en el panell %s.',
      '%s created %s in the %s space.' => '%s ha creat %s en el espai %s.',
      '%s wrote:' => '%s ha escrit:',
      'Transaction Types' => 'Tipus de transacció',
      '%s created this form configuration.' => '%s ha creat aquest formulari de configuració.',
      'EMAIL PREFERENCES' => 'PREFERÈNCIES DE CORREU ELECTRÒNIC',
      'Make Editable' => 'Fes editable',
      '%s disabled this form.' => '%s ha deshabilitat aquest formulari.',
      'Duplicate Form' => 'Duplica el formulari',
      '%s created this object in space %s.' => '%s ha creat aquest objecte en l\'espai %s.',
      'Show Only Create Forms' => 'Mostra només els formularis de creació',
      'Create Form' => 'Crea un formulari',
      '%s moved this task on %s board(s): %s.' => '%s ha mogut aquesta tasca en %s panell(s): %s.',
      'Changed Subscribers' => 'Subscriptors canviats',
      '%s created this object.' => '%s ha creat aquest objecte.',
      'Comment History' => 'Historial de comentaris',
      'Edit Form' => 'Edita el formulari',
      'Untitled Form' => 'Formulari sense títol',
      'Validation errors:' => 'Errors de validació:',
      'EDIT DETAILS' => 'EDITA DETALLS',
      'No Create Permission' => 'Sense permís de creació',
      'Edit Form: %s' => 'Edita el formulari: %s',
      'Create New Form' => 'Crea un nou formulari',
      '(Show Details)' => '(Mostra detalls)',
      '%s edited this %s.' => '%s ha editat aquest %s.',
      'Transaction Type: %s' => 'Tipus de transacció: %s',
      'Configure Form' => 'Configura el formulari',
      'Use Form' => 'Utilitza el formulari',
      'Edit Comment' => 'Edita el comentari',
      'Reorder Fields' => 'Reordena els camps',
      'Add Action...' => 'Afegeix una acció...',
      'Type a form name...' => 'Introdueix un nom de formulari...',
      'Remove Comment' => 'Elimina el comentari',
      'Edit Forms' => 'Edita els formularis',
      'Field' => 'Camp',
      '<empty>' => '<buit>',
      '%s renamed this form from "%s" to "%s".' => '%s ha reanomenat aquest formulari de "%s" a "%s".',
      'All Forms' => 'Tots els formularis',
      'Form Preview' => 'Previsualització del formulari',
      'Form %d' => 'Formulari %s',
    );
  }

}