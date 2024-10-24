<?php

final class PhabricatorMetamtaCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'This mail is addressed to the public email address of an object ("%s"), but public replies are not enabled on this server. An administrator may have recently disabled this setting, or you may have replied to an old message. Try replying to a more recent message instead.' => 'Aquest correu s\'adreça a l\'adreça de correu electrònic pública d\'un objecte (\'%s\'), però les respostes públiques no estan habilitades en aquesta instal·lació de Phabricator. És possible que un administrador hagi desactivat recentment aquest paràmetre o que hagueu respost a un missatge antic. Intenteu respondre a un missatge més recent.',
      'Forced Mail' => 'Correu forçat',
      'MetaMTA Mails' => 'Correus MetaMTA',
      'Reserved Recipient' => 'Destinatari reservat',
      'Simulate sending mail. This may be useful to test your mail configuration, or while developing new mail adapters.' => 'Simula enviar correu. Això pot ser útil de provar la vostra configuració de correu, o mentre desenvolupa adaptadors de correu nou.',
      'File PHID: %s' => 'PHID de l\'arxiu: %s',
      'This email was sent from an email address ("%s") that is not associated with a registered user account. To interact via email, add this address to your account.' => 'Aquest correu electrònic s\'ha enviat des d\'una adreça electrònica ("%s") que no està associada amb cap compte de Phabricator. Per interactuar amb Phabricator per correu electrònic, afegiu aquesta adreça al vostre compte.',
      'This mail is addressed to an object ("%s") you do not have permission to see: %s' => 'Aquest correu és adreçat a un objecte ("%s") no tens permís per veure: %s',
      'Mailer ("%s") is attempting to access unknown option ("%s").' => 'La plataforma de correus ("%s") intenta accedir a l\'opció desconeguda ("%s").',
      'External Recipient' => 'Destinatari extern',
      'Message type "%s" is unknown, supported message types are: %s.' => 'El tipus de missatge "%s" és desconegut, els tipus suportats són: %s',
      'Forced by Herald' => 'Forçat per Herald',
      'ID: %d' => 'ID: %s',
      'Message ID Hash: %s' => 'Identificador de missatge Hash: %s',
      'Unverified "%s", the primary address for "%s".' => '"%s" sense verificar, l\'adreça principal de "%s".',
      'Message PHID' => 'PHID del missatge',
      'Made it a requirement that mail content be transmitted only over secure channels.' => 'S\'ha requerit que el contingut del correu es transmetés només a través de canals segurs.',
      'No Subject' => 'Sense tema',
      'You are sending from an unrecognized email address to an address which does not support public email ("%s").' => 'Estàs enviant un correu des d\'una adreça no reconeguda a una adreça que no admet correu electrònic públic ("%s").',
      'Queued email to be delivered to %s target(s), ignoring their notification preferences: %s.' => 'El correu electrònic de la cua es lliurarà als objectius de %s, ignorant les seves preferències de notificació: %s.',
      'Show details about inbound mail with given ID.' => 'Mostra els detalls sobre el correu entrant amb l\'identificador proporcionat.',
      'Cc' => 'Còpia',
      'Mail (Received)' => 'Correu (Rebut)',
      'Queued message #%d for resend.' => 'Missatge a la cua #%s per tornar-lo a enviar.',
      'Failed to JSON decode response.' => 'No s\'ha pogut obtenir la resposta de descodificació JSON.',
      'Failed to parse object address ("%s") during processing.' => 'No s\'ha pogut analitzar sintàcticament l\'adreça de l\'objecte (\'%s\') durant el processament.',
      'Queued email to be delivered to %s target(s): %s.' => 'Correu electrònic en cua que es lliurarà a %s objectius: %s.',
      'This is an older message that predates recording delivery information, so none is available.' => 'Aquest és un missatge més antic, anterior a l\'enregistrament de la informació de lliurament, de manera que no hi ha cap disponible.',
      'This recipient was added by a "Send me an Email" rule in Herald, which overrides some delivery settings.' => 'Aquest destinatari ha estat afegit per la regla de Herald "Envia\'m un correu", la qual anul·la alguns paràmetres de lliurament.',
      'Related PHID' => 'PHID relacionat',
      'Message recipient has no primary contact number.' => 'El destinatari del missatge no té cap número de contacte principal.',
      'Use the \'%s\' flag to specify one or more messages to show.' => 'Utilitzeu l\'indicador de seguiment «%s» per a especificar un o més missatges a mostrar.',
      'Simulate a mail delivery "Cc:" address.' => 'Simular un lliurament de correu "A/c:".',
      'Type a username, project, mailing list, package, or function...' => 'Tecleja un nom d\'usuari, projecte, llista de correu, paquet, o funció...',
      '"Unfiltered" is raw volume before rules applied.' => '«No filtrat» és el volum en brut abans que s\'apliquin les regles.',
      'No configured mailers support outbound messages of type "%s".' => 'Cap plataforma de correus configurada admet missatges de sortida del tipus \'%s\'.',
      'Content Redacted' => 'Contingut redactat',
      'This is an older message which predates routing rules.' => 'Aquest és un missatge més vell, anterior a les regles d’encaminament.',
      'Send an email to' => 'Enviar un correu electrònic a',
      'Message content can only be transmitted over secure channels.' => 'El contingut del missatge només es pot transmetre per canals segurs.',
      'List outbound messages.' => 'Enumereu els missatges de sortida enviats per Phabricator.',
      'Outbox' => 'Safata de sortida',
      'Receiving email addresses' => 'Rebent adreces de correu electrònic',
      'This message has not been sent yet, so routing rules have not been computed.' => 'Aquest missatge no ha estat enviat encara, així que regles d\'encaminament no han estat computades.',
      'Type an application email address...' => 'Tecleja una adreça de correu electrònic de l\'aplicació...',
      'MetaMTA Mail' => 'Correu MetaMTA',
      'Bad Address' => 'Adreça dolenta',
      'Inbox' => 'Safata d\'entrada',
      'Author PHID: %s' => 'PHID de l\'autor: %s',
      'This message was downgraded to a notification by outbound mail rules in Herald.' => 'Aquest missatge s\'ha canviat a una notificació mitjançant les regles de correu de sortida a Herald.',
      'The content of this mail is sensitive and it can not be viewed from the web UI.' => 'El contingut d’aquest correu electrònic és confidencial i no es pot veure des de la interfície d’usuari del web.',
      'Effective Rule' => 'Regla eficaç',
      'Content sent by electronic mail, also known as e-mail.' => 'Contingut enviat per correu electrònic, també conegut com a e-mail.',
      'Require mail content be transmitted only over secure channels.' => 'Cal que el contingut del correu només es transmeti per canals segurs.',
      'Routing Rules' => 'Regles d\'encaminament',
      'Test rules which run when outbound mail is being prepared for delivery.' => 'Regles de prova que s’executen quan es prepara el correu de sortida per al lliurament.',
      'No mailers are configured.' => 'No hi ha cap plataforma de correu configurada.',
      'Expected JSON response from Twilio.' => 'S\'esperava una resposta JSON de Twilio.',
      'This PHID type does not correspond to a mailable object.' => 'Aquest tipus de PHID no correspon a un objecte que es pot enviar per correu.',
      'Send mail "To:" the specified users.' => 'Enviar un correu "Per a:" als usuaris especificats.',
      'Show diagnostic details about outbound mail.' => 'Mostra els detalls de diagnòstic sobre el correu de sortida.',
      'Send with bulk headers.' => 'Enviar amb capçaleres massives.',
      'All Matching Rules' => 'Totes les regles de coincidència',
      'Your message does not contain any body text or attachments, so this server can not do anything useful with it. Make sure comment text appears at the top of your message: quoted replies, inline text, and signatures are discarded and ignored.' => 'El seu missatge no conté cap text de cos o arxius adjunts, de manera que Phabricator no pot fer res útil amb ell. Assegureu-vos que el text del comentari aparegui a la part superior del missatge: les respostes citades, el text en línia i les signatures es descarten i s\'ignoren.',
      'Request failed with errors: %s.' => 'La sol·licitud ha fallat amb errors: %s.',
      'Attached Files' => 'Fitxers adjunts',
      'Every program attempts to expand until it can read mail.' => 'Tots els programes intenten expandir-se fins que puguin llegir el correu.',
      'No attachments.' => 'Cap adjunt.',
      'Route outbound email.' => 'Busca la ruta el correu electrònic de sortida.',
      'Send with a specific configured mailer.' => 'Envia amb una plataforma de correu configurada específica.',
      'Specify one or more users to send a message to with "--to" and/or "--cc".' => 'Especifiqueu un o més usuaris per enviar un missatge amb "--to" i/o "--cc".',
      'Use the \'%s\' flag to specify one or more messages to resend.' => 'Utilitzeu l\'indicador de seguiment «%s» per a especificar un o més missatges per a reenviar.',
      'Unable to load an email address for this PHID.' => 'No es pot carregar una adreça electrònica per a aquest PHID.',
      'Ignoring email with "Message-ID" hash "%s" that has been seen %d times, including this message.' => 'Ignorant el correu electrònic amb l\'etiqueta "ID de missatge" "%s" que s\'ha vist %s vegades, inclòs aquest missatge.',
      'No application handled this mail. This mail was sent to a reserved recipient ("%s") so bounces are suppressed.' => 'Cap aplicació ha gestionat aquest correu. Aquest correu s\'ha enviat a un destinatari reservat ("%s"), de manera que se suprimeixen els rebots.',
      'Message recipient has more than one primary contact number.' => 'El destinatari del missatge té més d\'un número de contacte principal.',
      'Mailer key ("%s") is not configured, or does not support outbound messages of type "%s". Available mailers are: %s.' => 'La clau de la plataforma de correu (\'%s\') no està configurada o no admet missatges de sortida del tipus \'%s\'. Les plataformes de correus disponibles són: %s.',
      'Outbound Mail' => 'Correu de sortida',
      'Attach a file.' => 'Adjuntar un fitxer',
      'Simulate mail delivery "From:" the given user.' => 'Simular el lliurament de correu \'De:\' a l\'usuari indicat.',
      'Sent by %s' => 'Enviat per Phabricator',
      'ATTACHMENTS' => 'ADJUNTS',
      'Act as the specified user.' => 'Act com l\'usuari especificat.',
      'This mail is addressed to an object ("%s"), but the address is not correct (the security hash is wrong). Check that the address is correct.' => 'Aquest correu s\'adreça a un objecte ("%s"), però l\'adreça no és correcta (el hash de seguretat és incorrecte). Comproveu que l\'adreça sigui correcta.',
      'Argument "%s" is not a valid message ID.' => 'L\'argument "%s" no és un identificador de missatge vàlid.',
      'Mail signature is not valid. Check your Mailgun API key.' => 'La signatura del correu no és vàlida. Comproveu la vostra clau d\'API Mailgun.',
      'Send mail from the specified user.' => 'Enviar un correu a l\'usuari especificat.',
      'Send mail which "Cc:"s the specified users.' => 'Enviar un correu als usuaris especificats amb "A/c:".',
      'STAMPS' => 'SEGELLS',
      'Related PHID: %s' => 'PHID relacionat: %s',
      'Mail commands "%s" and "%s" both respond to keyword "%s". Keywords must be uniquely associated with commands.' => 'Les ordres de correu "%s" i "%s" responen a la paraula clau "%s". Les paraules clau s’han d’associar de manera única amb les ordres.',
      'Unknown mailer ("%s")!' => 'Plataforma de correus desconeguda ("%s")!',
      'Show details about outbound mail with given ID.' => 'Mostra els detalls sobre el correu de sortida amb l’identificador proporcionat.',
      'This mail has tags which control which users receive it, and this recipient has not elected to receive mail with any of the tags on this message (Settings > Email Preferences).' => 'Aquest correu té etiquetes que controlen els usuaris que el reben i aquest destinatari no ha escollit rebre correu amb cap de les etiquetes d’aquest missatge (Paràmetres>Preferències de correu electrònic).',
      'This recipient has disabled all email notifications (Settings > Email Preferences > Email Notifications).' => 'Aquest destinatari ha desactivat totes les notificacions de correu electrònic (Configuració > Preferències de correu > Notificacions de correu).',
      'Adapter ("%s") is configured for medium "%s", but this is not a supported delivery medium. Supported media are: %s.' => 'L\'adaptador ("%s") està configurat per al mitjà "%s", però no és un suport de lliurament compatible. Els suports compatibles són: %s.',
      'This recipient is the user whose actions caused delivery of this message, but they have set preferences so they do not receive mail about their own actions (Settings > Email Preferences > Self Actions).' => 'Aquest destinatari és l\'usuari les accions del qual han provocat l\'enviament d\'aquest missatge, però han definit preferències perquè no rebin correu electrònic sobre les seves pròpies accions (Paràmetres > Preferències de correu > Accions pròpies).',
      'Type a user, project, package, or mailing list name...' => 'Tecleja un usuari, projecte, paquet, o nom de llista de correu...',
      'Reading message body from stdin...' => 'S\'està llegint el cos del missatge des de stdin ...',
      'This recipient does not have a verified primary email address.' => 'Aquest destinatari no té una adreça electrònica principal verificada.',
      'The content for this message can only be transmitted over a secure channel. To view the message content, follow this link:' => 'El contingut d\'aquest missatge només es pot transmetre a través d\'un canal segur. Per visualitzar el contingut del missatge, segueix aquest enllaç:',
      'This software is running in silent mode. See `%s` in the configuration to change this setting.' => 'Phabricator s’executa en mode silenciós. Consulteu "%s" a la configuració per canviar aquest paràmetre.',
      'Phone number ("%s") is not in a recognized format: expected a US number like "(555) 555-5555", or an international number like "+55 5555 555555".' => 'El número de telèfon ("%s") no té un format reconegut: s\'esperava un número dels EUA com "(555) 555-5555" o un número internacional com "+55 5555 555555".',
      'Simulate mail delivery "To:" the given object.' => 'Simular l\'enviament de correu "Per a:" l\'objecte donat.',
      'No special rules affected this mail.' => 'Cap regla especial ha afectat aquest correu.',
      'Dump the HTML body of the mail. You can redirect it to a file and then open it in a browser.' => 'Aboqui el cos d\'HTML del correu. Podeu redirigir-lo a un fitxer i obrir-lo en un navegador.',
      'This message was upgraded to email by outbound mail rules in Herald.' => 'Aquest missatge s\'ha actualitzat al correu electrònic mitjançant regles de correu de sortida a Herald.',
      'Unable to load user record for this PHID.' => 'No es pot carregar el registre d\'usuari d\'aquest PHID.',
      'No configured mailers support sending outbound mail.' => 'Cap plataforma de correus configurada admet l\'enviament de missatges de sortida.',
      'Add the given mail tags.' => 'Afegir les etiquetes de correu proporcionades.',
      'Related Object' => 'Objecte relacionat',
      'Used if the "From:" address does not map to a user account. Setting a default author will allow anyone on the public internet to create objects by sending email to this address.' => 'S\'utilitza si l\'adreça "De:" no s\'assigna a cap compte d\'usuari. Establir un autor per defecte permetrà a qualsevol usuari d\'Internet públic crear objectes a Phabricator enviant un correu electrònic a aquesta adreça.',
      'Simulate receiving mail. This is primarily useful if you are developing new mail receivers.' => 'Simuleu la recepció de correu. Això és útil sobretot si esteu desenvolupant nous receptors de correu.',
      'Send mail with a given ID again.' => 'Torna a enviar el correu amb un ID determinat.',
      'This mail is addressed to the private email address of an object ("%s"), but you are not the user who is authorized to use the address you sent mail to. Each private address is unique to the user who received the original mail. Try replying to a message which was sent directly to you instead.' => 'Aquest correu és adreçat a l\'adreça de correu electrònic privada d\'un objecte ("%s"), però no ets l\'usuari autoritzat per utilitzar l\'adreça a la que has enviat el correu. Cada adreça privada és única de l\'usuari que va rebre el correu primigeni. Prova de respondre a un missatge que et va ser enviat directament en comptes d\'això.',
      'Delivery of this mail is forced and ignores deliver preferences. Mail which uses forced delivery is usually related to account management or authentication. For example, password reset email ignores mail preferences.' => 'L’entrega d’aquest correu és forçada i ignora les preferències d’enviament. El correu que utilitza el lliurament forçat sol estar relacionat amb la gestió o autenticació de comptes. Per exemple, el correu electrònic de restabliment de contrasenya ignora les preferències de correu electrònic.',
      'Message Fields' => 'Camps de missatge',
      'Must Encrypt' => 'Cal encriptar',
      'Got it! Thanks, Mailgun!
    ' => 'Fet! Gràcies, Mailgun!',
    );
  }

}
