<?php

final class PhabricatorTransactionsKg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kg';
  }

  protected function getTranslations() {
    return array(
  'Comment Action Options' => 'Mutindu Mambu ya Kusala',
  'Mentioned In' => 'Bo Me Tala Na',
  'In call to "%s", specified "%s" ("%s") is not supported because it does not implement "%s". Valid object types are: %s.' => 'Na kubinga "%s", "%s" ("%s") ke sadisaka ve sambu yo ke sadilaka ve "%s". Mitindu ya bima ya mbote kele: %s.',
  'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier".' => 'Kubinga na "transaction.search" fwete monisa "objectType" to "objectIdentifier".',
  'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => 'Nge kele ve ti mambu ya MFA ya me kangama na konti na nge, yo yina nge lenda tula ve diboko na kimvuka yai ya mumbongo ti MFA. Yika MFA na konti na nge na %s.',
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
' => 'Ntangu nge ke sala bima na interface ya web, nge lenda sadila ba paramètre ya HTTP sambu na kufulusa na ntwala bisika na mutindu yina. Yo ke pesa nge nzila ya kusala nswalu-nswalu linki na formilere mosi ti bisika ya nkaka yina me fulukaka dezia ti bantalu ya me fwana. 

 Sambu na kufulusa formilere, yantika na kusosa URI sambu na formilere yina nge ke zola kufulusa. Sala yo na nzila ya navigation na application ya me fwana, kukotisa buton ya "Kisadisa" sambu na mutindu ya kima yina nge ke zola kusala, mpi na nima kukotisa URI na bar ya adresi ya navigateur na nge. Mbala mingi yo ta monana bonso yai: 

 ```
%s
``` 

 Kansi, Canal Canal ya Fioti ta vanda kisika yina nge ta tula kopi na nge ya software yai, mpi Canal ya Firoti ta vanda URI sambu na application. Ba application ya nkaka kele na mitindu mingi sambu na kusala bima to URI yina ke monana mwa luswaswanu ti mbandu yai, yo yina URI lenda monana ve kibeni mutindu yai. 

 Sambu na kufulusa formilere, yika ba paramètre ya HTTP ya mbote na URI. Nge fwete manisa na diambu ya mutindu yai: 

 Yo kele na nzila ya 2$?title=Platypus&amp;body=Ornithopter 

 Kana formilere kele ti nzila ya mbote mpi nzila ya mbote, kukwenda na nzila yai ta fulusa bisika yina ti valere "Platypus" mpi "Ornithopter". 

 Mukanda yai ya nkaka ke monisa mambu yina nge lenda yika na mutindu yai mpi mutindu ya kuyidika yo. 


 Bisika ya bo ke sadisaka ---------------- 

 Mutindu yai ke pesaka maboko na mambu yai:',
  'Mentioned Here' => 'Bo Me Tala Awa',
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
' => 'When an object (like a task) is edited, the relevant application creates a
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
useful, reasonable fields) as we become aware of use cases for them.',
);
  }

}
