<?php

final class PhabricatorMetamtaScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'ID: %d' => 'ID: %s',
      'Cc' => 'Cc',
      'Emails' => 'Email',
      'Empty Mail' => 'Mail vacanti',
      'TEXT BODY' => 'CORPU DÛ TESTU',
      'Status: %s' => 'Statu: %s',
      'Message: %s' => 'Missaggiu: %s',
      'BODIES' => 'CORPA',
      'HTML BODY' => 'CORPU HTML',
      'Unknown Reason ("%s")' => 'Mutivu scanusciutu ("%s")',
      'Body "%s"' => 'Corpu "%s"',
      'MESSAGE' => 'MISSAGGIU',
      '#' => '#',
      '(This message has no text body.)' => '(Stu missaggiu nun havi nu corpu di testu.)',
      '(This message has no HTML body.)' => '(Stu missaggiu nun havi nu corpu HTML.)',
      'Address "%s" is unknown.' => 'Lu nnirizzu "%s" è scanusciutu.',
    );
  }

}
