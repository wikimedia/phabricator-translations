<?php

final class PhabricatorDashboardPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'You have not created any dashboard panels yet, so you can not add an existing panel.' => 'Nie masz jeszcze utworzonych paneli pulpitu, więc nie możesz dodać istniejącego panelu.',
      'Edit Panel' => 'Edytuj panel',
      'Edit Panel: %s' => 'Edycja panela: %s',
      'No dashboards found.' => 'Nie znaleziono pulpitów.',
      '%s created this dashboard.' => '%s utworzył(a) ten panel.',
      'Query "%s" is unknown to application search engine "%s"!' => 'Zapytanie "%s" jest nieznane aparatowi wyszukiwania aplikacji "%s"!',
      'This dashboard has no panels yet.' => 'Ten pulpit nie ma jeszcze żadnych paneli.',
      'Archive Panel' => 'Archiwizuj panel',
      '%s set the dashboard icon.' => 'Ikona pulpitu została ustawiona przez %s',
      '%s\'s Dashboard' => 'Pulpit użytkownika %s',
      'Customize your homepage with different panels and search queries.' => 'Dostosuj swoją stronę główną za pomocą różnych paneli i zapytań.',
      'Two columns, 1/2 and 1/2' => 'Dwie kolumny, 1/2 i 1/2',
      'You do not have permission to edit this dashboard.' => 'Nie masz uprawnień do edytowania tego pulpitu.',
      'This dashboard will become active again.' => 'Ten pulpit będzie ponownie aktywny.',
      '%s changed this dashboard icon from "%s" to "%s".' => 'Ikona tego pulpitu zmieniona z "%2$s" na "%3$s" przez %1$s.',
      'Layout Mode' => 'Tryb układu',
      'Dashboards' => 'Pulpity',
      'Browse Dashboards' => 'Przeglądaj pulpity',
      'Manage Panels' => 'Zarządzaj panelami',
      '%s activated dashboard panel %s.' => 'Panel %2$s pulpitu został aktywowany przez %1$s.',
      '%s edited dashboard(s) for %s, added %s: %s; removed %s: %s.' => '%s edytował(a) pulpit(y) dla %s; dodane %s: %s; usunięte %s: %s.',
      'This panel will be reactivated and appear in other interfaces as an active panel.' => 'Panel ten zostanie ponownie aktywowany i pojawi się w innych interfejsach jako aktywny panel.',
      '%s activated this dashboard.' => 'Pulpit aktywowany przez %s.',
      'No Panels Exist Yet' => 'Nie istnieją jeszcze panele',
      'Edit Dashboard: %s' => 'Edytuj pulpit: %s',
      'Choose Dashboard Icon' => 'Wybierz ikonę pulpitu',
      'Edit Dashboard' => 'Edytuj pulpit',
      'This panel has type "%s", but that panel type is not known to Phabricator.' => 'Ten panel ma typ "%s", ale ten typ panelu nie jest znany dla Phabricatora.',
      '%s edited panel(s), added %s: %s; removed %s: %s.' => '%s edytował(a) panel(e); dodane %s: %s; usunięte %s: %s.',
      'To Self' => 'Do siebie',
      'Archive Dashboard' => 'Archiwizuj pulpit',
      'Kaboom' => 'Kaboom',
      'Tabs' => 'Karty',
      'Panel' => 'Panel',
      'Sports' => 'Sporty',
      'To render more than %s levels of panels nested inside other panels, purchase a subscription to Phabricator Gold.' => 'Aby renderować więcej niż %s poziomów zagnieżdżenia paneli w innych panelach, wykup subskrypcję Phabricator Gold.',
      'template' => 'szablon',
      'Type a panel name...' => 'Wpisz nazwę panelu...',
      'Unknown Type' => 'Nieznany typ',
      'Plastic Debt' => 'Karta płatnicza',
      'There is only one column in mode full.' => 'Jest tylko jedna kolumna w trybie pełnym.',
      'Activate Panel?' => 'Aktywować panel?',
      'Add some static text to the dashboard. This can be used to provide instructions or context.' => 'Dodaj jakiś statyczny tekst do panelu. Można to wykorzystać do zapewnienia instrukcji lub kontekstu.',
      'You must select a type of panel to create.' => 'Musisz wybrać typ panelu do utworzenia.',
      'Apply transactions to create a new dashboard panel or edit an existing one.' => 'Zastosuj transakcje, aby utworzyć nowy panel pulpitu lub edytować istniejący.',
      'Query Panel' => 'Panel zapytania',
      'This engine is used to modify dashboard panels.' => 'Ten aparat jest używany do modyfikowania paneli pulpitu.',
      'This column does not have any panels yet.' => 'Ta kolumna jeszcze nie ma żadnych paneli.',
      'This panel does not exist, or you do not have permission to see it.' => 'Ten panel nie istnieje lub nie masz wystarczających uprawnień, aby go zobaczyć.',
      'Use tabs to switch between several other panels.' => 'Użyj zakładek, aby przełączać się między wieloma różnymi panelami.',
      '%s created dashboard %s.' => '%s utworzył(a) pulpit %s.',
      '%s activated this panel.' => '%s aktywował(a) ten panel.',
      'Add New Panel' => 'Dodaj nowy panel',
      'Remove Panel' => 'Usuń panel',
      'You must select a destination to install this dashboard.' => 'Musisz wybrać miejsce docelowe, aby zainstalować ten pulpit.',
      'Corned Beef' => 'Hasztag',
      'Choose a panel to add to this dashboard:' => 'Wybierz panel, który chcesz dodać do tego pulpitu:',
      'Blocks' => 'Klocki',
      'Custom Query ("%s")' => 'Własne zapytanie ("%s")',
      'Stay Woke' => 'Obudź się',
      'This panel will be archived and no longer appear in lists of active panels.' => 'Ten panel zostanie zarchiwizowany i nie będzie już wyświetlany na listach aktywnych paneli.',
      'Name of the panel.' => 'Nazwa panela.',
      'All Dashboards' => 'Wszystkie pulpity',
      'Dashboard name is required.' => 'Nazwa pulpitu jest wymagana.',
      'All Panels' => 'Wszystkie panele',
      'You must provide a name for this panel.' => 'Musisz podać nazwę dla tego panelu.',
      'View Dashboard' => 'Wyświetl pulpit',
      'No panels.' => 'Brak paneli.',
      'Start with a simple dashboard with a welcome message, a feed of recent events, and a few starter panels.' => 'Zacznij od prostego pulpitu z wiadomością powitalną, kanałem ostatnich wydarzeń i kilkoma panelami startowymi.',
      'Two columns, 2/3 and 1/3' => 'Dwie kolumny, 2/3 i 1/3',
      'To create a new dashboard panel, you must select a panel type.' => 'Aby utworzyć nowy panel pulpitu, musisz wybrać typ panelu.',
      'Two columns, 1/3 and 2/3' => 'Dwie kolumny, 1/3 i 2/3',
      'Unknown dashboard template %s!' => 'Nieznany szablon pulpitu: %s!',
      'Wayfinding' => 'Kompas',
      'PHP is Life' => 'PHP to życie',
      'Instead, add a new panel.' => 'Zamiast tego dodaj nowy panel.',
      'Add Panel to Dashboard' => 'Dodaj panel do pulpitu',
      'No panels found.' => 'Nie znaleziono paneli.',
      'Create Dashboard Panel' => 'Utwórz panel pulpitu',
      'Ding Ding' => 'Ding Ding',
      'Panels' => 'Panele',
      'Edit Dashboard Panels' => 'Edytuj panele pulpitu',
      'Active Panels' => 'Aktywne panele',
      'Archive Panel?' => 'Zarchiwizować panel?',
      'Create a Dashboard' => 'Utwórz pulpit',
      'Add Panel' => 'Dodaj panel',
      '(None)' => '(brak)',
      'Simple Template' => 'Prosty szablon',
      'Unknown layout mode!' => 'Nieznany tryb układu!',
      'Panel Type' => 'Typ panela',
      'Save Panel' => 'Zapisz panel',
      'Flag' => 'Flaga',
      'Select a panel to add.' => 'Wybierz panel do dodania.',
      'Archived Panels' => 'Zarchiwizowane panele',
      'Please select a valid dashboard.' => 'Wybierz prawidłowy pulpit.',
      'Rename the panel.' => 'Zmień nazwę panela.',
      'Manage Dashboard' => 'Zarządzaj pulpitem',
      'Wireless' => 'Wifi',
      'Panel "%s" already exists on dashboard.' => 'Panel "%s" już istnieje na pulpicie.',
      'The application search engine "%s" is not known to Phabricator!' => 'Aparat wyszukiwania "%s" nie jest znany dla Phabricatora!',
      'Leave this blank for the default number of items.' => 'Pozostaw to puste dla domyślnej liczby elementów.',
      'Arrange Panels' => 'Rozmieść panele',
      'Start with a blank canvas.' => 'Zacznij od pustej siatki.',
      '%s created this panel.' => 'Panel utworzony przez %s.',
      'Are you sure you want to remove this panel?' => 'Czy na pewno chcesz usunąć ten panel?',
      'Activate Dashboard' => 'Aktywuj pulpit',
      '%s archived dashboard panel %s.' => 'Panel %2$s pulpitu został zarchiwizowany przez %1$s.',
      '%s renamed this dashboard from "%s" to "%s".' => 'Nazwa tego pulpitu zmieniona z "%2$s" na "%3$s" przez %1$s.',
      'Browse Dashboard Panels' => 'Przeglądaj panele pulpitu',
      'Choose a dashboard template to start with.' => 'Wybierz szablon pulpitu, od którego chcesz rozpocząć.',
      'Places this dashboard as a menu item on home as a global menu item. It will be available to all users.' => 'Umieszcza ten panel jako element menu strony głównej jako element menu globalnego. Będzie on dostępny dla wszystkich użytkowników.',
      'Missing or Restricted Panel' => 'Brakujący lub zastrzeżony panel',
      'Create New Panel' => 'Utwórz nowy panel',
      'Install Dashboard' => 'Zainstaluj pulpit',
      'Metallica' => 'Metallica',
      'Announcement' => 'Ogłoszenie',
      'Arrange' => 'Rozmieść',
      'No Dashboards' => 'Brak pulpitów',
      'Dashboard Panels' => 'Panele pulpitu',
      'Add Existing Panel' => 'Dodaj istniejący panel',
      'Text Panel' => 'Panel tekstowy',
      'Active Dashboards' => 'Aktywne pulpity',
      'Not a valid panel.' => 'Nieprawidłowy panel.',
      'Knowledge' => 'Wiedza',
      'Create a Panel' => 'Utwórz panel',
      'Personal Dashboard' => 'Osobisty pulpit',
      'Create Panel' => 'Utwórz panel',
      'This is a simple template dashboard. You can edit this panel to change this text and replace it with a welcome message, or leave this placeholder text as-is to give your dashboard a rustic, authentic feel.
    You can drag, remove, add, and edit panels to customize the rest of this dashboard to show the information you want.
    To install this dashboard on the home page, edit your personal or global menu on the homepage and click Dashboard under New Menu Item on the right.' => 'To jest prosty szablon pulpitu. Możesz edytować ten panel, aby zmienić ten tekst i zastąpić go wiadomością powitalną lub pozostawić ten tekst zastępczy tak jak jest, aby nadać pulpitowi wiejski, autentyczny charakter.
    Możesz przeciągać, usuwać, dodawać i edytować panele, aby dostosować pozostałą część pulpitu, aby wyświetlać informacje, które chcesz.
    Aby zainstalować ten pulpit na stronie głównej, edytuj swoje osobiste lub globalne menu na stronie głównej i kliknij Pulpit w sekcji Nowy element menu po prawej stronie.',
      'Global Dashboard' => 'Globalny pulpit',
      'New panel name.' => 'Nazwa nowego panelu.',
      'Menu Label' => 'Etykieta menu',
      'Panel name is required.' => 'Nazwa panelu jest wymagana.',
      'You do not have access to any dashboards. To continue, please create a dashboard first.' => 'Nie masz dostępu do żadnych pulpitów. Aby kontynuować, najpierw utwórz pulpit.',
      'Water Vessel' => 'Wiadro wody',
      'New Panel' => 'Nowy panel',
      'Create Dashboard' => 'Utwórz pulpit',
      'View Panel' => 'Zobacz panel',
    );
  }

}
