<?php

final class PhabricatorConfigMos
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mos';
  }

  protected function getTranslations() {
    return array(
      'The request body that was sent began:' => 'Sẽn sɩng ne kosg ning b sẽn kõ-a wã:',
      'The best available MYSQL implementation is now selected automatically.' => 'D sẽn tõe n maan bũmb ning fãa n tõog n maan to-to wã, d tõe n yãka a soab n yãk a soab.',
      'Use Pygments to highlight code?' => 'Y na n tũnugda ne Pygments n wilg code wã bɩ?',
      'The keyring stores master encryption keys. For help with configuring a keyring
    and encryption, see **[[ %s | Configuring Encryption ]]**.' => 'B sẽn da maand n paasd kode wã, b ra tara kode. Y sã n dat sõngre, bɩ y ges "%s" sẽn dat n sõng ne loogr la loogrã.',
      'The \'%s\' extension is not installed. Without \'%s\', support, this software may not be able to determine the MIME types of uploaded files.' => '\'%s\' paasgo pa be ye. Sã n pa tar \'%s\', sõngre, program kãngã pa tõe n bãng MIME faay nins sẽn tall-bã ye.',
      'Configure services to run on a cluster of hosts.' => 'Yãk-y tɩ tʋʋm-kãsemsã zoe ne logtoɛɛmbã.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'Sõng-y tɩ y yãk sõng sẽn yaa \'%s\' tɩ pa zems ye. URI wã pa segd n tall sor ye, wala \'%s\' yaa sõma, la \'%s\' pa woto ye. D segd n saka program-kãngã zĩiga fãa zugu, la d pa tõe n paka sor ye.',
      'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Dẽnd b sẽn maan program kãngã yaa ne EC2 sẽn yaa bilf wʋsgo (b sẽn boond tɩ "%s" wã) n tar CPU sẽn tõe n sãamd b meng ne-a. Woto pa noom tõnd ye. Dẽnd program-kãngã segd n paama CPU, la wakat fãa, CPU wã sẽn pa tar pãng n tõe n maan bũmb ninsã kɩtame tɩ b kʋ. Seb-y makr sẽn tar CPU sẽn yaa sõma.',
      'When a message is sent to multiple recipients (for example, several reviewers on
    a code review), it can either be delieverd as one email to everyone (e.g., "To:
    alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
    alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
    of each approach are:
      - One mail to everyone:
        - This violates policy controls. The body of the mail is generated without
          respect for object policies.
        - Recipients can see To/Cc at a glance.
        - If you use mailing lists, you won\'t get duplicate mail if you\'re
          a normal recipient and also Cc\'d on a mailing list.
        - Getting threading to work properly is harder, and probably requires
          making mail less useful by turning off options.
        - Sometimes people will "Reply All", which can send mail to too many
          recipients. This software will try not to send mail to users who already
          received a similar message, but can not prevent all stray email arising
          from "Reply All".
        - Not supported with a private reply-to address.
        - Mail messages are sent in the server default translation.
        - Mail that must be delivered over secure channels will leak the recipient
          list in the "To" and "Cc" headers.
      - One mail to each user:
        - Policy controls work correctly and are enforced per-user.
        - Recipients need to look in the mail body to see To/Cc.
        - If you use mailing lists, recipients may sometimes get duplicate
          mail.
        - Getting threading to work properly is easier, and threading settings
          can be customized by each user.
        - "Reply All" will never send extra mail to other users involved in the
          thread.
        - Required if private reply-to addresses are configured.
        - Mail messages are sent in the language of user preference.
    ' => 'Sõsg sã n tʋmda neb wʋsg (yakɩ, sẽn get-a code wã yell n get-a), b tõe n tʋma-a lame, n kõ-a-la ned kam fãa (yakɩ: "To: alincoln, usgrant, htaft") bɩ b kõ-a lame (yakɩ:"To: alinkoln", "To: usgrant", "To:. htaft"). Sẽn yɩɩd fãa, b na n wilga b sẽn tõe n maan bũmb ninsã. mos_Latnmos_Latnmos_Latn be ye - Bõn-bũn a ye fãa: - Woto kɩɩsda sor-wilgr noyã. B sẽn maand b sɛbã pʋgẽ wã pa waoogd bũmb ning b sẽn da yeelã ye. - Sẽn deeg-b-la-yã tõe n yãa To/Cc ne yãnd. - Y sã n tũnug ne pos-bils, y pa na n paam pos-bilb ye, y sã n yaa ned sẽn deeg-a wã la y leb n gʋls-a-la pos-bilgẽ wã. - Sẽn na yɩl n kɩt tɩ b sõsd ne taab sõma wã yaa toog n yɩɩd, la tõe n kɩtame tɩ b pa le tõe n tʋm ne b sɛbã ye. Wakat ninga, nebã na n leokame tɩ b fãa, tɩ b tõe n tʋm-b-la b sɛbã neb wʋsg. Dẽndr kãngã na n baoo n pa na n tʋm b sõssã neb nins sẽn zoe n paam sõsg a woto wã ye, la a pa tõe n gɩdg tɩ b "Bɩ b leok fãa" n kɩt tɩ b kʋ kʋ kʋɩlem fãa ye. - Pa ne ned sẽn pa tõe n leok-a ye. - B sẽn na n tʋm-b koe-mailã, b na n tʋma-b lame. - Post sẽn segd n paam n paam-a-la ne sor sẽn pa tar bas-m-yamã na n kɩtame tɩ b gʋlsd sõss nins sẽn paam-b sõssã "To" la "Cc" wã. - Bõn-post a ye n kõ kɛlgdbã: - B sẽn get b politikã yellã yaa sõma, la b tũuda kɛlgdbã fãa. - Sẽn deeg-b-bã segd n gesa b sɛb-kãnga pʋgẽ n bãng b sẽn na n maan to-to wã. - Y sã n tũnug ne pos lisã, wakat ninga, b tõe n paama pos- pa-bãmb n kõ-yã. - Yaa nana n na n kɩt tɩ b yel-bũndã tʋm sõma, la ned kam fãa tõe n toeema a yel-bẽnegr yel-bũnã. - "Bɩ y leok ned fãa" pa na n tʋm-a t\'a tall sõss n paas neb a taab sẽn kẽed ne sõssã ye. - B sã n dat tɩ b yãk ned sẽn pa tar sor n leok b sɛbã, b segd n maana woto. - B sẽn tʋmd b lɛtrã ne koe-moondbã buud-gomd ning b sẽn dat n togsã la b tʋmd-a.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'S3 baasg zĩiga sẽn be vẽeneg tɩ b na n tũ. Yaa woto la b segd n maan n wilg tɩ b sẽn yãkd zĩiga a ye wã yaa a soab ning b sẽn yãk `amazon-s3.region` wã. Dẽnd program-kãngã pa tõe n bãng tɩ yaa sõma tɩ b pa tõe n yãk-a ye, bala b pa tõe ne a sẽn maand bũmb ningã ye.',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'Pa mi b sẽn na n yãk-a to-to wã ye. Tõe tɩ b gʋls-a-la ne ziri, wall a ra be program-kãngã version sẽn dengã pʋgẽ.',
      'The request body that was received began:' => 'Sẽn sɩng ne kosg ning b sẽn kõ-a wã:',
      'Without \'%s\', this software can not test for the availability of other binaries.' => 'Sã n pa tar \'%s\', program-kãngã pa tõe n mak b sẽn na n tall b taabã bĩndbã ye.',
      'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'Dẽndr kãngã tʋma koe-moonegã kosg ne "X-Setup-SelfCheck" koe-mooneg la b ra tẽedame tɩ b na n paama JSON leoor sẽn zems. La b sɩngame n yeele: 
    %s
    mos_Latnmos_Latnmos_Latn be ye A sã n wa paam ligd wʋsgo mos_Latnmos_Latnmos_Latn be ye Bũmb n be n pa zems ye, wall b sẽn maand bũmb ninsã pa noom-b ye.',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'Dẽnd database host "%s" yaa master, la a leb n maand a taab. Woto yaa yell wʋsgo, la tõe n sãama bɩ sãamd a data. Yaa b sẽn maand n dɩkd b nusã bal n segd n dɩkd a togs-n-taare. Yãk-y n da le maand-y bũmb a to ye, bɩ y sak n maneg a siglgã.',
      'Define a cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Y tõe n wilga y sẽn dat n maan bũmb ningã, n wilg y sẽn tõe n maan bũmb ning sẽn pa zems ne Biiblã sẽn yetã. mos_Latnmos_Latnmos_Latn be ye Sẽn maand-b woto wã tara pãn-tõog sẽn yaa toor-toorã. B kõo koe-moonegã taoor dãmb sor tɩ b tõog n tũ sor-wilgr noyã, la b sã n pa rat n tũ sor kãngã sõma, tõe n kɩtame tɩ b pa le gũu yãmb sẽn na n tʋm-bã ye. Y sã n dat n bãng n paas woto, bɩ y ges *%s %s **. mos_Latnmos_Latnmos_Latn be ye Wilg-y CIDR bloog nins sẽn tar sõor sẽn be hostã fãa pʋgẽ, la sẽn pa tar hostã a taab ye. Ges-y makr nins sẽn pʋgdã. mos_Latnmos_Latnmos_Latn be ye B sã n wa yãkd sõss-rãmb sõssã, b na n zãmsa sõssã sõssã sẽn pa be sõssã pʋgẽ.',
      'Configure %s' => 'Yãk-y n tool-y neda %s',
      'Customized settings for applications.' => 'D sẽn tõe n yãkd bũmb ning sẽn yaa sõma n na n sõng-d tɩ d bãng d sẽn tõe n maan to-to.',
      'Provide a list of notification servers to enable real-time notifications.
    For help setting up notification servers, see **[[ %s | %s ]]** in the
    documentation.' => '%s%sSõng-y tɩ b wilg koe-moonegã sẽn na yɩl n tõog n tʋm koe-mooneg wakat sẽn pa ta wã. mos_Latnmos_Latnmos_Latn be ye Y sã n dat sõngre, bɩ y ges sõsg ning sẽn be sɛb-kãnga pʋgẽ.',
      'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Dẽnd program-kãngã tʋma a meng koe-moonegã kosgo, la a ra tẽedame tɩ b na n leoke-a lame. A paama JSON leoore, la a leoore ra tara zĩ-sõngo sɩngrẽ bɩ a saabẽ. mos_Latnmos_Latnmos_Latn be ye Woto rat n yeelame tɩ y zoe n toeema faay n bas bãn-bilã n yaool n yik n yeel tɩ %s, bɩ n yaool n yeel tɩ %s wã. Yãk-y n yiis zĩ-bil sẽn wilgd tɩ bũmb n pa be, la y pa segd n yãkd bũmb sẽn kɩt tɩ bũmb ning fãa yaa sõma ye.',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'BÃNGÃ: Yaa sor-kãseng n be, la yaa sõma bala, sã n yaa neb nins sẽn tʋmd ne logtoɛɛmb sẽn tʋmd ne neb wʋsg sẽn pa tar logtoɛɛmba. mos_Latnmos_Latnmos_Latn be ye Y sã n kõ sõssã ned sẽn dat n bãng a sẽn yaa bũmb ning (b sẽn boond tɩ `%s`) n kɩt tɩ b gʋls-a, serverã na n kɩtame tɩ b tũ n tũ n tũ tʋʋm-no-kãsems n tʋm a sẽn yaa a %s soab n tʋm a soaba.',
    );
  }

}
