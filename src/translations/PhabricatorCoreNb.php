<?php

final class PhabricatorCoreNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Question' => 'Spørsmål',
      '%s edited %s.' => '%s redigerte %s.',
      'View \'%s\' does not support children.' => 'Visningen «%s» støtter ikke barn.',
      'Move Document' => 'Flytt dokument',
      'Maximum must be larger than minimum.' => 'Maksimumen må være større enn minimumen.',
      'User "%s" is not a valid user.' => 'Brukeren «%s» er ikke en gyldig bruker.',
      'No config value specified for key \'%s\'.' => 'Ingen konfigurasjonsverdi spesifisert for nøkkelen «%s».',
      'Creators' => 'Skapere',
      'An absolute date, as a string.' => 'En absolutt dato, som streng.',
      'Your browser timezone setting differs from the timezone setting in your profile, click to reconcile.' => 'Tidssoneinnstillingene i nettleseren din er forskjellige fra de i profilen din; klikk for å endre.',
      'Minus' => 'Minus',
      'OPTIMIZE' => 'OPTIMER',
      'Create Document' => 'Opprett dokument',
      'Commented On' => 'Kommenterte på',
      '%s added %s task(s): %s.' => '%s la til %s oppgave(r): %s.',
      'XHProf' => 'XHProf',
      'Unsupported action "%s".' => 'Ustøttet handling «%s».',
      'Reopened' => 'Gjenåpnet',
      'Untitled Document' => 'Dokument uten tittel',
      'Favorites' => 'Favoritter',
      'italic text' => 'kursiv tekst',
      'Custom' => 'Tilpasset',
      '%s (Preview)' => '%s (forhåndsvis)',
      'Tasks' => 'Oppgaver',
      'You are trying to save some data to permanent storage, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => 'Du prøver å lagre data til Phabricator, men forespørselen netteleser din gjorde inkluderte en gal nøkkel. Last siden på nytt og prøv igjen. Du må kanskje fjerne informasjonskapslene dine.',
      '%s MB' => '%s MB',
      'Inactive' => 'Inaktiv',
      'Email Addresses' => 'Epostadresser',
      'Orange' => 'Oransje',
      'Failed' => 'Mislyktes',
      'Upload Picture' => 'Last opp bilde',
      'Find results with any closed status.' => 'Finn resultater med status som lukket.',
      'Packages' => 'Pakker',
      'Assigned to Me' => 'Tildelt meg',
      'Author: %s' => 'Forfatter: %s',
      'Old Value' => 'Gammel verdi',
      'Revoke' => 'Tilbakekall',
      'This query ("%s") does not support sorting by order key "%s". Supported orders are: %s.' => 'Denne spørringen («%s») støtter ikke sortering etter nøkkelen %s. Støttede sorteringer er: %s.',
      '%s is already archived, and can not be cancelled.' => '%s er allerede arkivert, og kan ikke avbrytes.',
      'Exporting Data...' => 'Eksporterer data …',
      'Administrators' => 'Administratorer',
      'Length parameter in %s must be at least %s, but %s was provided.' => 'Lengdeparameteren i %s må være minst %s, men %s ble gitt.',
      '%s removed %s as %s.' => '%s fjernet %s som %s.',
      'Overview' => 'Oversikt',
      'Example' => 'Eksempel',
      '%s confirmed this job.' => '%s bekreftet denne jobben.',
      'Changes discarded.' => 'Endringer forkastet.',
      'Previous Day' => 'Forrige dag',
      'MODIFIED' => 'ENDRET',
      '(Use Default)' => '(Bruk standard)',
      'Main Request' => 'Hovedforespørsel',
      'Unknown Error' => 'Ukjent feil',
      'Daemons' => 'Veivisere',
      '%s added %s task(s) to %s: %s.' => '%s la til %s oppgave(r) til %s: %s.',
      'Current Tasks' => 'Gjeldende oppgaver',
      'Summary' => 'Sammendrag',
      'Failed to write %d byte(s) to "%s".' => 'Kunne ikke skrive %s byte til «%s».',
      'Current Application' => 'Gjeldende applikasjon',
      'Duration' => 'Varighet',
      'Meme' => 'Meme',
      '(%s -> %s @ %s) %s' => '(%s -> %s @ %s) %s',
      'Comma-Separated Values (.csv)' => 'Komma-atskilte verdier (.svg)',
      'Paths' => 'Stier',
      'OLD MySQL VERSION' => 'GAMMEL MySQL-VERSJON',
      'Custom Fields' => 'Egendefinerte felter',
      'Task %s complete! Moved to archive.' => 'Oppgava %s er komplett! Flyttet til arkivet.',
      'Comment' => 'Kommentar',
      'Create a Task' => 'Opprett en oppgave',
      'Failure' => 'Feil',
      'Group' => 'Gruppe',
      'Type an object name...' => 'Skriv inn et objektnavn …',
      'Menu contains duplicate items with key \'%s\'!' => 'Menyen inneholder dublettelementer med nøkkelen «%s»!',
      'Other Project...' => 'Annet prosjekt …',
      'Mixture of hashtags and PHIDs.' => 'Blanding av emneknagger og PHID-er.',
      'Changes made by bulk update.' => 'Endringer gjort i masseoppdatering.',
      'Tomorrow' => 'I morgen',
      'Variable' => 'Variabel',
      'Bold' => 'Halvfet',
      'Edit Identity' => 'Rediger identitet',
      'Analyzing tables...' => 'Analyserer tabeller …',
      'Failed to write %d byte(s) to file "%s".' => 'Kunne ikke skrive %s byte til fila «%s».',
      'Expiration' => 'Utløpstid',
      'Grey' => 'Grå',
      'Color' => 'Farge',
      'Order' => 'Rekkefølge',
      'Set Field Value' => 'Sett feltverdi',
      'Protocol' => 'Protokoll',
      'Administrator' => 'Administrator',
      'Worker has no task ID.' => 'Arbeider har ingen oppgave-ID.',
      'Complete' => 'Ferdig',
      'Open Status' => 'Åpen status',
      'Visible' => 'Synlig',
      'Enable' => 'Slå på',
      'Active Revisions' => 'Aktive revisjoner',
      'Up' => 'Opp',
      'Direct Subtask' => 'Direkte underoppgave',
      'HMAC-SHA256 requires a nonempty key.' => 'HMAC-SHA256 krever en ikke-tom nøkkel.',
      'Team' => 'Lag',
      'Almanac Services' => 'Almanac-tjenester',
      '(Show All)' => '(Vis alle)',
      'Drafts' => 'Kladder',
      'Drydock' => 'Drydock',
      'Wed' => 'Ons',
      'Find results with no value.' => 'Finn resultater uten verdi.',
      'A relative date, as a string.' => 'En relativ dato, som streng.',
      'Unknown mode \'%s\', should be \'r\' or \'w\'.' => 'Ukjent modus «%s», burde være «r» eller «w».',
      'Draft' => 'Kladd',
      'Today' => 'I dag',
      '%s checked %s.' => '%s sjekket %s.',
      'username' => 'brukernavn',
      'Mon' => 'Man',
      'Limit' => 'Grense',
      'Browse Statuses' => 'Gå gjennom statuser',
      'Metadata' => 'Metadata',
      'Show Older Changes' => 'Vis eldre endringer',
      'Current Algorithm' => 'Gjeldende algoritmer',
      'Any Closed Status' => 'Enhver lukket-status',
      'The version control system, either "svn", "hg" or "git".' => 'Versjonskontrollsystemet, enten «svn», «hg» eller «git».',
      'Coverage (All)' => 'Dekning (alle)',
      '%s %s' => '%s %s',
      'No notifications.' => 'Ingen varsler.',
      'Parents' => 'Foreldre',
      'Object' => 'Objekt',
      'Simple Subtypes' => 'Enkle undertyper',
      'Highlight As...' => 'Marker som …',
      'Status Name' => 'Statusnavn',
      'Conpherence' => 'Conpherence',
      'Find Phurl:' => 'Finn Phurl:',
      'File' => 'Fil',
      'Badges' => 'Merker',
      'Extracting "%s"...' => 'Henter «%s» …',
      'Choose a policy with "%s", "%s" or "%s".' => 'Velg en politikk med «%s», «%s» eller «%s».',
      'Copied to multiple locations:' => 'Kopiert til flere plasseringer:',
      'Note' => 'Merknad',
      'Plus' => 'Pluss',
      'Version' => 'Versjon',
      'Submit' => 'Send',
      'Revisions' => 'Revisjoner',
      'Metronome frequency must be 1 or more.' => 'Metronome-frekvens må være 1 eller mer.',
      '%s:' => '%s:',
      'Continue' => 'Fortsett',
      'Unit Test' => 'Enhetstest',
      'All Documents' => 'Alle dokumenter',
      '%s was cancelled.' => '%s ble avbrutt.',
      '<incomplete key>' => '<ufullstendig nøkkel>',
      'Found unexpected job status ("%s").' => 'Fant uforventet jobbstatus («%s»).',
      'Quote' => 'Sitat',
      'Folder' => 'Mappe',
      'This was an Ajax request.' => 'Dette var en Ajax-forespørsel.',
      'Username is required.' => 'Brukernavn er påkrevd.',
      'Empty' => 'Tom',
      'Next Day' => 'Neste dag',
      '<Unknown: %s>' => '<Ukjent: %s>',
      'Service' => 'Tjeneste',
      'Continue anyway?' => 'Fortsette likevel?',
      'Edit Menu' => 'Rediger meny',
      'Waiting' => 'Venter',
      '%s' => '%s',
      'In Use' => 'I bruk',
      'Yellow' => 'Gul',
      'Thu' => 'Tor',
      'Sent' => 'Sendt',
      '%s marked this job complete.' => '%s merket denne jobben som ferdig.',
      'Welcome to %s' => 'Velkommen til %s',
      'Learn More' => 'Lær mer',
      '· · ·' => '…',
      '"%s"' => '«%s»',
      'Task class \'%s\' does not exist!' => 'Oppgaveklassen «%s» finnes ikke!',
      'Allow' => 'Tillat',
      'Broken' => 'Ødelagt',
      'Italics' => 'Kursiv',
      'Any Value' => 'Enhver verdi',
      'Needs Attention' => 'Trenger oppmerksomhet',
      'Type' => 'Type',
      'Add New Address' => 'Legg til ny adresse',
      'From' => 'Fra',
      'Edit Package' => 'Rediger pakke',
      'Reset Password' => 'Nullstill passord',
      'Welcome to %s!' => 'Velkommen til Phabricator.',
      'Compare' => 'Sammenlign',
      '%s has invited you to join %s.' => '%s har invitert deg til å bli med i Phabricator.',
      'Custom Message' => 'Egendefinert melding',
      'Set Password' => 'Sett passord',
    );
  }

}
