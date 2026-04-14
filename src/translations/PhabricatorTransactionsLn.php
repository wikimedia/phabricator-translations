<?php

final class PhabricatorTransactionsLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
  'Comment Action Options' => 'Commentaire Ba options ya action',
  'Mentioned In' => 'Elobelami Na',
  'In call to "%s", specified "%s" ("%s") is not supported because it does not implement "%s". Valid object types are: %s.' => 'Na kobenga na " %s ", elakisami " %s " (" %s ") esungami te mpo ete esalela " %s " te. Mitindo ya biloko oyo ezali na ntina ezali: %s .',
  'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier".' => 'Mabenga na "transaction.search" esengeli kolakisa soit "objectType" to "objectIdentifier".',
  'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => 'Ozali na ba facteurs ya MFA te oyo ekangami na compte na yo, yango wana okoki te ko signer groupe ya transaction oyo na MFA. Bakisa MFA na compte na yo na %s .',
  'When creating objects in the web interface, you can use HTTP parameters to
prefill fields in the form. This allows you to quickly create a link to a
form with some of the fields already filled in with default values.

To prefill a form, start by finding the URI for the form you want to prefill.
Do this by navigating to the relevant application, clicking the "Create" button
for the type of object you want to create, and then copying the URI out of your
browser\'s address bar. It will usually look something like this:

```
%s
```

However, `phorge.example.com` will be the domain where your copy of this
software is installed, and `application/` will be the URI for an application.
Some applications have multiple forms for creating objects or URIs that look a
little different than this example, so the URI may not look exactly like this.

To prefill the form, add properly encoded HTTP parameters to the URI. You
should end up with something like this:

```
%s?title=Platypus&body=Ornithopter
```

If the form has `title` and `body` fields of the correct types, visiting this
link will prefill those fields with the values "Platypus" and "Ornithopter"
respectively.

The rest of this document shows which parameters you can add to this form and
how to format them.


Supported Fields
----------------

This form supports these fields:
' => 'When creating objects in the web interface, you can use HTTP parameters to
prefill fields in the form. This allows you to quickly create a link to a
form with some of the fields already filled in with default values.

To prefill a form, start by finding the URI for the form you want to prefill.
Do this by navigating to the relevant application, clicking the "Create" button
for the type of object you want to create, and then copying the URI out of your
browser\'s address bar. It will usually look something like this:

```
%s
```

However, `phorge.example.com` will be the domain where your copy of this
software is installed, and `application/` will be the URI for an application.
Some applications have multiple forms for creating objects or URIs that look a
little different than this example, so the URI may not look exactly like this.

To prefill the form, add properly encoded HTTP parameters to the URI. You
should end up with something like this:

```
%s?title=Platypus&body=Ornithopter
```

If the form has `title` and `body` fields of the correct types, visiting this
link will prefill those fields with the values "Platypus" and "Ornithopter"
respectively.

The rest of this document shows which parameters you can add to this form and
how to format them.


Supported Fields
----------------

This form supports these fields:',
  'Mentioned Here' => 'Elobelami Awa',
  'When an object (like a task) is edited, the relevant application creates a
"transaction" and applies it. This list of transactions on each object is the
basis for essentially all edits and comments. Reviewing the transaction
record allows you to see who edited an object, when, and how their edit changed
things.

One common reason to call this method is that you\'re implementing a webhook and
just received a notification that an object has changed. See the Webhooks
documentation for more detailed discussion of this use case.

One Object Type at a Time
=========================

This API method can query transactions for any type of object which supports
transactions, but only one type of object can be queried per call. For example:
you can retrieve transactions affecting Tasks, or you can retrieve transactions
affecting Revisions, but a single call can not retrieve both.

This is a technical limitation arising because (among other reasons) there is
no global ordering on transactions.

To find transactions for a specific object (like a particular task), pass the
object PHID or an appropriate object identifier (like `T123`) as an
`objectIdentifier`.

To find all transactions for an object type, pass the object type constant as
an `objectType`. For example, the correct identifier for tasks is `TASK`. (You
can quickly find an unknown type constant by looking at the PHID of an object
of that type.)

All supported values for `objectType`:

%s

Constraints
===========

