<?php

final class PhabricatorPolicySk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Access Denied: %s' => 'Prístup zamietnutý: %s',
  'is waning' => 'ubúda',
  'Required Capabilities on Other Objects' => 'Požadované oprávnenia na iných objektoch',
  'Logged in users can take this action.' => 'Túto akciu môžu vykonať prihlásení používatelia.',
  'Name of the Policy.' => 'Názov zásady.',
  'Object URI' => 'URI objektu',
  'when the moon' => 'keď mesiac',
  'Specify the name of an object to unlock.' => 'Zadajte názov objektu, ktorý sa má odomknúť.',
  'Identify each __object__ by passing an object name (like "T123") or a PHID (like "PHID-ABCD-1234...").

Not every type of object has an editable view policy, edit policy, or owner, so not all modes will work with all objects. ' => 'Každý __objekt__ identifikujte zadaním názvu objektu (napríklad „T123“) alebo PHID (napríklad „PHID-ABCD-1234...“).

Nie každý typ objektu má upraviteľnú zásadu zobrazenia, zásadu úpravy alebo vlastníka, takže nie všetky režimy budú fungovať so všetkými objektmi.',
  'Lock Create User Policy To Admins' => 'Uzamknúť zásadu vytvárania používateľov na správcov',
  'Interact Policy' => 'Zásada interakcie',
  '%s set the effective policy to %s.' => '%s nastavil efektívnu zásadu na %s.',
  'These rules are processed in order.' => 'Tieto pravidlá sa spracúvajú v poradí.',
  'When selected as the policy for other objects, this policy will behave like the **Effective Policy**.

**Visible To** and **Editable By** are the policies controlling access to the Named Policy itself.' => 'Keď je táto zásada vybraná ako zásada iných objektov, bude sa správať ako **efektívna zásada**.

**Viditeľné pre** a **Upraviteľné používateľmi** sú zásady, ktoré riadia prístup k samotnej pomenovanej zásade.',
  'Target Object Type' => 'Typ cieľového objektu',
  'Implementation of the Global rules' => 'Implementácia globálnych pravidiel',
  'This software has application policies which can dictate whether users can take certain actions, such as creating new users. 

This setting allows for "locking" these policies such that no further edits can be made on a per-policy basis.' => 'Tento softvér má zásady aplikácií, ktoré môžu určovať, či používatelia môžu vykonávať určité akcie, napríklad vytvárať nových používateľov. 

Toto nastavenie umožňuje tieto zásady „uzamknúť“ tak, aby sa v nich už nedali robiť ďalšie úpravy po jednotlivých zásadách.',
  'The Type of objects this policy can apply to. If set, this policy can only be applied to that type of objects, but can use Object Rules that apply to that object.

If not set, this policy can be applied to any object.

You may need to save the Named Policy and edit it again for changes to take effect.' => 'Typ objektov, na ktoré sa dá táto zásada použiť. Ak je nastavený, túto zásadu je možné použiť iba na daný typ objektov, môže však používať pravidlá objektov, ktoré platia pre daný objekt.

Ak nie je nastavený, túto zásadu je možné použiť na ľubovoľný objekt.

Aby sa zmeny prejavili, možno budete musieť pomenovanú zásadu uložiť a znova upraviť.',
  'Users who can see objects in this space:' => 'Používatelia, ktorí môžu vidieť objekty v tomto priestore:',
  'After a user passes space policy checks, they must still pass object policy checks.' => 'Aj keď používateľ prejde kontrolami zásad priestoru, musí ešte prejsť kontrolami zásad objektu.',
  'Modified object policies.' => 'Upravené zásady objektu.',
  'User Policies' => 'Zásady používateľov',
  'Shift the object between spaces.' => 'Presunúť objekt medzi priestormi.',
  'You Shall Not Pass: %s' => 'Neprejdeš: %s',
  '%s set the effective policy of %s to %s' => '%s nastavil efektívnu zásadu %s na %s',
  'is waxing' => 'pribúda',
  'This software allows you to set the visibility of objects (like repositories and tasks) to \'Public\', which means **anyone on the internet can see them, without needing to log in or have an account**.

