<?php

final class PhabricatorPolicyNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Access Denied: %s' => 'Toegang geweigerd: %s',
  'is waning' => 'in het laatste kwartier is',
  'Required Capabilities on Other Objects' => 'Vereiste bevoegdheden op andere objecten',
  'Logged in users can take this action.' => 'Aangemelde gebruikers kunnen deze handeling uitvoeren.',
  'Name of the Policy.' => 'Naam van het beleid.',
  'Object URI' => 'Object-URI',
  'when the moon' => 'als de maan',
  'Specify the name of an object to unlock.' => 'Geef de naam op van een object om te ontgrendelen.',
  'Identify each __object__ by passing an object name (like "T123") or a PHID (like "PHID-ABCD-1234...").

Not every type of object has an editable view policy, edit policy, or owner, so not all modes will work with all objects. ' => 'Identificeer elk __object__ door een objectnaam (zoals "T123") of een PHID (zoals "PHID-ABCD-1234...") op te geven.

Niet elk type object heeft een bewerkbaar weergavebeleid, bewerkingsbeleid of eigenaar, dus niet alle modi werken met alle objecten. \\',
  'Lock Create User Policy To Admins' => 'Beleid voor aanmaken van gebruikers beperken tot beheerders',
  'Interact Policy' => 'Interactiebeleid',
  '%s set the effective policy to %s.' => '%s heeft het effectieve beleid ingesteld op %s.',
  'These rules are processed in order.' => 'Deze regels worden op volgorde verwerkt.',
  'When selected as the policy for other objects, this policy will behave like the **Effective Policy**.

**Visible To** and **Editable By** are the policies controlling access to the Named Policy itself.' => 'Wanneer dit beleid voor andere objecten wordt geselecteerd, gedraagt het zich als het **effectieve beleid**.

**Zichtbaar voor** en **bewerkbaar door** zijn de beleidsregels die de toegang tot het benoemde beleid zelf bepalen.',
  'Target Object Type' => 'Doelobjecttype',
  'Implementation of the Global rules' => 'Implementatie van de globale regels',
  'This software has application policies which can dictate whether users can take certain actions, such as creating new users. 

This setting allows for "locking" these policies such that no further edits can be made on a per-policy basis.' => 'Deze software heeft applicatiebeleid dat kan bepalen of gebruikers bepaalde handelingen kunnen uitvoeren, zoals het aanmaken van nieuwe gebruikers. 

Deze instelling maakt het mogelijk om dit beleid te "vergrendelen" zodat er per beleid geen verdere bewerkingen kunnen worden gemaakt.',
  'The Type of objects this policy can apply to. If set, this policy can only be applied to that type of objects, but can use Object Rules that apply to that object.

If not set, this policy can be applied to any object.

You may need to save the Named Policy and edit it again for changes to take effect.' => 'Het type objecten waarop dit beleid van toepassing kan zijn. Indien ingesteld, kan dit beleid alleen op dat type objecten worden toegepast, maar kan het objectregels gebruiken die op dat object van toepassing zijn.

Indien niet ingesteld, kan dit beleid op elk object worden toegepast.

Mogelijk moet u het benoemde beleid opslaan en opnieuw bewerken om de wijzigingen door te voeren.',
  'Users who can see objects in this space:' => 'Gebruikers die objecten in deze ruimte kunnen zien:',
  'After a user passes space policy checks, they must still pass object policy checks.' => 'Nadat een gebruiker de ruimtebeleidscontroles heeft doorstaan, moet deze nog steeds de objectbeleidscontroles doorstaan.',
  'Modified object policies.' => 'Objectbeleid gewijzigd.',
  'User Policies' => 'Gebruikersbeleid',
  'Shift the object between spaces.' => 'Het object tussen ruimtes verplaatsen.',
  'You Shall Not Pass: %s' => 'U mag niet passeren: %s',
  '%s set the effective policy of %s to %s' => '%s heeft het effectieve beleid voor %s ingesteld op %s',
  'is waxing' => 'wassende is',
  'This software allows you to set the visibility of objects (like repositories and tasks) to \'Public\', which means **anyone on the internet can see them, without needing to log in or have an account**.

