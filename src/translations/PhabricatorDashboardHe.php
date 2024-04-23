<?php

final class PhabricatorDashboardHe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'he';
  }

  protected function getTranslations() {
    return array(
      'New dashboard icon.' => 'סמל לוח בקרה חדש.',
      'Menu' => 'תפריט',
      'Create Dashboard Panel' => 'יצירת חלונית לוח בקרה',
      'Ding Ding' => 'דינג דינג',
      'You must select a dashboard.' => 'יש לבחור לוח בקרה.',
      'Panel specification at index "%s" is invalid: %s' => 'תיאור החלונית במפתח "%s" אינו תקין: %s',
      'Edit Portals' => 'עריכת פורטלים',
      'Panels' => 'חלוניות',
      'Add Dashboard to Global Home Page' => 'הוספת לוח בקרה לדף הבית הגלובלי',
      'Edit Dashboard Panels' => 'עריכת חלוניות לוח בקרה',
      'Move Tab' => 'העברת לשונית',
      'Add Tab...' => 'הוספת לשונית...',
      'Active Panels' => 'חלוניות פעילות',
      'Layout' => 'עיצוב דף',
      'New portal name.' => 'שם פורטל חדש.',
      'Change the dashboard layout mode.' => 'שינוי מצב פריסת לוח הבקרה.',
      '%s renamed this dashboard from %s to %s.' => '%s שינה את שם לוח הבקרה הזה מהשם %s לשם %s.',
      'Read information about portals.' => 'קריאת מידע על פורטלים.',
    );
  }

}
