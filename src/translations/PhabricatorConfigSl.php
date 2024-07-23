<?php

final class PhabricatorConfigSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Array containing list of uninstalled applications.' => 'Matrika s seznamom nenameščenih aplikacij.',
      'Column/Key' => 'Stolpec/ključ',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing applications or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'POMEMBNO: Predhodni tok ne zagotavlja podpore za prototipne aplikacije.
    Phabricator vključuje prototipne aplikacije, ki so v **zgodnji fazi razvoja**. Privzeto prototipne aplikacije niso nameščene, ker pogosto še niso dovolj razvite, da bi bile splošno uporabne. To možnost lahko omogočite, da jih namestite, če razvijate Phabricator ali vas zanima predogled prihajajočih funkcij.
    Če želite izvedeti več o prototipih, glejte [[%s|%s]].
    Ko omogočite prototipe, jih lahko selektivno odstranite (kot običajne aplikacije).',
      'Table' => 'Tabela',
      'Alternative URIs that can access this service.' => 'Alternativni URI-ji, ki lahko dostopajo do Phabricatorja.',
      'No Email Preferences Link' => 'Ni povezave do e-poštnih nastavitev',
      'No active repositories have outstanding errors.' => 'Nobena aktivna shramba nima izrazitih napak.',
      'Usage' => 'Uporaba',
      'Access log format.' => 'Format dnevnika dostopa.',
      'Repository Errors' => 'Napake shrambe',
      'This table can use a better table engine.' => 'Ta tabela lahko uporablja boljši motor za tabele.',
      'Purge Caches' => 'Počisti predpomnilnike',
      'Allow editing' => 'Dovoli urejanje',
      'Multiple %s subclasses contain an option named \'%s\'!' => 'Več podrazredov %s vsebuje možnost z imenom »%s«!',
      'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Orodje Pygments bi moralo biti nameščeno in omogočati napredno označevanje skladnje.',
      'Database Servers' => 'Podatkovni strežniki',
      'Search Servers' => 'Poišči strežnike',
      'No notification servers are configured.' => 'Konfiguriran ni noben strežnik za obvestila.',
      'Prevent editing' => 'Prepreči urejanje',
      'Exception Handlers' => 'Upravitelji izjem',
      'Notification Servers' => 'Strežniki obvestil',
      'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.
    Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:
      - `name` The name of the item.
      - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Omogoča vam, da na večino strani dodate nogo s povezavami. Te povezave boste morda želeli uporabiti za usmeritev na pravne informacije ali stran o projektu.
    Določite seznam slovarjev. Vsak slovar opisuje element noge. Podprti so naslednji ključi:
     - »name« – ime elementa.
     - »href« – izbirno cilj povezave elementa. To lahko izpustite, če želite samo besedilo, na primer obvestilo o avtorskih pravicah.',
      'Missing \'%s\' Extension' => 'Manjka razširitev »%s«',
      'Deprecated mysql.host Format' => 'Opuščeni format mysql.host',
      'Application Settings' => 'Nastavitve aplikacije',
      'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Več podrazredov %s ima isti ključ (»%s«): %s, %s.',
      'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.
    %s' => 'Elasticsearch je konfiguriran (z nastavitvijo %s), vendar je Phabricator pri poskusu testiranja indeksa naletel na izjemo.
    %s',
      'Syntax highlighting a supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Phabricator podpira označevanje skladnje nekaterih jezikov po privzetem, za številne dodatne jezike pa lahko namestite orodje Pygments (orodje za označevanje skladnje tretje osebe).
    Za namestitev orodja Pygments obiščite stran [[ http://pygments.org | pygments.org ]] in se ravnajte po navodilih za prenos in namestitev.
    Ko je orodje Pygments nameščeno, omogočite to možnost (`pygments.enabled`), da bo Phabricator orodje Pygments uporabljal pri označevanju skladnje.
    Po namestitvi in omogočenju orodja Pygments bi se morala novoustvarjena izvorna koda (npr. razlike in prilepljenja) pravilno označevati. Za označevanje že obstoječe kode boste morali morda očistiti Phabricatorjeve predpomnilnike. Za navodila za upravljanje predpomnilnikov glejte stran [[ %s | Managing Caches ]].',
      'Settings History' => 'Zgodovina nastavitev',
      'Missing \'%s\' Binary' => 'Manjka dvojiška datoteka »%s«.',
      'No search servers are configured.' => 'Konfiguriran ni noben iskalni strežnik.',
      'Repository Servers' => 'Strežniki shrambe',
      'Install Pygments to Improve Syntax Highlighting' => 'Za izboljšano označevanje skladnje namestite orodje Pygments',
      'Logo Image' => 'Slika logotipa',
      'Rebuild Search Index' => 'Obnovi indeks iskanja',
      'Missing' => 'Manjka',
      'Elasticsearch Index Not Found' => 'Indeksa Elasticsearch ni bilo mogoče najti',
      'Missing Key' => 'Manjkajoč ključ',
      '%s Not Found' => '%s ni najdeno',
      '\'%s\' Missing' => '»%s« manjka',
      'Connection Error' => 'Napaka povezave',
      'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'Phabricator lahko po privzetem označuje nekaj jezikov, z namestitvijo in omogočenjem orodja Pygments (označevalnega orodja tretje osebe) pa lahko dodate označevanje še za številne druge jezike.
    Za navodila za namestitev in omogočenje orodja Pygments glejte nastavitveno možnost %s.
    Če orodja Pygments ne želite namestiti, lahko to zadevo prezrete.',
      'Define a cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Definirajte gručo Phabricator tako, da zagotovite seznam dovoljenih naslovov gostiteljev, ki so del gruče.
    Gostitelji na tem seznamu dovoljenih imajo posebna pooblastila. Tem gostiteljem je dovoljeno spreminjati varnostna pravila in napačna konfiguracija tega seznama lahko zmanjša varnost vaše namestitve. Za več informacij glejte **[[ %s | %s ]]**.
    Določite seznam blokiranj CIDR, ki na beli seznam dodajajo vse gostitelje v gruči in nobenih dodatnih gostiteljev. Za podrobnosti si oglejte spodnje primere.
    Ko bodo naslovi gruče definirani, bodo gostitelji Phabricatorja zavrnili tudi zahtevke za vmesnike, ki niso na beli listi.',
      'Missing "zip" Extension' => 'Manjka razširitev »zip«',
      'Options relating to syntax highlighting source code.' => 'Možnosti označevanja skladnje izvorne kode.',
      'Advanced Settings' => 'Napredne nastavitve',
      'SSH log format.' => 'Dnevniški format SSH.',
      'Learn more about locked and hidden options.' => 'Več o zaklenjenih in skritih možnostih.',
      'Syntax Highlighting' => 'Označevanje skladnje',
      'Can not compare two missing schemata!' => 'Dveh manjkajočih shem ni mogoče preverjati!',
      'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Uporabniki Phabricatorja lahko v nekaterih okoliščinah zahtevajo druge storitve iz gostitelja Phabricatorja (na primer tako, da ustvarijo repozitorij z oddaljenim URL-jem ali da Phabricator pridobi sliko iz oddaljenega strežnika).
    To lahko pomeni varnostno ranljivost, če bodo storitve v istem podomrežju sprejele ukaze ali razkrile zasebne informacije prek nepreverjenega HTTP GET na podlagi izvornega IP-naslova. Do takšne storitve imajo dostop zlasti vsi gostitelji v EC2.
    Ta možnost določa seznam omrežnih blokiranj, s katerimi bo Phabricator zavrnil povezavo. Na splošno bi morali tukaj navesti ves zasebni IP-prostor.',
      'Core Settings' => 'Osnovne nastavitve',
      'Missing Required Extensions' => 'Manjkajo potrebne razširitve',
      '%d related link(s):' => '%s povezana(ih) povezav(a):',
      'Missing Repository Local Path' => 'Manjka lokalna pot shrambe',
      'No performance sampling.' => 'Brez vzorčenja zmogljivosti.',
      'View "%s"' => 'Ogled »%s«',
      'SSH log location.' => 'Mesto dnevnika SSH.',
    );
  }

}