This is intended for open source projects. Many installs will never want to make anything public, so this policy is disabled by default. You can enable it here, which will let you set the policy for objects to \'Public\'.

Enabling this setting will immediately open up some features, like the user directory. Anyone on the internet will be able to access these features.

With this setting disabled, the \'Public\' policy is not available, and the most open policy is \'All Users\' (which means users must have accounts and be logged in to view things).' => 'Met deze software kunt u de zichtbaarheid van objecten (zoals repositories en taken) instellen op \'Openbaar\', wat betekent dat **iedereen op internet ze kan zien, zonder in te hoeven loggen of een account te hebben**.

Dit is bedoeld voor opensourceprojecten. Veel installaties zullen nooit iets openbaar willen maken, dus dit beleid is standaard uitgeschakeld. U kunt het hier inschakelen, waarmee u het beleid voor objecten op \'Openbaar\' kunt instellen.

Het inschakelen van deze instelling opent onmiddellijk enkele functies, zoals de gebruikerslijst. Iedereen op internet kan dan toegang krijgen tot deze functies.

Met deze instelling uitgeschakeld is het beleid \'Openbaar\' niet beschikbaar en is het meest open beleid \'Alle gebruikers\' (wat betekent dat gebruikers accounts moeten hebben en ingelogd moeten zijn om dingen te bekijken).',
  'Unable to find any object with the specified name ("%s").' => 'Kan geen object vinden met de opgegeven naam ("%s").',
  'You do not have permission to edit this object.' => 'U hebt geen toestemming om dit object te bewerken.',
  'CAPABILITIES' => 'BEVOEGDHEDEN',
  'Map of capabilities to current policies.' => 'Overzicht van bevoegdheden en huidig beleid.',
  'Capability "%s" for user "%s" on object "%s" is being resolved, but was never queued with "addCapability()".' => 'Bevoegdheid "%s" voor gebruiker "%s" op object "%s" wordt opgelost, maar is nooit in de wachtrij geplaatst met "addCapability()".',
  'Other: %s' => 'Overig: %s',
  'Can View' => 'Kan bekijken',
  'Lock specific application policies so they can not be edited.' => 'Specifiek applicatiebeleid vergrendelen zodat het niet kan worden bewerkt.',
  'Only User: %s' => 'Alleen gebruiker: %s',
  'All Named Policies' => 'Alle genoemde beleidsregels',
  'Invalid action \'%s\'!' => 'Onjuiste handeling \'%s\'!',
  'Unlock one or more objects by changing their view policies, edit policies, or owners.' => 'Een of meer objecten ontgrendelen door hun weergavebeleid, bewerkingsbeleid of eigenaren te wijzigen.',
  'Allow Public Visibility' => 'Openbare zichtbaarheid toestaan',
  'Controls who can interact with the object.' => 'Bepaalt wie interactie kan hebben met het object.',
  'A %s cannot be used as an effective policy for a %s' => 'Een %s kan niet als geldig beleid voor %s worden gebruikt',
  'Object Policies' => 'Objectbeleid',
  'Members of Project...' => 'Leden van project...',
  'Two policy rules (of classes "%s" and "%s") define the same object policy key ("%s"), but each object policy rule must use a unique key.' => 'Twee beleidsregels (van klassen "%s" en "%s") definiëren dezelfde objectbeleidssleutel ("%s"), maar elke objectbeleidsregel moet een unieke sleutel gebruiken.',
  'Advanced' => 'Geavanceerd',
  'By default, no one can take this action.' => 'Standaard kan niemand deze handeling uitvoeren.',
  'You must choose a policy.' => 'U moet een beleid kiezen.',
  'Edit Named Policy' => 'Benoemd beleid bewerken',
  'Testing for capability "%s" on an object ("%s") which does not support that capability.' => 'Testen op bevoegdheid "%s" op een object ("%s") dat die bevoegdheid niet ondersteunt.',
  'Change the owner of an object to the specified user.' => 'De eigenaar van een object wijzigen naar de opgegeven gebruiker.',
  'All object types' => 'Alle objecttypen',
  'Deny' => 'Weigeren',
  'Special Rules' => 'Speciale regels',
  'Failed to JSON decode rule data!' => 'JSON-decodering van regelgegevens is mislukt!',
  'Controls who can edit the object.' => 'Bepaalt wie het object kan bewerken.',
  'Other Policies' => 'Overig beleid',
  'Edit %s: %s' => '%s bewerken: %s',
  'Object Policy' => 'Objectbeleid',
  'Can Interact' => 'Kan interactie hebben',
  'These rules are processed in order:' => 'Deze regels worden op volgorde verwerkt:',
  'Members of the project "%s" can take this action.' => 'Leden van het project "%s" kunnen deze handeling uitvoeren.',
  'UNLOCKING' => 'ONTGRENDELEN',
  'Members of a particular project can take this action. (You can not see this object, so the name of this project is restricted.)' => 'Leden van een bepaald project kunnen deze handeling uitvoeren. (U kunt dit object niet zien, dus de naam van dit project is beperkt.)',
  'Named Policy %d: %s' => 'Benoemd beleid %d: %s',
  'Specify the name of exactly one object to show policy information for.' => 'Geef de naam op van precies één object om beleidsinformatie voor weer te geven.',
  'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'Dit object is openbaar en kan door iedereen worden bekeken, zelfs als ze geen account op deze server hebben.',
  'Invalid value `%s`' => 'Incorrecte waarde `%s`',
  'Rename the policy.' => 'Beleid hernoemen.',
  'You do not have the required capability ("%s") to do whatever you are trying to do.' => 'U hebt niet de vereiste bevoegdheid ("%s") om te doen wat u probeert te doen.',
  'Support for Policies' => 'Ondersteuning voor beleid',
  'Allow users to set object visibility to public.' => 'Gebruikers toestaan de zichtbaarheid van objecten op openbaar in te stellen.',
  '%s changed the objects type this policy is applicable to from %s to %s' => '%s heeft het objecttype waarop dit beleid van toepassing is gewijzigd van %s naar %s',
  'Space:' => 'Ruimte:',
  'Change the edit policy of the object.' => 'Het bewerkingsbeleid van het object wijzigen.',
  'Join Policy' => 'Deelnamebeleid',
  'Members Of' => 'Leden van',
  'Invalid rule class \'%s\'!' => 'Onjuiste regelklasse \'%s\'!',
  'Specify the name of an object to show policy information for.' => 'Geef de naam op van een object om beleidsinformatie voor weer te geven.',
  'Select Project' => 'Project selecteren',
  'Policy identifier is an object PHID (\'%s\'), but the provided handle has a different PHID (\'%s\'). The handle must correspond to the policy identifier.' => 'Beleidsidentificatie is een object-PHID (\'%s\'), maar de opgegeven handle heeft een andere PHID (\'%s\'). De handle moet overeenkomen met de beleidsidentificatie.',
  'Select Named Policy' => 'Benoemd beleid selecteren',
  'Unlocking: %s' => 'Ontgrendelen: %s',
  'Change the view policy of an object so that the specified user may view it.' => 'Het weergavebeleid van een object wijzigen zodat de opgegeven gebruiker het kan bekijken.',
  'Applicable To' => 'Van toepassing op',
  '%s can take this action.' => '%s kan deze handeling uitvoeren.',
  'Capability "%s" does not exist.' => 'Bevoegdheid "%s" bestaat niet.',
  'Named Policy has invalid effective policy: %s -> %s' => 'Het benoemde beleid heeft een incorrect effectief beleid: %s -> %s',
  'OBJECT' => 'OBJECT',
  'Note:' => 'Opmerking:',
  'You do not have permission to view policy details.' => 'U hebt geen toestemming om beleidsdetails te bekijken.',
  'Effective Policy' => 'Effectief beleid',
  'Can Edit' => 'Kan bewerken',
  'Type Named Policy\'s name...' => 'Typ de naam van een benoemde beleid...',
  '%s changed the effective policy from %s to %s.' => '%s heeft het effectieve beleid gewijzigd van %s naar %s.',
  'Unable to perform capability tests on an object (of class "%s") with no PHID.' => 'Kan geen bevoegdheidstests uitvoeren op een object (van klasse "%s") zonder PHID.',
  'Edit Policy' => 'Bewerkingsbeleid',
  'Controls who can view the object.' => 'Bepaalt wie het object kan bekijken.',
  'is new' => 'nieuw is',
  'Require Login' => 'Aanmelding vereist',
  'To access this object, users must have first have access capabilities on these other objects:' => 'Om toegang te krijgen tot dit object moeten gebruikers eerst toegangsbevoegdheden hebben op deze andere objecten:',
  '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
  'Members of Project: %s' => 'Leden van project: %s',
  'You do not have permission to create named policies.' => 'U hebt geen toestemming om benoemd beleid te maken.',
  '%s changed the effective policy of %s from %s to %s' => '%s heeft het effectieve beleid van %s gewijzigd van %s naar %s',
  'Specify the name of exactly one object to unlock.' => 'Geef de naam op van precies één object om te ontgrendelen.',
  'Options relating to object visibility.' => 'Opties met betrekking tot objectzichtbaarheid.',
  'This policy rule (of class "%s") does not have an associated object policy key.' => 'Deze beleidsregel (van klasse "%s") heeft geen bijbehorende objectbeleidssleutel.',
  'Custom "%s" Policy' => 'Aangepast "%s"-beleid',
  'Custom Policy' => 'Aangepast beleid',
  'Basic Policies' => 'Basisbeleid',
  'Browse Named Policies' => 'Benoemde beleid bekijken',
  'Change the view policy of the object.' => 'Het weergavebeleid van het object wijzigen.',
  'All Users' => 'Alle gebruikers',
  'Show policy information about an object.' => 'Beleidsinformatie over een object weergeven.',
  'Capability "%s" does not support public policy.' => 'Bevoegdheid "%s" ondersteunt geen openbaar beleid.',
  'Controls who can join the object.' => 'Bepaalt wie kan deelnemen aan het object.',
  'Change the edit policy of an object so that the specified user may edit it.' => 'Het bewerkingsbeleid van een object wijzigen zodat de opgegeven gebruiker het kan bewerken.',
  'No such capability exists. This is a logic error which should be reported as a bug.' => 'Een dergelijke functionaliteit bestaat niet. Dit is een logische fout die als bug gemeld moet worden.',
  '%s changed the objects type policy %s is applicable to from %s to %s' => '%s heeft het objecttypebeleid waarop %s van toepassing is gewijzigd van %s naar %s',
  'Effective Policy is required.' => 'Effectief beleid is vereist.',
  'Administrators can take this action.' => 'Beheerders kunnen deze handeling uitvoeren.',
  'You do not have permission to view this object.' => 'U hebt geen toestemming om dit object te bekijken.',
  'Policy Details: %s' => 'Beleidsdetails: %s',
  'Policy identifier is an object PHID (\'%s\'), but no object handle was provided. A handle must be provided for object policies.' => 'Beleidsidentificatie is een object-PHID (\'%s\'), maar er is geen objecthandle opgegeven. Een handle moet worden opgegeven voor objectbeleid.',
  '%s all other users.' => '%s alle andere gebruikers.',
  'You can not issue a policy query with both %s and %s.' => 'U kunt geen beleidszoekopdracht uitvoeren met zowel %s als %s.',
  'If No Rules Match' => 'Als geen regels overeenkomen',
  'No objects found.' => 'Geen objecten gevonden.',
  'Named Policies' => 'Benoemd beleid',
  'POLICY DETAIL' => 'BELEIDSDETAILS',
  'Named Policy' => 'Benoemd beleid',
  'The space this object is in has a more restrictive view policy ("%s") than the object does ("%s"), so the space\'s view policy is shown as a hint instead of the object policy.' => 'De ruimte waarin dit object zich bevindt heeft een restrictiever weergavebeleid ("%s") dan het object zelf ("%s"), dus het weergavebeleid van de ruimte wordt als hint weergegeven in plaats van het objectbeleid.',
  'Capability "%s" has invalid policy "%s"; "%s" does not exist.' => 'Bevoegdheid "%s" heeft onjuist beleid "%s"; "%s" bestaat niet.',
  'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => 'Dit object bevindt zich in %s en kan alleen worden gezien of bewerkt door gebruikers met toegang om objecten in de ruimte te bekijken.',
  'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'In detail betekent dit dat deze gebruikers deze handeling kunnen uitvoeren, mits ze eerst alle hierboven beschreven controles doorstaan:',
  'Choose which capabilities to unlock with "--view", "--edit", or "--owner".' => 'Kies welke bevoegdheden u wilt ontgrendelen met "--view", "--edit" of "--owner".',
  'None of these policy rules have any effect.' => 'Geen van deze beleidsregels heeft enig effect.',
  'Select a space for the object.' => 'Een ruimte voor het object selecteren.',
  'Save Policy' => 'Beleid opslaan',
  'This object is in a space you do not have permission to access.' => 'Dit object bevindt zich in een ruimte waartoe u geen toegang hebt.',
  'Spaces Documentation' => 'Documentatie over ruimtes',
  'Unknown Policy' => 'Onbekend beleid',
  'Change the join policy of the object.' => 'Het deelnamebeleid van het object wijzigen.',
  'is full' => 'vol is',
  'You can not make that edit, because it would remove your ability to \'%s\' the object.' => 'U kunt die bewerking niet uitvoeren, omdat u daarmee uw mogelijkheid om het object te \'%s\' zou verliezen.',
  'Failed to create usable reference object for named policy %s - target type is %s' => 'Het is niet gelukt een bruikbaar referentieobject te maken voor het benoemde beleid %s - het doeltype is %s',
  'Policy \'%s\' is not a global policy!' => 'Beleid \'%s\' is geen globaal beleid!',
  'You do not have permission to join this object.' => 'U hebt geen toestemming om deel te nemen aan dit object.',
  'If no rules match, %s all other users.' => 'Als geen regels overeenkomen, %s alle andere gebruikers.',
  'Can Create Named Policies' => 'Kan benoemd beleid maken.',
  '[Policy]' => '[Beleid]',
  'This object has an unknown or invalid policy setting ("%s").' => 'Dit object heeft een onbekende of onjuiste beleidsinstelling ("%s").',
  'UNLOCKED' => 'ONTGRENDELD',
  'This object has special rules which override normal object policy rules:' => 'Dit object heeft speciale regels die de normale objectbeleidsregels overschrijven:',
  'Can Join' => 'Kan deelnemen',
  'This object has a custom policy controlling who can take this action.' => 'Dit object heeft een aangepast beleid dat bepaalt wie deze handeling kan uitvoeren.',
  'New space PHID.' => 'Nieuwe ruimte-PHID.',
  'Capability "%s" has invalid policy "%s".' => 'Bevoegdheid "%s" heeft onjuist beleid "%s".',
  'You do not have permission to interact with this object.' => 'U hebt geen toestemming om interactie te hebben met dit object.',
  'Change the interaction policy of the object.' => 'Het interactiebeleid van het object wijzigen.',
);
  }

}