These constraints are supported:

  - `phids` //Optional list<phid>.// Find specific transactions by PHID. This
    is most likely to be useful if you\'re responding to a webhook notification
    and want to inspect only the related events.
  - `authorPHIDs` //Optional list<phid>.// Find transactions with particular
    authors.

Transaction Format
==================

Each transaction has custom data describing what the transaction did. The
format varies from transaction to transaction. The easiest way to figure out
exactly what a particular transaction looks like is to make the associated kind
of edit to a test object, then query that object.

Not all transactions have data: by default, transactions have a `null` "type"
and no additional data. This API does not expose raw transaction data because
some of it is internal, oddly named, misspelled, confusing, not useful, or
could create security or policy problems to expose directly.

New transactions are exposed (with correctly spelled, comprehensible types and
useful, reasonable fields) as we become aware of use cases for them.
' => 'Tango eloko moko (lokola mosala) ebongwani, application oyo etali yango esali
"transaction" mpe esalelaka yango. Liste oyo ya ba transactions na objet moko na moko ezali
base ya essentiellement ba éditions nionso na ba commentaires. Kotala lisusu transaction
record epesaka yo nzela ya komona nani abongoli eloko moko, ntango nini, mpe ndenge nini bobongisi na bango ebongwanaki
makambo.

Ntina moko ya mingi ya kobenga lolenge oyo ezali ete ozali kosalela webhook mpe
outi kozwa liyebisi ete eloko moko ebongwanaki. Tala mikanda ya Webhooks
 mpo na masolo ya sikisiki ya likambo oyo ya bosaleli.

Lolenge ya Objet moko na mbala moko
==========================

Méthode oyo ya API ekoki kotuna ba transactions mpo na lolenge nyonso ya objet oyo esungaka
transactions, kasi kaka lolenge moko ya objet ekoki kotunama na kobenga moko. Ndakisa:
okoki kozwa ba transactions oyo etali Misala, to okoki kozwa ba transactions
ezali ko affecter ba Révisions, kasi appel moko ekoki kozua nionso mibale te.

Oyo ezali limitation technique oyo ebimaka mpo (parmi ba raisons mosusu) ezali
commande globale te na ba transactions.

Po na koluka ba transactions pona objet moko boye (lokola mosala moko boye), passer PHID ya
object to identifiant ya objet oyo ebongi (lokola `T123`) lokola
`objectIdentifier`.

Mpo na koluka ba transactions nionso pona lolenge ya objet, lekisa constante ya lolenge ya objet lokola
an `objectType`. Ndakisa, identifiant ya malamu pona misala ezali `TASK`. (O
okoki koluka noki constante ya type oyo eyebani te na kotalaka PHID ya objet
ya type wana.)

Ba valeurs nionso oyo esungami pona `objectType`:

 %s 

Bopekisami
===========

Bopekisami oyo esungami:

 - `phids` //Liste ya bolingi<phid> .// Luka ba transactions spécifiques na PHID. Oyo
 ezali na likoki mingi ya kozala na ntina soki ozali koyanola na notification ya webhook
 pe balingi ko inspecter kaka ba événements oyo etali yango.
 - `authorPHIDs` //Liste ya bolingi<phid> .// Luka ba transactions na particulier
 ba auteurs.

Format ya transaction
===================

Transaction moko na moko ezali na ba données personnalisées oyo ezali kolimbola oyo transaction esalaki. Format
ekeseni na transaction na transaction. Lolenge ya pete ya koyeba
exactement ndenge transaction moko boye emonanaka ezali ya kosala que lolenge
ya oyo esangisi yango ebongola na objet ya test, sima ko requêter objet wana.

Ba transactions nionso ezali na ba données te: par défaut, ba transactions ezalaka na "type" ya `null`
mpe ba données ya kobakisa te. API oyo e exposer ba données brutes ya transaction te po
misusu na yango ezali interne, kombo ya bizarre, ekomamaki mabe, confus, ya tina te, to
ekoki ko créer ba problèmes ya sécurité to politique pona ko exposer directement.

Ba transactions ya sika ezo exposer (na ba types correctement écriré, compréhensibles et
utile, raisonnable champs) tango tokoma conscient ya ba cas d\'utilisation pona bango.',
);
  }

}