This is intended for open source projects. Many installs will never want to make anything public, so this policy is disabled by default. You can enable it here, which will let you set the policy for objects to \'Public\'.

Enabling this setting will immediately open up some features, like the user directory. Anyone on the internet will be able to access these features.

With this setting disabled, the \'Public\' policy is not available, and the most open policy is \'All Users\' (which means users must have accounts and be logged in to view things).' => 'Tento softvér vám umožňuje nastaviť viditeľnosť objektov (napríklad repozitárov a úloh) na „verejnú“, čo znamená, že **ich môže vidieť ktokoľvek na internete bez toho, aby sa musel prihlásiť alebo mať účet**.

Je to určené pre projekty s otvoreným zdrojovým kódom. Mnohé inštalácie nebudú chcieť zverejniť nikdy nič, preto je táto zásada predvolene vypnutá. Tu ju môžete zapnúť, čo vám umožní nastaviť zásadu objektov na „verejnú“.

Zapnutie tohto nastavenia okamžite sprístupní niektoré funkcie, napríklad adresár používateľov. K týmto funkciám bude mať prístup ktokoľvek na internete.

Keď je toto nastavenie vypnuté, zásada „verejná“ nie je k dispozícii a najotvorenejšou zásadou je „všetci používatelia“ (to znamená, že používatelia musia mať účet a byť prihlásení, aby si obsah mohli zobraziť).',
  'Unable to find any object with the specified name ("%s").' => 'Nepodarilo sa nájsť žiadny objekt so zadaným názvom („%s“).',
  'You do not have permission to edit this object.' => 'Nemáte oprávnenie upraviť tento objekt.',
  'CAPABILITIES' => 'OPRÁVNENIA',
  'Map of capabilities to current policies.' => 'Mapa oprávnení na aktuálne zásady.',
  'Capability "%s" for user "%s" on object "%s" is being resolved, but was never queued with "addCapability()".' => 'Oprávnenie „%s“ pre používateľa „%s“ na objekte „%s“ sa vyhodnocuje, nebolo však nikdy zaradené pomocou „addCapability()“.',
  'Other: %s' => 'Iné: %s',
  'Can View' => 'Môže zobraziť',
  'Lock specific application policies so they can not be edited.' => 'Uzamknúť konkrétne zásady aplikácií tak, aby sa nedali upravovať.',
  'Only User: %s' => 'Iba používateľ: %s',
  'All Named Policies' => 'Všetky pomenované zásady',
  'Invalid action \'%s\'!' => 'Neplatná akcia „%s“!',
  'Unlock one or more objects by changing their view policies, edit policies, or owners.' => 'Odomknúť jeden alebo viac objektov zmenou ich zásad zobrazenia, zásad úpravy alebo vlastníkov.',
  'Allow Public Visibility' => 'Povoliť verejnú viditeľnosť',
  'Controls who can interact with the object.' => 'Riadi, kto môže s objektom interagovať.',
  'A %s cannot be used as an effective policy for a %s' => '%s nie je možné použiť ako efektívnu zásadu pre %s',
  'Object Policies' => 'Zásady objektov',
  'Members of Project...' => 'Členovia projektu...',
  'Two policy rules (of classes "%s" and "%s") define the same object policy key ("%s"), but each object policy rule must use a unique key.' => 'Dve pravidlá zásad (tried „%s“ a „%s“) definujú rovnaký kľúč zásady objektu („%s“), no každé pravidlo zásady objektu musí používať jedinečný kľúč.',
  'Advanced' => 'Rozšírené',
  'By default, no one can take this action.' => 'Predvolene túto akciu nemôže vykonať nikto.',
  'You must choose a policy.' => 'Musíte vybrať zásadu.',
  'Edit Named Policy' => 'Upraviť pomenovanú zásadu',
  'Testing for capability "%s" on an object ("%s") which does not support that capability.' => 'Testuje sa oprávnenie „%s“ na objekte („%s“), ktorý toto oprávnenie nepodporuje.',
  'Change the owner of an object to the specified user.' => 'Zmeniť vlastníka objektu na zadaného používateľa.',
  'All object types' => 'Všetky typy objektov',
  'Deny' => 'Zamietnuť',
  'Special Rules' => 'Osobitné pravidlá',
  'Failed to JSON decode rule data!' => 'Nepodarilo sa dekódovať údaje pravidla z JSON!',
  'Controls who can edit the object.' => 'Riadi, kto môže objekt upravovať.',
  'Other Policies' => 'Ostatné zásady',
  'Edit %s: %s' => 'Upraviť %s: %s',
  'Object Policy' => 'Zásada objektu',
  'Can Interact' => 'Môže interagovať',
  'These rules are processed in order:' => 'Tieto pravidlá sa spracúvajú v poradí:',
  'Members of the project "%s" can take this action.' => 'Túto akciu môžu vykonať členovia projektu „%s“.',
  'UNLOCKING' => 'ODOMYKANIE',
  'Members of a particular project can take this action. (You can not see this object, so the name of this project is restricted.)' => 'Túto akciu môžu vykonať členovia určitého projektu. (Tento objekt nemôžete vidieť, takže názov tohto projektu je obmedzený.)',
  'Named Policy %d: %s' => 'Pomenovaná zásada %d: %s',
  'Specify the name of exactly one object to show policy information for.' => 'Zadajte názov presne jedného objektu, o ktorom sa majú zobraziť informácie o zásadách.',
  'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'Tento objekt je verejný a môže si ho zobraziť ktokoľvek, aj keď nemá účet na tomto serveri.',
  'Invalid value `%s`' => 'Neplatná hodnota `%s`',
  'Rename the policy.' => 'Premenovať zásadu.',
  'You do not have the required capability ("%s") to do whatever you are trying to do.' => 'Nemáte požadované oprávnenie („%s“) na to, čo sa pokúšate urobiť.',
  'Support for Policies' => 'Podpora zásad',
  'Allow users to set object visibility to public.' => 'Umožniť používateľom nastaviť viditeľnosť objektov na verejnú.',
  '%s changed the objects type this policy is applicable to from %s to %s' => '%s zmenil typ objektov, na ktoré je táto zásada použiteľná, z %s na %s',
  'Space:' => 'Priestor:',
  'Change the edit policy of the object.' => 'Zmeniť zásadu úpravy objektu.',
  'Join Policy' => 'Zásada pripojenia',
  'Members Of' => 'Členovia',
  'Invalid rule class \'%s\'!' => 'Neplatná trieda pravidla „%s“!',
  'Specify the name of an object to show policy information for.' => 'Zadajte názov objektu, o ktorom sa majú zobraziť informácie o zásadách.',
  'Select Project' => 'Vybrať projekt',
  'Policy identifier is an object PHID (\'%s\'), but the provided handle has a different PHID (\'%s\'). The handle must correspond to the policy identifier.' => 'Identifikátor zásady je PHID objektu („%s“), ale poskytnutý ovládač má iný PHID („%s“). Ovládač musí zodpovedať identifikátoru zásady.',
  'Select Named Policy' => 'Vybrať pomenovanú zásadu',
  'Unlocking: %s' => 'Odomyká sa: %s',
  'Change the view policy of an object so that the specified user may view it.' => 'Zmeniť zásadu zobrazenia objektu tak, aby si ho zadaný používateľ mohol zobraziť.',
  'Applicable To' => 'Použiteľné na',
  '%s can take this action.' => 'Túto akciu môže vykonať %s.',
  'Capability "%s" does not exist.' => 'Oprávnenie „%s“ neexistuje.',
  'Named Policy has invalid effective policy: %s -> %s' => 'Pomenovaná zásada má neplatnú efektívnu zásadu: %s -> %s',
  'OBJECT' => 'OBJEKT',
  'Note:' => 'Poznámka:',
  'You do not have permission to view policy details.' => 'Nemáte oprávnenie zobraziť podrobnosti zásad.',
  'Effective Policy' => 'Efektívna zásada',
  'Can Edit' => 'Môže upravovať',
  'Type Named Policy\'s name...' => 'Zadajte názov pomenovanej zásady...',
  '%s changed the effective policy from %s to %s.' => '%s zmenil efektívnu zásadu z %s na %s.',
  'Unable to perform capability tests on an object (of class "%s") with no PHID.' => 'Na objekte (triedy „%s“) bez PHID nie je možné vykonať testy oprávnení.',
  'Edit Policy' => 'Zásada úpravy',
  'Controls who can view the object.' => 'Riadi, kto môže objekt zobraziť.',
  'is new' => 'je nový',
  'Require Login' => 'Vyžadovať prihlásenie',
  'To access this object, users must have first have access capabilities on these other objects:' => 'Na prístup k tomuto objektu musia mať používatelia najprv prístupové oprávnenia na týchto ďalších objektoch:',
  '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
  'Members of Project: %s' => 'Členovia projektu: %s',
  'You do not have permission to create named policies.' => 'Nemáte oprávnenie vytvárať pomenované zásady.',
  '%s changed the effective policy of %s from %s to %s' => '%s zmenil efektívnu zásadu %s z %s na %s',
  'Specify the name of exactly one object to unlock.' => 'Zadajte názov presne jedného objektu, ktorý sa má odomknúť.',
  'Options relating to object visibility.' => 'Možnosti týkajúce sa viditeľnosti objektov.',
  'This policy rule (of class "%s") does not have an associated object policy key.' => 'Toto pravidlo zásady (triedy „%s“) nemá priradený kľúč zásady objektu.',
  'Custom "%s" Policy' => 'Vlastná zásada „%s“',
  'Custom Policy' => 'Vlastná zásada',
  'Basic Policies' => 'Základné zásady',
  'Browse Named Policies' => 'Prehliadať pomenované zásady',
  'Change the view policy of the object.' => 'Zmeniť zásadu zobrazenia objektu.',
  'All Users' => 'Všetci používatelia',
  'Show policy information about an object.' => 'Zobraziť informácie o zásadách objektu.',
  'Capability "%s" does not support public policy.' => 'Oprávnenie „%s“ nepodporuje verejnú zásadu.',
  'Controls who can join the object.' => 'Riadi, kto sa môže k objektu pripojiť.',
  'Change the edit policy of an object so that the specified user may edit it.' => 'Zmeniť zásadu úpravy objektu tak, aby ho zadaný používateľ mohol upravovať.',
  'No such capability exists. This is a logic error which should be reported as a bug.' => 'Takéto oprávnenie neexistuje. Ide o logickú chybu, ktorú by ste mali nahlásiť ako chybu.',
  '%s changed the objects type policy %s is applicable to from %s to %s' => '%s zmenil typ objektov, na ktoré je zásada %s použiteľná, z %s na %s',
  'Effective Policy is required.' => 'Efektívna zásada je povinná.',
  'Administrators can take this action.' => 'Túto akciu môžu vykonať správcovia.',
  'You do not have permission to view this object.' => 'Nemáte oprávnenie zobraziť tento objekt.',
  'Policy Details: %s' => 'Podrobnosti zásady: %s',
  'Policy identifier is an object PHID (\'%s\'), but no object handle was provided. A handle must be provided for object policies.' => 'Identifikátor zásady je PHID objektu („%s“), ale nebol poskytnutý žiadny ovládač objektu. Pri zásadách objektov musí byť ovládač poskytnutý.',
  '%s all other users.' => '%s všetkých ostatných používateľov.',
  'You can not issue a policy query with both %s and %s.' => 'Nie je možné zadať dopyt na zásady súčasne s %s aj %s.',
  'If No Rules Match' => 'Ak nezodpovedá žiadne pravidlo',
  'No objects found.' => 'Nenašli sa žiadne objekty.',
  'Named Policies' => 'Pomenované zásady',
  'POLICY DETAIL' => 'PODROBNOSTI ZÁSADY',
  'Named Policy' => 'Pomenovaná zásada',
  'The space this object is in has a more restrictive view policy ("%s") than the object does ("%s"), so the space\'s view policy is shown as a hint instead of the object policy.' => 'Priestor, v ktorom sa tento objekt nachádza, má prísnejšiu zásadu zobrazenia („%s“) než samotný objekt („%s“), takže sa namiesto zásady objektu zobrazuje ako pomôcka zásada priestoru.',
  'Capability "%s" has invalid policy "%s"; "%s" does not exist.' => 'Oprávnenie „%s“ má neplatnú zásadu „%s“; „%s“ neexistuje.',
  'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => 'Tento objekt sa nachádza v %s a môžu ho vidieť alebo upravovať iba používatelia s prístupom na zobrazenie objektov v tomto priestore.',
  'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'Konkrétne to znamená, že títo používatelia môžu vykonať túto akciu, ak najprv prejdú všetkými kontrolami opísanými vyššie:',
  'Choose which capabilities to unlock with "--view", "--edit", or "--owner".' => 'Pomocou „--view“, „--edit“ alebo „--owner“ vyberte, ktoré oprávnenia sa majú odomknúť.',
  'None of these policy rules have any effect.' => 'Žiadne z týchto pravidiel zásad nemá nijaký účinok.',
  'Select a space for the object.' => 'Vyberte priestor pre objekt.',
  'Save Policy' => 'Uložiť zásadu',
  'This object is in a space you do not have permission to access.' => 'Tento objekt sa nachádza v priestore, ku ktorému nemáte prístupové oprávnenie.',
  'Spaces Documentation' => 'Dokumentácia k priestorom',
  'Unknown Policy' => 'Neznáma zásada',
  'Change the join policy of the object.' => 'Zmeniť zásadu pripojenia objektu.',
  'is full' => 'je v splne',
  'You can not make that edit, because it would remove your ability to \'%s\' the object.' => 'Túto úpravu nemôžete vykonať, pretože by vám odobrala možnosť „%s“ tohto objektu.',
  'Failed to create usable reference object for named policy %s - target type is %s' => 'Nepodarilo sa vytvoriť použiteľný referenčný objekt pre pomenovanú zásadu %s – cieľový typ je %s',
  'Policy \'%s\' is not a global policy!' => 'Zásada „%s“ nie je globálna zásada!',
  'You do not have permission to join this object.' => 'Nemáte oprávnenie pripojiť sa k tomuto objektu.',
  'If no rules match, %s all other users.' => 'Ak nezodpovedá žiadne pravidlo, %s všetkých ostatných používateľov.',
  'Can Create Named Policies' => 'Môže vytvárať pomenované zásady',
  '[Policy]' => '[Policy]',
  'This object has an unknown or invalid policy setting ("%s").' => 'Tento objekt má neznáme alebo neplatné nastavenie zásady („%s“).',
  'UNLOCKED' => 'ODOMKNUTÉ',
  'This object has special rules which override normal object policy rules:' => 'Tento objekt má osobitné pravidlá, ktoré prevažujú nad bežnými pravidlami zásad objektu:',
  'Can Join' => 'Môže sa pripojiť',
  'This object has a custom policy controlling who can take this action.' => 'Tento objekt má vlastnú zásadu, ktorá riadi, kto môže túto akciu vykonať.',
  'New space PHID.' => 'Nový PHID priestoru.',
  'Capability "%s" has invalid policy "%s".' => 'Oprávnenie „%s“ má neplatnú zásadu „%s“.',
  'You do not have permission to interact with this object.' => 'Nemáte oprávnenie interagovať s týmto objektom.',
  'Change the interaction policy of the object.' => 'Zmeniť zásadu interakcie objektu.',
);
  }

}
