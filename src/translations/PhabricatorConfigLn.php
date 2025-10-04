<?php

final class PhabricatorConfigLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
      'When a user takes an action which generates an email notification (like
    commenting on a Differential revision), the "From" address can either be set
    to the user\'s email address (like "alincoln@logcabin.com") or the
    "metamta.default-address" address.
    The user experience is generally better if the user\'s real address is used as
    the "From" header value, since the messages are easier to organize when they
    appear in mail clients, but this will only work if the server is authorized to
    send email on behalf of the "From" domain. Practically, this means:
      - If you are doing an install for Example Corp and all the users will have
        corporate @corp.example.com addresses and any hosts this software is running
        on are authorized to send email from corp.example.com, you can enable this
        to make the user experience a little better.
      - If you are doing an install for an open source project and your users will
        be registering via third-party services and/or using personal email
        addresses, you probably should not enable this or all of your outgoing
        email might vanish into SFP blackholes.
      - If your install is anything else, you\'re safer leaving this off, at least
        initially, since the risk in turning it on is that your outgoing mail will
        never arrive.' => 'Tango mosaleli asali action oyo ebimisaka notification ya email (lokola
    commenting na revision Différentielle), adresse "From" ekoki kozala soit ko fixer
    na adresse email ya usager (lokola "alincoln@logcabin.com") to adresse
    "metamta.default-address".
    Expérience ya mosaleli ezalaka mingi mingi malamu soki adresse ya solo ya mosaleli esalelami lokola
    "From" motuya ya motó ya likambo, lokola ba messages ezali pete mpo na kobongisa tango
    emonanaka na ba clients ya mail, kasi yango ekosala kaka soki serveur azali na ndingisa ya
    tinda email na kombo ya domaine "Kouta". Pratiquement, oyo elingi koloba:
     - Soki ozali kosala installation pona Example Corp pe ba usagers nionso bakozala na
     ba adresses ya entreprise @corp.example.com na ba hôtes nionso logiciel oyo ezali kosala
     na bazali na ndingisa ya kotinda email uta na corp.example.com, okoki ko activer oyo
     mpo na kosala ete expérience ya mosaleli ezala mwa malamu.
     - Soki ozali kosala installation pona projet ya source ouverte pe ba usagers na yo bakosala
     kozala kokomisa nkombo na nzela ya misala ya bato mosusu mpe/to kosalela email ya moto ye moko
     ba adresses, mbala mosusu esengeli te o activer oyo to nionso ya sortie na yo
     email ekoki kolimwa na ba trous noirs ya SFP.
     - Soki installation na yo ezali eloko mosusu, ozali na sécurité kotika oyo off, au moins
     na ebandeli, lokola likama ya kofungola yango ezali ete mail na yo oyo ekobima ekosala
     kokóma ata mokolo moko te.',
      'The \'%s\' extension is not installed. Without \'%s\', this server may not be able to determine the MIME types of uploaded files.' => 'Bobakisi \' %s \' etiamaki te. Soki \' %s \' ezali te, serveur oyo ekoki kozala na makoki te ya koyeba mitindo ya MIME ya ba fichiers oyo etie.',
      'These alternative URIs will be able to access \'normal\' pages on this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Ba URI alternatifs oyo ekozala na makoki ya ko accéder na ba pages \'normal\' na installation oyo. Makambo mosusu lokola OAuth ekosala te. Cas ya usage ya munene pona oyo ezali ko déplacer ba installations na ba domaines.',
      'Authentication Configuration Unlocked' => 'Configuration ya authentification efungolami',
      'You have \'%s\' enabled in your PHP configuration.
    This feature is "highly discouraged" by PHP\'s developers, and has been removed entirely in PHP8.This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => 'Ozali na \' %s \' activé na configuration na yo ya PHP.
    Ezaleli oyo "elɛmbisami mingi" na ba développeurs ya PHP, mpe elongolami mobimba na PHP8.Option oyo ekokani te na logiciel oyo. Bokanga \' %s \' na configuration ya PHP na yo mpo na kokoba.',
      'The \'%s\' extension is not installed. Without \'%s\' support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'Bobakisi \' %s \' etiamaki te. Soki lisungi ya \' %s \' ezali te, mosaleli oyo akozala na makoki te ya kosala to kobongola bonene ya bilili (ndakisa, mpo na kobimisa bilili ya mike). Botia to bofungola \' %s \'.',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)' => 'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a%4$s different stopword file, add this to your %2$s file (in the %3$s section) and then restart %4$s:
    %5$s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)',
      'Option "%s" only supports numbers, letters, underscores and (for some reason) the dollar sign. This is necessary to avoid potential MySQL/MariaDB escape issues. Remove the invalid characters.' => 'Option " %s " esungaka kaka ba nombres, ba lettres, ba soulignements mpe (mpo na raison moko boye) signe ya dollar. Yango esengeli mpo na koboya makambo oyo ekoki kobima mpo na kokima MySQL/MariaDB. Longola bilembo oyo ezali na ntina te.',
      'Syntax highlighting is supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Botalisi ya syntaxe esungami mpo na mwa minoko na ndenge ya libela, kasi okoki kotia Pygments (esaleli ya kosala elembo ya syntaxe ya moto ya misato) mpo na kopesa lisungi mpo na minoko mingi mosusu.
    Mpo na kotia Pygments, kota na [[ http://pygments.org | pygments.org ]] mpe landa malako ya téléchargement mpe installer.
    Ntango Pygments esili ko installer, activer option oyo (`pygments.enabled`) mpo na kosalela Pygments tango ozali ko souligner code source.
    Nsima ya ko installer mpe ko activer Pygments, code source oyo esalemi sika (lokola diffs mpe ba collages) esengeli ko souligner malamu. Ekoki kozala ete osengeli kopɛtola ba caches mpo na kozwa code source oyo ezalaki liboso mpo na komonisa yango. Mpo na malako na ntina ya kotambwisa ba caches, tala [[ %s | Kokamba ba Caches ]].',
      'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    ' => 'Hôte ya base de données " %s " e configuré pona kosalela longueur minimum ya maloba par défaut tango ya kotonga ba index ya recherche, oyo ezali 4. Yango elingi koloba que maloba oyo ezali kaka na 3 caractères ekozala indexée te pe ekoki kolukama te.
    Na ndakisa, okozala na makoki te ya kozwa ba résultats ya recherche pona maloba lokola \'SMS\', \'web\', to \'DOS\'.
    Okoki ko changer paramètre oyo na 3 pona ko permettre ba mots oyo ezala ezali na index. Na lolenge mosusu, okoki koboya likebisi oyo soki ozali komitungisa te mpo na koluka maloba ya balɛtrɛ 3. Soki na sima okani ko configurer Elasticsearch, okoki pe ko ignorer likebisi oyo: kaka recherche ya makomi mobimba ya MySQL nde ezo affecter.
    Mpo na kokitisa longueur ya mot minimum na 3, bakisa oyo na fichier na yo %s (na eteni ya %s ) et puis banda lisusu %s :
     %s',
      'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => 'Option " %s " ezali molayi ya likama mpo na préfixe ya base de données na MySQL/MariaDB. Motuya ya lelo ezali na bolai ya bilembo ya %s . Esengeli kozala na nse ya %s mpo na kozala na bokengi mpo na mbongwana oyo ekoya.',
    );
  }

}
