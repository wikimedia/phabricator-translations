<?php

final class PhabricatorOwnersDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Change package authority rules.' => 'Leɛre pakegye soobo begere.',
      'Authority setting information.' => 'Soobo sɛgeroo duoro.',
      '%s adjusted package authority rules from %s to %s.' => '%s dɔgle pakegye soobo begere yi %s te tɔ %s',
      'Group sections of a codebase into packages for re-use in other applications, like Herald rules.' => 'Poŋ koodibeesi vori gbulo eŋ pakegyere ko na leɛ-toŋ aplikaasenne mine, aŋa Herald begere.',
      'Strong (Package Owns Paths)' => 'Kpeɛŋaa (Package Owns Paths)',
      'Weak (Package Watches Paths)' => 'Bale (Package Watches Paths)',
      'Authority setting "%s" is not valid. Valid settings are: %s.' => 'Soobo sɛgeroo "%s" ba tona. Sɛgeroo mine naŋ tona la: %s.',
      'When updating the paths for a package, pass a list of dictionaries like
    this as the `value` for the transaction:
    ```lang=json, name="Example Paths Value"
    [
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/path/to/directory/",
        "excluded": false
      },
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/another/example/path/",
        "excluded": false
      }
    ]
    ```
    This transaction will set the paths to the list you provide, overwriting any
    previous paths.
    Generally, you will call `owners.search` first to get a list of current paths
    (which are provided in the same format), make changes, then update them by
    applying a transaction of this type.' => 'Ka foŋ wa apdeetere sori ko a pakegye, paase disinare pɛll aŋa ŋa na e `value` ko a daroŋ:
    ```lang=json, name="Aseŋ sori tegeroŋ"
    [
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/path/to/directory/",
        "excluded": false
      },
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/another/example/path/",
        "excluded": false
      }
    ]
    ```
    A daroŋ ŋa na sɛte la a sori gaa a pɛll fo naŋ tere, ana taa faŋa zuo sori zaa naŋ daŋ bebe.
    Yageroŋ lɛ, fo na boɔle la `owners.search` fɔrɔ na nyɛ pampana soe
    (which are provided in the same format), wane tɛgebo, a pãã apdeeti a ka foŋ aplaai a daroŋ ŋa tɔ.',
    );
  }

}
