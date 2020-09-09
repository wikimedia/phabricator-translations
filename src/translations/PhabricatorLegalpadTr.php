<?php

final class PhabricatorLegalpadTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => 'Tüm İmzalar',
      'Unverified Email' => 'Doğrulanmamış E-posta',
      'Create New Document' => 'Yeni Belge Oluştur',
      'Type of signature required' => 'Gerekli imza türü',
      'Signed At' => 'İmzalı',
      'Signature Type' => 'İmza Türü',
      '%s updated the document signature type.' => '%s belge imza türünü güncelledi.',
      '%s set the document %s to require signatures.' => '%s, %s belgesini imza gerektirecek şekilde ayarladı.',
      'I agree to the terms laid forth above.' => 'Yukarıda belirtilen şartları kabul ediyorum.',
      'Signature Details' => 'İmza Detayları',
      'Email Commands: Legalpad Documents' => 'E-posta Komutları: Legalpad Belgeleri',
      '%s added %s required legal document(s): %s.' => '%s, %s gerekli yasal belge ekledi: %s.',
      'That user does not exist.' => 'Bu kullanıcı mevcut değil.',
      'Search for documents signed by given users.' => 'Verilen kullanıcılar tarafından imzalanmış belgeleri arayın.',
      'Company name is required.' => 'Şirket adı gerekli.',
      'Legalpad Document' => 'Legalpad Belgesi',
      '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s, %s gerekli yasa belgeyi düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
      'Document Title.' => 'Belge Başlığı.',
      'A valid email is required.' => 'Geçerli bir e-posta gerekli.',
      'Unable to Verify Signature' => 'İmza Doğrulanamadı',
      'Signed By' => 'İmzalayan',
      'Contact Email' => 'İletişim E-posta',
      'Document Body' => 'Belge Gövdesi',
      'Contact name is required.' => 'İletişim adı gerekli.',
      'No signatures match the query.' => 'Sorguyla eşleşen imza yok.',
      'Interacting with Legalpad Documents' => 'Legalpad Belgeleriyle Etkileşim',
      '%s updated the document text.' => '%s belge metnini güncelledi.',
      'Signed on %s' => '%s Tarihinde İmzalandı',
      '%s renamed this document from %s to %s.' => '%s, bu belgeyi %s ile %s yeniden adlandırdı.',
      'The body of text of the document.' => 'Belgenin metninin gövdesi.',
      'Not Signed' => 'İmzalanmamış',
      '%s document(s) are already signed: %s.' => '%s belgesi zaten imzalandı: %s.',
      'You must choose a company to add an exemption for.' => 'Muafiyet eklemek için bir şirket seçmelisiniz.',
      '%s set the document %s to not require signatures.' => '%s, %s belgesini imza gerektirmeyecek şekilde ayarlardı.',
      '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s gerekli yasal doküman %s için düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
      'Email Contains' => 'E-posta İçeriyor',
      'Signature Already Verified' => 'İmza Zaten Doğrulandı',
      'You do not have permission to create new documents.' => 'Yeni belgeler oluşturma izniniz yok.',
      '%s:
    This email address was used to sign a Legalpad document in Phabricator:
      %s
    Please verify you own this email address and accept the agreement by clicking this link:
      %s
    Your signature is not valid until you complete this verification step.
    You can review the document here:
      %s
    ' => '%s:
    Bu e-posta adresi, Phabricator\'da bir Legalpad belgesini imzalamak için kullanıldı:
      %s
    Lütfen bu e-posta adresinin size ait olduğunu doğrulayın ve bu bağlantıyı tıklayarak sözleşmeyi kabul edin:
      %s
    Bu doğrulama adımını tamamlayana kadar imzanız geçerli değildir.
    Belgeyi buradan inceleyebilirsiniz:
      %s',
      'This document has an unknown signature type ("%s").' => 'Bu belgede bilinmeyen bir imza türü var ("%s").',
      '[Legalpad]' => '[Legalpad]',
      'Legalpad Documents' => 'Legalpad Belgeleri',
      'Legalpad Signatures' => 'Legalpad İmzaları',
      'You signed this document on %s.' => 'Bu dokümanı %s imzaladınız.',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Bu belgeyi imzaladığınız için teşekkür ederiz. İmzanızı doğrulamak ve işlemi tamamlamak için lütfen e-postanızı kontrol edin.',
      'Create documents and track signatures. Can also be re-used in other areas of Phabricator, like CLAs.' => 'Belgeler oluşturun ve imzaları izleyin. CLA\'lar gibi diğer Phabricator alanlarında da tekrar kullanılabilir.',
      'Last Updated' => 'Son Güncelleme',
      'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'Bu belge kurumsal bir imza sahibi gerektiriyor. Temsil ettiğiniz bir şirket adına bu belgeyi kabul etmek için giriş yapmalısınız.',
      'Not Signable' => 'İmzalanamaz',
      'Signed' => 'İmzalanmış',
      'The signature is now verified.' => 'İmza şimdi doğrulandı.',
      'Notes' => 'Notlar',
      'Legalpad' => 'Legalpad',
      'View/Sign Document' => 'Belgeyi Görüntüle/İmzala',
      'Only documents with signature type "individual" may require signing to use Phabricator.' => 'Yalnızca "bireysel" imza türüne sahip belgeler, Phabricator\'ı kullanmak için imza gerektirebilir.',
      'Mail receiver is not a LegalpadDocument!' => 'Posta alıcısı LegalpadDocument değil!',
      'You must choose a user to exempt.' => 'Muaf tutulacak bir kullanıcı seçmelisiniz.',
      'Only admins may require signature.' => 'Yalnızca hizmetliler imza gerektirebilir.',
      'You have already signed this document!' => 'Bu belgeyi zaten imzaladınız!',
      'Verify Signature' => 'İmzayı Doğrula',
      'Signed Documents' => 'İmzalı Belgeler',
      'This signature has already been verified.' => 'Bu imza zaten doğrulandı.',
      'Please verify this document signature.' => 'Lütfen bu belge imzasını doğrulayın.',
      'Create a Document' => 'Belge Oluştur',
      'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'Bir kullanıcı eşdeğer bir belgeyi imzaladıysa imza muafiyetini kaydedebilirsiniz. Diğer uygulamalar, kullanıcının bu belgeyi imzaladığı gibi davranacaktır.',
      'Company Name' => 'Şirket Adı',
      '%s updated the document text for %s.' => '%s, belge metnini %s için güncelledi.',
      '%s added %s required legal document(s) to %s: %s.' => '%s, %s gerekli yasal belgeyi %s\'e ekledi: %s.',
      'Email field is required.' => 'E-posta alanı zorunludur.',
      'Exempt User' => 'Muaf Kullanıcı',
      'Company address is required.' => 'Şirket adresi gerekli.',
      'Contact Name' => 'İletişim Adı',
      'DOCUMENT' => 'BELGE',
      'Require document signatures: %s.' => 'Belge imzaları iste: %s.',
      'Updated By' => 'Güncelleyen',
      'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'Belirtilen e-posta adresi bir hesapla ilişkili. Lütfen bu hesaba giriş yapın ve bu belgeyi tekrar imzalayın.',
      '%s updated the document preamble.' => '%s, belge giriş sayfasını güncelledi.',
      'Corporations' => 'Şirketler',
      'Verified, Corporate' => 'Doğrulandı, Kurumsal',
      '%s removed %s required legal document(s): %s.' => '%s, %s gerekli yasal belgeyi kaldırdı: %s.',
      '%s set the document text.' => '%s belge metnini ayarladı.',
      'You must check "I agree to the terms laid forth above."' => '"Yukarıda belirtilen şartları kabul ediyorum" seçeneğini işaretlemelisiniz.',
      '[Legalpad] Signature Verification' => '[Legalpad] İmza Doğrulama',
      'This page documents the commands you can use to interact with documents in Legalpad.' => 'Bu sayfa, Legalpad\'deki belgelerle etkileşimde bulunmak için kullanabileceğiniz komutları belgeler.',
      'Add Signature Exemption' => 'İmza Muafiyeti Ekle',
      'No Signature Required' => 'İmza Gerekmiyor',
      'Add Exemption' => 'Muafiyet Ekle',
      'The author of a document can always view and edit it.' => 'Bir belgenin yazarı her zaman onu görüntüleyebilir ve düzenleyebilir.',
      'Can Create Documents' => 'Belge Oluşturabilir',
      '%s removed %s required legal document(s) from %s: %s.' => '%s, %s gerekli yasal belgeyi %s\'den aldı: %s.',
      'Contributors' => 'Katkılar',
      'The preamble of the document.' => 'Belgenin başlangıç sayfası.',
      '%s set the document to require signatures.' => '%s belgeyi imza gerektirecek şekilde ayarlardı.',
      'Individuals' => 'Bireyler',
      'Signature Required to use Phabricator' => 'Phabricator Kullanmak İçin Gerekli İmza',
      'New document title.' => 'Yeni belge başlığı.',
      'Configure creation and editing documents in Legalpad.' => 'Legalpad\'de belge oluşturma ve düzenleme işlemini yapılandırın.',
      'Signature Verified' => 'İmza Doğrulandı',
      'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'NOT: Düzenleme izniniz olan belgeler üzerinde yalnızca kendi imzalarınızı görebilirsiniz.',
      '%s updated the document preamble for %s.' => '%s, başlangıçtaki belgeyi %s güncelledi.',
      'Legalpad User Guide' => 'Legalpad Kullanıcı Kılavuzu',
      '%s set the document to not require signatures.' => '%s, belgeyi imza gerektirmeyecek şekilde ayarlardı.',
      'You can not sign a document on behalf of a corporation unless you are logged in.' => 'Giriş yapmadığınız sürece bir şirket adına bir belge imzalayamazsınız.',
      'Exemption By' => 'Muafiyet Eden',
      'Who Should Sign?' => 'Kim İmzalamalı?',
      'Name field is required.' => 'İsim alanı zorunludur.',
      'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'Bu belgeyi imzalamanıza gerek yok. %s, %s\'de sizin için bir imza muafiyeti ekledi.',
      'New document preamble.' => 'Yeni belge başlangıç sayfası.',
      'Find Signatures' => 'İmza Bul',
      'Search for documents with given creators.' => 'Belirli içerik oluşturuculara sahip belgeleri arayın.',
      'Required %s signature(s): %s.' => 'Gerekli %s imza: %s.',
      'Configure Legalpad Forms' => 'Legalpad Formlarını Yapılandır',
      'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => 'İmza doğrulama kodu yanlış veya imza geçersiz. E-postadaki bağlantıyı doğru izlediğinizden emin olun.',
      'Agreements and Signatures' => 'Anlaşmalar ve İmzalar',
      '%s updated the document signature type for %s.' => '%s, %s için belge imza türünü güncelledi.',
      'Required Signature' => 'Gerekli İmza',
      'Verify Signature?' => 'İmzayı Doğrulasın mı?',
      'signers of legalpad documents' => 'legalpad belgelerinin imzalayıcıları',
      'Company Address' => 'Şirket Adresi',
      'CHANGES TO DOCUMENT PREAMBLE' => 'BELGE ÖNCESİ DEĞİŞİYOR',
      '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** imzaları ve yasal sözleşmeleri takip etmek için basit bir uygulamadır. Şu anda, öncelikle açık kaynaklı projelerin Katılımcı Lisans Sözleşmelerini izlemelerine yardımcı olmak amaçlanmıştır.',
      'Unknown field: %s' => 'Bilinmeyen alan: %s',
      'New document body.' => 'Yeni belge gövdesi.',
      'Marks this document as required signing.' => 'Bu belgeyi gerekli imza olarak işaretler.',
      'Signers' => 'İmzacılar',
      'Search for documents with given contributors.' => 'Katkıda bulunan katılımcıların bulunduğu belgeleri arayın.',
      'Signatures' => 'İmzalar',
      'Exemption' => 'Muafiyet',
      'View Signatures' => 'İmzaları Görüntüle',
      'Signed Older Version' => 'İmzalı Eski Sürüm',
      'CHANGES TO DOCUMENT TEXT' => 'BELGE METNİ DEĞİŞİYOR',
      'Version %d (%s)' => 'Sürüm %s (%s)',
      'You have not signed this document yet.' => 'Bu belgeyi henüz imzalamadınız.',
      'Require signatures' => 'İmza iste',
      'Contact email is required.' => 'İletişim e-postası gereklidir.',
      'Agree and Sign Document' => 'Kabul Et ve Belgeyi İmzala',
      'Already Signed' => 'Zaten İmzalı',
      'Verified, Current' => 'Doğrulandı, Geçerli',
      'Signing User' => 'İmzalayan Kullanıcı',
      'That user has already signed this document.' => 'Bu kullanıcı bu belgeyi zaten imzaladı.',
      'New document signature type.' => 'Yeni belge imza türü.',
      'Sign Document' => 'İmza Belgesi',
    );
  }

}
