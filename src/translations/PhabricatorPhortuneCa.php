<?php

final class PhabricatorPhortuneCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'You must provide a cost for this purchase.' => 'Has de proporcionar un cost per aquesta compra.',
      'Use Logo' => 'Utilitzeu un logotip',
      'Payment for this invoice could not be processed automatically:
    %s' => 'El pagament d\'aquesta factura no s\'ha pogut processar automàticament:
    %s',
      '%s updated the invoice email from %s to %s.' => '%s ha actualitzat el correu de factura de %s a %s.',
      '%s disabled this payment provider.' => '%s ha desactivat aquest proveïdor de pagaments.',
      'View All Orders' => 'Mostra totes les comandes',
      '%s set the invoice email for %s to %s.' => '%s ha establert el correu de factura de %s a %s.',
      'Invoices and Receipts: %s' => 'Factures i rebuts: %s',
      '%s created this subscription.' => '%s ha creat aquesta subscripció.',
      'This email address (%s) has been disabled and no longer has access to this payment account.' => 'Aquesta adreça electrònica (%s) s\'ha desactivat i ja no té accés a aquest compte de pagament.',
      'Product List' => 'Llista de productes',
      'This payment method is not the default payment method for any subscriptions.' => 'Aquesta forma de pagament no és la forma de pagament predeterminada per a cap subscripció.',
      'Really cancel this order? Any payment will be refunded.' => 'Segur que voleu cancel·lar aquesta comanda? Qualsevol pagament serà reemborsat.',
      'PayPal API Password is required.' => 'Cal una contrasenya de l\'API de PayPal.',
      'Phortune Cart' => 'Carro de Phortune',
      'No purchase history.' => 'Cap historial de compra.',
      'This email address was added to this payment account by: %s' => 'Aquesta adreça electrònica s\'ha afegit a aquest compte de pagament per: %s',
      'Phortune Purchase' => 'Compra Phortune',
      'subscription creation' => 'Creació de subscripció',
      'You must title this invoice.' => 'Has de titular aquesta factura.',
      'Really invoice this subscription?' => 'Facturar aquesta subscripció?',
      'Edit Merchant' => 'Editar el venedor',
      'The payment method associated with this subscription is invalid or out of date, so it could not be automatically billed. Update the default payment method to enable automatic billing.' => 'El mètode de pagament associat amb aquesta subscripció no és vàlid o no està actualitzat, de manera que no es va poder facturar automàticament. Actualitzeu el mètode de pagament predeterminat per activar la facturació automàtica.',
      'Set the end of the billing period.' => 'Estableix el final del període de facturació.',
      'New Merchant name.' => 'Nou nom del venedor.',
      'Phortune Charges' => 'Despeses de Phortune',
      'Add Credit or Debit Card (US and Canada)' => 'Afegir la targeta de crèdit o dèbit (EUA i Canadà)',
      'No products.' => 'Cap producte.',
      'This order can not be voided because it is not an invoice.' => 'Aquesta comanda no es pot anul·lar perquè no és una factura.',
      'Expires %s · %s' => 'Caduca %s · %s',
      'Pay With' => 'Paga Amb',
      'All of the payment providers for this merchant are disabled.' => 'Tots els proveïdors de pagaments d\'aquest venedor estan desactivats.',
      'Merchant %d' => 'Venedor %s',
      'Merchant Manager' => 'Gestor de venedors',
      'nothing' => 'res',
      'Payment Account' => 'Compte de pagament',
      'Create Merchant' => 'Crear un venedor',
      'Unable to Cancel Order' => 'No s\'ha pogut cancel·lar la comanda',
      'Pay Now' => 'Paga Ara',
      'Merchant accounts can receive payments.' => 'Els comptes mercantils poden rebre pagaments.',
      'Configure Phortune Merchant Forms' => 'Configura els formularis mercantils de Phortune',
      'You have no unpaid invoices.' => 'No tens factures pendents.',
      'This payment provider is disabled.' => 'Aquest proveïdor de pagament està inhabilitat.',
      'Fully Refunded' => 'Totalment reemborsat',
      'The billing name can be no longer than %s characters.' => 'El nom de facturació no pot superar els %s caràcters.',
      'Unable to connect to payment provider:' => 'No s\'ha pogut connectar al proveïdor de pagament:',
      'Purchase' => 'Compra',
      'Choose a Merchant' => 'Escollir un venedor',
      'Phortune Payment Providers' => 'Proveïdors de pagament Phortune',
      'Phortune Payment Method' => 'Mètode de pagament de Phortune',
      'Add Address' => 'Afegir l\'adreça',
      'Purchases have the policies of their cart.' => 'Les compres tenen les polítiques del seu carro.',
      '%s removed %s merchant manager(s) from %s: %s.' => '%s ha eliminat %s gestors mercantils de %s: %s.',
      'No orders match the query.' => 'No hi ha comandes que coincideixin amb la consulta.',
      'There was an error adding this payment method:' => 'S\'ha produït un error en afegir aquest mètode de pagament:',
      'Payment for this order is on hold. You can click %s to check for updates, cancel the order, or contact the merchant for assistance.' => 'El pagament d\'aquesta comanda està en espera. Podeu fer clic a %s per comprovar si hi ha actualitzacions, cancel·lar la comanda o contactar amb el venedor per obtenir ajuda.',
      '%s removed %s account manager(s) from %s: %s.' => '%s ha eliminat %s gestors de comptes de %s: %s.',
      'You will no longer be able to make payments using this payment method.' => 'Ja no podreu fer pagaments amb aquesta forma de pagament.',
      'This order was created.' => 'S\'ha creat aquesta comanda.',
      'If you enable this payment provider, users will be able to use it to make new payments.' => 'Si activeu aquest proveïdor de pagaments, els usuaris el podran utilitzar per fer nous pagaments.',
      'Past Invoices' => 'Factures anteriors',
      '%s removed the billing name for this account (was %s).' => '%s ha eliminat el nom de facturació d\'aquest compte (era %s).',
      'Merchant Account Managers' => 'Gestors de comptes mercantil',
      'Can Create Merchants' => 'Pots crear venedors',
      'Phortune Charge' => 'Despesa de Phortune',
      'The application that created this cart did not finish putting products in it. You can not checkout with an incomplete cart.' => 'L\'aplicació que ha creat aquest carro no ha acabat de posar-hi productes. No podeu sortir amb un carro incomplet.',
      'Configure creation and editing forms in Phortune Accounts.' => 'Configura la creació i l\'edició de formularis als comptes de Phortune.',
      'Stripe Publishable Key' => 'Clau publicable de Stripe',
      'Unable to load subscription with PHID "%s".' => 'No s\'ha pogut carregar la subscripció amb el PHID «%s».',
      'Merchants you have a relationship with may view associated subscriptions.' => 'Els venedors amb els que teniu una relació poden veure les subscripcions associades.',
      '%s edited %s account manager(s), added %s: %s; removed %s: %s.' => '%s ha modificat %s gestors de comptes, afegit %s: %s; eliminat %s: %s.',
      'You must choose a file when uploading a merchant logo.' => 'Heu de triar un fitxer per penjar un logotip de venedor.',
      'Unable to "getAccount()" before loading or setting account context.' => 'No es pot "obtenirAccount()" abans de carregar o establir el context del compte.',
      'This order does not need manual review, so you can not accept it.' => 'Aquesta comanda no necessita revisió manual, de manera que no la podeu acceptar.',
      'Payments are processed securely by Stripe.' => 'Els pagaments es processen de manera segura via Stripe.',
      'Unable to calculate %s, this subscription has not been scheduled for billing yet. Wait for the trigger daemon to schedule the subscription.' => 'No es pot calcular %s, aquesta subscripció encara no s’ha planificat per a la facturació. Espereu que el dimoni disparador planifiqui la subscripció.',
      'Trying to refund more money than remaining on charge!' => 'Intentant reemborsar més diners que el que queden a càrrec!',
      'Set merchant managers.' => 'Establir gestors mercantils.',
      '%s created this account.' => '%s ha creat aquest compte.',
      'This iterator already has a generator. You can not modify the generator for a given iterator.' => 'Aquest iterador ja té un generador. No podeu modificar el generador per a un iterador determinat.',
      '%s updated the merchant contact info for %s.' => '%s ha actualitzat la informació de contacte del venedor per %s.',
      '%s edited a property of this payment provider.' => '%s ha modificat una propietat d\'aquest proveïdor de pagaments.',
      'Continue Checkout' => 'Continuar amb el procés de sortida',
      'Phortune Orders' => 'Comandes de Phortune',
      'There is no payment method associated with this subscription, so it could not be billed automatically. Add a default payment method to enable automatic billing.' => 'No hi ha cap mètode de pagament associat a aquesta subscripció, de manera que no es va poder facturar automàticament. Afegiu una forma de pagament predeterminada per activar la facturació automàtica.',
      'Really refund this order?' => 'Reembossar aquesta comanda?',
      '%s removed %s account manager(s): %s.' => '%s ha suprimit %s gestors de comptes: %s.',
      'Refusing to generate a subscription invoice for a billing period which ends in the future.' => 'Negar-se a generar una factura de subscripció per a un període de facturació que finalitzi en el futur.',
      'Merchants' => 'Venedors',
      'Hold' => 'Retenir',
      'This merchant is accepting test payments.' => 'Aquest venedor accepta pagaments de prova.',
      'This merchant accepts credit and debit cards via Stripe.' => 'Aquest venedor accepta targetes de crèdit i dèbit via Stripe.',
      'The checkout process has been started, but not yet completed. You can continue checking out by clicking %s, or cancel the order, or contact the merchant for assistance.' => 'El procés de sortida s\'ha iniciat, però encara no s\'ha completat. Podeu continuar fent clic a %s, o bé cancel·leu la comanda o poseu-vos en contacte amb el venedor per obtenir ajuda.',
      '%s updated the merchant description for %s.' => '%s ha actualitzat la descripció del venedor per %s.',
      'Charge On Hold' => 'Càrrec està en espera',
      'Phortune Payment Methods' => 'Mètodes de pagament Phortune',
      'Credit Card or PayPal Account' => 'Targeta de crèdit o compte de PayPal',
      'A merchant\'s members an always view and edit it.' => 'Els membres d\'un venedor sempre poden visualitzar i editar.',
      'Merchant description.' => 'Descripció del venedor.',
      'Existing access links which have been sent to this email address will stop working.' => 'Els enllaços d’accés existents que s’han enviat a aquesta adreça de correu electrònic deixaran de funcionar.',
      'Providers have the policies of their merchant.' => 'Els proveïdors tenen les polítiques del seu venedor.',
      'Stripe Publishable Key is required.' => 'Requereix una clau publicable de Stripe',
      'This PDF iterator has no associated PDF generator.' => 'Aquest iterador de PDF no té cap generador de PDF associat.',
      'The checkout process has been started, but an error occurred. You can cancel the order or contact the merchant for assistance.' => 'El procés de sortida s\'ha iniciat, però s\'ha produït un error. Podeu cancel·lar la comanda o contactar amb el venedor per obtenir ajuda.',
      '%s added %s merchant manager(s): %s.' => '%s ha afegit %s gestors mercantils: %s.',
      '%s changed the automatic payment method for this subscription.' => '%s ha canviat el mètode de pagament automàtic per a aquesta subscripció.',
      'This order was put on hold until payment clears.' => 'Aquesta comanda s\'ha retingut fins que s\'esborrés el pagament.',
      'This order has been flagged for manual review. Review the order and choose %s to accept it or %s to reject it.' => 'Aquesta comanda s\'ha marcat per a la revisió manual. Revisa la comanda i selecciona %s per acceptar-la o %s per rebutjar-la.',
      '%s changed the billing name for this account from %s to %s.' => '%s ha canviat el nom de facturació d\'aquest compte de %s a %s.',
      'Stripe' => 'Stripe',
      'This order was refunded.' => 'Aquesta comanda s\'ha reembossat.',
      'Edit Merchant: %s' => 'Edita el venedor: %s',
      '%s removed the name of this payment method (was: %s).' => '%s ha eliminat el nom d\'aquest mètode de pagament (era: %s).',
      'Phortune Payment Provider' => 'Proveïdor de pagament de Phortune',
      'This order has been flagged for manual review. You should review it carefully before accepting it.' => 'Aquesta comanda s\'ha marcat per a la revisió manual. Hauríeu de revisar-la detingudament abans d\'acceptar-la.',
      'This merchant has no payment providers.' => 'Aquest venedor no té proveïdors de pagament.',
      'There was an error decoding token information submitted by the client. Expected a JSON-encoded token dictionary, received: %s.' => 'Hi ha hagut un error en descodificar la informació del testimoni enviat pel client. S\'esperava un diccionari de testimonis codificat en JSON, rebut: %s.',
      'The payment response for this charge attempt has already been processed.' => 'La resposta de pagament per aquest intent de càrrec ja s\'ha processat.',
      '%s added %s merchant manager(s) to %s: %s.' => '%s ha afegit %s gestors mercantils a %s: %s.',
      'You do not control any merchant accounts. Merchant accounts are used to receive payments.' => 'No controleu cap compte mercantil. Els comptes mercantil s’utilitzen per rebre pagaments.',
      'Initial merchant managers.' => 'Gestors mercantils inicials.',
      'You have not established a relationship with any merchants yet. Create an order or subscription before adding payment methods.' => 'Encara no heu establert cap relació amb cap venedor.  Creeu una comanda o una subscripció abans d\'afegir mètodes de pagament.',
      'Attempting to apply a charge using an inactive payment method ("%s")!' => 'Intentant aplicar un càrrec mitjançant una forma de pagament inactiva ("%s").',
      'Invoices a subscription for a given billing period. This can charge payment accounts twice.' => 'Factura una subscripció per a un període de facturació determinat. Això pot carregar dos comptes de pagament.',
      'This merchant is accepting live payments.' => 'Aquest venedor accepta pagaments en viu.',
      'Stripe refund call did not return an ID!' => 'La trucada de reembossament a Stripe no ha retornat cap ID!',
      'PayPal API Username is required.' => 'Cal el nom d\'usuari de l\'API de PayPal',
      'Phortune Subscription' => 'Subscripció a Phortune',
      'There are no payment methods associated with this account.' => 'Hi ha cap mètode de pagament associat amb aquest compte.',
      'Stripe Secret Key is required.' => 'Cal una clau secreta de Stripe.',
      'The email address "%s" is already attached to this account.' => 'L\'adreça electrònica "%s" ja està associada a aquest compte.',
      'Trying to get index for object ("%s") which has not been registered with a generator.' => 'Intentant rebre l\'índex d\'objecte ("%s") que no ha estat registrat amb un generador.',
      'Trying to refund non-positive amount of money!' => 'Intentant reemborsar una quantitat de diners no positiva!',
      '%s changed the status of this payment method.' => '%s ha canviat l\'estat d\'aquest mètode de pagament.',
      '%s updated the merchant contact info.' => '%s ha actualitzat la informació de contacte comercial.',
      'PayPal API Signature is required.' => 'Cal una signatura de l\'API de PayPal.',
      'Phortune Accounts' => 'Comptes de Phortune',
      'You do not have permission to create Phortune merchant accounts.' => 'No teniu permís per crear cap compte mercantil a Phortune.',
      '%s renamed this account from %s to %s.' => '%s ha reanomenat aquest compte de "%s" a "%s".',
      'Processed by Stripe' => 'Processat per Stripe',
      'This merchant does not have any payment providers configured yet, so it can not accept payments. Add a provider.' => 'Aquest venedor encara no té cap proveïdor de pagaments configurat, de manera que no pot acceptar pagaments.  Afegiu un proveïdor.',
      'This merchant can accept payments.' => 'Aquest venedor pot acceptar pagaments.',
      'To configure Stripe, register or log in to an existing account on [[https://stripe.com | stripe.com]]. Once logged in:
      - Go to {nav icon=user, name=Your Account > Account Settings > API Keys}
      - Copy the **Secret Key** and **Publishable Key** into the fields above.
    You can either use the test keys to add this provider in test mode, or the live keys to accept live payments.' => 'Per configurar Stripe, registra o inicia sessió a un compte existent a [[https://stripe.com | stripe.com]]. Un cop iniciada la sessió: 
       - Aneu a {nav icon=user, name=el teu compte > paràmetres del compte > claus API}
      - Copieu la **clau secreta** i **clau publicable** als camps anteriors.
    Podeu utilitzar les claus de prova per afegir aquest proveïdor en mode de prova, o les claus en directe per acceptar pagaments en directe.',
      'There was an error decoding error information submitted by the client. Expected a JSON-encoded list of error codes, received: %s.' => 'S\'ha produït un error en descodificar la informació d\'error del client. S\'esperava una llista de codis d\'error codificada per JSON, rebut: %s.',
      'CHANGES TO MERCHANT CONTACT INFO' => 'CANVIS A LA INFORMACIÓ DE CONTACTE COMERCIAL',
      'The card expiration date is not a valid expiration date. Check that you entered it correctly. You can not add an expired card as a payment method.' => 'La data de caducitat de la targeta no és vàlida. Comproveu que l’heu introduït correctament. No podeu afegir una targeta caducada com a forma de pagament.',
      'Trying to refund an uncharged charge!' => 'Intentant el reemborsament d\'un càrrec no cobrat!',
      'Paypal checkout does not match Phortune charge!' => 'El pagament amb Paypal no coincideix amb el càrrec de Phortune!',
      'Merchant name.' => 'Nom del venedor.',
      'Configure creation and editing forms for Phortune Account Email Addresses.' => 'Configureu els formularis de creació i edició per a adreces de correu electrònic del compte mercantil de Phortune.',
      'Manually invoicing will double bill payment accounts if the range overlaps an existing or future invoice. This script is intended for testing and development, and should not be part of routine billing operations. If you continue, you may incorrectly overcharge customers.' => 'La facturació manual duplicarà els comptes de pagament de factures si l’interval se superposa a una factura existent o futura. Aquest script està pensat per a proves i desenvolupament i no ha de formar part de les operacions de facturació rutinàries. Si continueu, podeu cobrar de manera no correcta els clients.',
      'Footer on invoice forms.' => 'Peu dels formularis de factura.',
      '%s removed %s merchant manager(s): %s.' => '%s ha suprimit %s gestors mercantils: %s.',
      'Credit/Debit Card' => 'Targeta de crèdit / dèbit',
      '%s created this payment account.' => '%s ha creat aquest compte de pagament.',
      'Allows you to accept credit or debit card payments with a stripe.com account.' => 'Us permet acceptar pagaments amb targeta de crèdit o dèbit amb un compte stripe.com.',
      '%s created this account email.' => '%s ha creat aquest compte de mail.',
      'View All Merchants' => 'Veure tots els venedors',
      '%s created this payment provider.' => '%s ha creat aquest proveïdor de pagaments.',
      'No Merchants' => 'No hi han venedors',
      '%s renamed this merchant from %s to %s.' => '%s ha reanomenat aquest venedor de %s a %s.',
      'The CVC code you entered is not a valid CVC code. Check that you entered it correctly. The CVC code is a 3-digit or 4-digit numeric code which usually appears on the back of the card.' => 'El codi CVC que heu introduït no és un codi CVC vàlid. Comproveu que l’heu introduït correctament. El codi CVC és un codi numèric de 3 o 4 dígits que sol aparèixer a la part posterior de la targeta.',
      'Refund Order' => 'Ordre de reemborsament',
      'You can not query subscriptions for a merchant you do not control.' => 'No podeu consultar les subscripcions d\'un venedor que no controleu.',
      '%s changed the status for this address to %s.' => '%s ha canviat l\'estat d\'aquesta adreça a %s.',
      'Phortune' => 'Phortune',
      'Unable to refund charge; no Stripe chargeID!' => 'No s\'ha pogut reemborsar el càrrec; no hi ha cap chargeID de Stripe!',
      'Failed to load subscription with PHID "%s".' => 'No s\'ha pogut carregar la subscripció amb PHID "%s".',
      'Merchant Accounts' => 'Comptes mercantils',
      'This merchant accepts payments via PayPal.' => 'Aquest venedor accepta pagaments mitjançant PayPal.',
      'Card expiration date is invalid or incorrect.' => 'La data de caducitat de la targeta no és vàlida o és incorrecta.',
      'Refund Order?' => 'Ordre de reemborsament?',
      'Mode is required.' => 'Cal un mode',
      'Skip the prompt warning you that this operation is potentially dangerous.' => 'Omet l\'avís que aquesta operació és potencialment perillosa.',
      'Phortune Subscriptions' => 'Subscripcions a Phortune',
      'Trying to refund a refund!' => 'Intentant reembossar un reembossament!',
      '%s created this merchant.' => '%s ha creat aquest venedor .',
      'Configure creation and editing forms for Phortune Merchants.' => 'Configura la creació i l\'edició de formularis pels venedors de Phortune.',
      'This order can not be refunded because it has not been placed.' => 'Aquesta comanda no es pot reemborsar perquè no s\'ha realitzat.',
      'This order was flagged for manual processing by the merchant.' => 'Aquesta comanda va ser marcada per al processament manual pel proveïdor.',
      '%s created this payment method.' => '%s ha creat aquest mètode de pagament.',
      'You are making too many attempts to add payment methods in a short period of time.' => 'Esteu fent massa intents per afegir formes de pagament en un curt període de temps.',
      'This order requires manual processing and will complete once the merchant accepts it.' => 'Aquesta comanda requereix un processament manual i es completarà un cop el venedor l’accepti.',
      'CHANGES TO MERCHANT INVOICE FOOTER' => 'CANVIS AL PEU DE LA FACTURA COMERCIAL',
      'Specify which subscription to invoice with %s.' => 'Especifiqueu quina subscripció voleu facturar amb %s.',
      '%s edited %s account manager(s) for %s, added %s: %s; removed %s: %s.' => '%s ha modificat %s gestors de comptes per %s, afegit %s: %s; eliminat %s: %s.',
      'Invoice Footer' => 'Peu de la factura',
      'ORDER CONTENTS' => 'CONTINGUT DE L\'ORDRE',
      '%s added %s account manager(s) to %s: %s.' => '%s ha afegit %s gestors de comptes a %s: %s.',
      'Invalid or incorrect credit card number.' => 'Número de targeta de crèdit no vàlid o incorrecte.',
      'Configure Phortune Account Forms' => 'Configureu els formularis del compte mercantil de Phortune',
      'Stripe Secret Key' => 'Clau secreta de Stripe',
      'This merchant already has a payment account configured with this provider.' => 'Aquest venedor ja té un compte de pagament configurat amb aquest proveïdor.',
      'Unable to update charge; no Stripe chargeID!' => 'No es pot actualitzar el càrrec; cap Stripe chargeID!',
      'You can view this account because you control %d merchant(s) it has a relationship with: %s.' => 'Podeu veure aquest compte perquè controleu %s venedors amb: %s.',
      '%s edited %s merchant manager(s), added %s: %s; removed %s: %s.' => '%s ha modificat %s gestors mercantils, afegit %s: %s; eliminat %s: %s.',
      '%s updated the picture for merchant %s.' => '%s ha actualitzat la imatge del venedor %s.',
      '%s added %s account manager(s): %s.' => '%s ha afegit %s gestors de comptes: %s.',
      'Phortune Carts' => 'Carros de Phortune',
      'You have been charged, but processing could not be completed. You can cancel your order, or contact the merchant for assistance.' => 'Se us ha cobrat, però no s\'ha pogut completar el processament. Podeu cancel·lar la vostra comanda o contactar amb el venedor per obtenir ajuda.',
      'Unable to "getMerchants()" before loading or setting account context.' => 'No es pot "getMerchants()" abans de carregar o establir el context del compte.',
      'Merchants an account has established a relationship can view it.' => 'Els venedors amb un compte establert el poden veure.',
      '%s updated the merchant invoice footer.' => '%s ha actualitzat el peu de la factura comercial.',
      'You can not query subscriptions for an account you are not a member of.' => 'No podeu consultar les subscripcions d\'un compte del qual no sou membre.',
      'Trying to refund a charge which is already refunding!' => 'Intentant reemborsar un càrrec que ja està reembossant!',
      'Trying to add a new PDF Object child after already registering the object with a generator.' => 'S\'està intentant afegir un nou objecte PDF fill després de registrar l\'objecte amb un generador.',
      'Unable to refund some charges!' => 'No es poden reembossar alguns càrrecs!',
      'You can not remove yourself as an merchant manager.' => 'No podeu eliminar-vos com a gestor mercantil.',
      '%s updated the merchant invoice footer for %s.' => '%s ha actualitzat el peu de la factura comercial per %s.',
      'Refunded' => 'Reembossat',
      'New merchant description.' => 'Nova descripció del venedor.',
      'There was an error with the payment token submitted by the client. Expected a valid dictionary, received: %s.' => 'Hi ha hagut un error amb el testimoni de pagament enviat pel client.  S\'esperava un diccionari vàlid, rebut: %s.',
      'Order Not in Review' => 'Comand no revisat',
      'Merchants you have a relationship with may view associated payment methods.' => 'Els venedors amb qui tingueu una relació poden veure els mètodes de pagament associats.',
      'This order can not be refunded because the application has not finished building it yet.' => 'Aquesta comanda no es pot reembossar perquè l\'aplicació encara no ha acabat de construir-la.',
      'All Merchants' => 'Tots els venedors',
      '%s renamed %s merchant name from %s to %s.' => '%s ha reanomenat el venedor %s de %s a %s.',
      'Charge is in the wrong refunding state!' => 'El càrrec es troba en un estat de reembossament incorrecte!',
      'Controller ("%s") extends controller "%s", but is reachable with no "accountID" in URI.' => 'El controlador ("%s") amplia el controlador "%s", però es pot accedir sense "ID de compte" a l\'URI.',
      'Choose the merchant you want to pay.' => 'Tria el venedor al que vols pagar.',
      'Refund' => 'Reemborsament',
      'Merchants must have a name.' => 'Els venedors han de tenir un nom.',
      'Review' => 'Revisió',
      'Phortune Merchant' => 'Venedor de Phortune',
      '%s updated the merchant description.' => '%s ha actualitzat la descripció del venedor.',
      '%s removed the invoice email.' => '%s ha eliminat el correu electrònic de la factura.',
      'Your charge is on hold, for reasons?' => 'El vostre càrrec està en espera, per quins motius?',
      'This merchant accepts test payments.' => 'Aquest venedor accepta pagaments de prova.',
      'To configure PayPal, register or log into an existing account on [[https://paypal.com | paypal.com]] (for live payments) or [[https://sandbox.paypal.com | sandbox.paypal.com]] (for test payments). Once logged in:
      - Navigate to {nav Tools > API Access}.
      - Choose **View API Signature**.
      - Copy the **API Username**, **API Password** and **Signature**     into the fields above.
    You can select whether the provider operates in test mode or accepts live payments using the **Mode** dropdown above.
    You can either use `sandbox.paypal.com` to retrieve live credentials, or `paypal.com` to retrieve live credentials.' => 'Per a configurar PayPal, registrar o registrar-se en un compte existent a [[https://paypal.com | paypal.com]] (per a pagaments en directe) o [[https://sandbox.paypal.com | sandbox.paypal.com]] (per a proves de pagaments). Un cop iniciat la sessió: 
      - Navegueu a {nav Tools > API Access}. 
      - Trieu **Visualitza la signatura de l\'API**. 
      - Copia el **nom d\'usuari de l\'API**, **contrasenya de l\'API** i **Signatura** als camps anteriors. 
    Podeu seleccionar si el proveïdor funciona en mode de prova o accepta pagaments en directe utilitzant el desplegable **Mode** de dalt. 
    Podeu utilitzar \'sandbox.paypal.com\' per obtenir les credencials en directe, o \'paypaypal.com\' per obtenir les credencials en directe.',
      'Card CVC is invalid or incorrect.' => 'La targeta CVC no és vàlida o és incorrecta.',
      'Controller ("%s") extends controller "%s", but is reachable with no "merchantID" in URI.' => 'El controlador ("%s") amplia el controlador "%s", però es pot accedir sense cap "identificador de venedor" a l\'URI.',
      '%s edited %s merchant manager(s) for %s, added %s: %s; removed %s: %s.' => '%s ha modificat %s gestors mercantils per %s, afegit %s: %s; eliminat %s: %s.',
      '%s removed the invoice email for %s.' => '%s ha eliminat el correu electrònic de la factura per %s.',
      'Phortune Account' => 'Compte de Phortune',
      'Quantity must be a positive integer.' => 'La quantitat ha de ser un nombre enter positiu.',
      'Infinite Free Money' => 'Diners gratuïts infinits',
      'Stripe charge call did not return an ID!' => 'La trucada de càrrec de Stripe no ha retornat cap ID!',
      'Phortune Product' => 'Producte de Phortune',
      'The card number you entered is not a valid card number. Check that you entered it correctly.' => 'El número de targeta que heu introduït no és un número de targeta vàlid. Comproveu que l’heu introduït correctament.',
      'Configure Phortune Account Email Forms' => 'Configureu els formularis de correu electrònic del compte de Phortune',
      'Merchant contact information.' => 'Informació de contacte del venedor.',
      'Phortune Merchants' => 'Venedors de Phortune',
      'No merchants found.' => 'No s\'ha trobat cap venedor.',
      'Create New Merchant' => 'Crear un venedor nou',
      'Phortune Account Emails' => 'Correus electrònics de comptes de Phortune',
      'There are no billing email addresses associated with this account.' => 'No hi ha adreces de correu de facturació associades a aquest compte.',
      'Choose which account to invoice.' => 'Trieu un compte a facturar.',
      '%s Refunded' => '%s reembossat',
      'CHANGES TO MERCHANT DESCRIPTION' => 'CANVIS EN LA DESCRIPCIÓ DEL VENEDOR',
      'Add Stripe Payments Account' => 'Afegir un compte de pagaments Stripe',
    );
  }

}