<?php

final class PhabricatorPhrictionTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => 'Belgenin yolu.',
      'No such document.' => 'Böyle bir belge yok.',
      'Edit Older Version %s...' => 'Daha Eski Sürümünü Düzenle %s...',
      'DOCUMENT DIFF' => 'BELGE FARKI',
      'A moved document can not be moved again.' => 'Taşınan bir belge tekrar taşınamaz.',
      'Next Change »' => 'Sonraki Değişiklik »',
      'Last Edited' => 'Son Düzenleme',
      'Publish Draft' => 'Taslağı Yayınla',
      'Moved' => 'Taşındı',
      'Other document activity not listed above occurs.' => 'Yukarıda listelenmemiş diğer belge etkinlikleri gerçekleşir.',
      'Version %d of %d: ' => '%s - %s sürümü:',
      'DOCUMENT CONTENT' => 'BELGE İÇERİĞİ',
      'EDIT NOTES' => 'DÜZENLEME NOTLARI',
      'Missing Ancestor' => 'Kayıp Ata',
      'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.' => 'Bu belge %s ile taşındı. Buraya yeni içerik koymak için düzenleyebilir veya önceki bir sürüme dönmek için geçmişi kullanabilirsiniz.',
      'Retrieve information about a Phriction document.' => 'Bir Phriction belgesi hakkında bilgi edinin.',
      'A document\'s subscribers change.' => 'Bir belgenin aboneleri değişir.',
      'Unknown document status \'%s\'!' => 'Bilinmeyen doküman durumu \'%s\'!',
      'Overwrite Changes' => 'Değişikliklerin Üzerine',
      'Can Not Delete Document!' => 'Belge Silinemiyor!',
      'No parent/ancestor paths specified.' => 'Üst/ata yolu belirtilmedi.',
      'Unknown URI type \'%s\'!' => 'Bilinmeyen URI türü \'%s\'!',
      'Document path "%s" is not a valid path. The normalized form of this path is "%s".' => '"%s" belge yolu geçerli bir yol değil. Bu yolun normalleştirilmiş formu "%s".',
      'Stubbed' => 'Taslak edildi',
      'There is no document here, but you may create it.' => 'Burada belge yok, ancak oluşturabilirsiniz.',
      'Edit Notes' => 'Notları Düzenle',
      'Phriction Wiki Document' => 'Phriction Viki Belgesi',
      'Phriction Document' => 'Phriction Belgesi',
      'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.' => 'Bu belgeyi oraya taşıyamazsınız, çünkü bu konumda olan mevcut bir belgenin üzerine yazar. Önce mevcut belgeyi taşıyın veya silin.',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => 'Bir viki belgesini düzenlemek için tüm atalarını görüntüleyebilmelisiniz.',
      'Content Changes' => 'İçerik Değişiklikleri',
      'This version of the document is already the published version.' => 'Belgenin bu sürümü zaten yayınlanan sürüm.',
      'Document Hierarchy' => 'Belge Hiyerarşisi',
      'More...' => 'Daha fazla...',
      'A document\'s title changes.' => 'Bir belgenin başlığı değişir.',
      'Save and Publish' => 'Kaydet ve Yayımla',
      'Current Path' => 'Güncel Yol',
      '(Untitled Document)' => '(İsimsiz Belge)',
      'Phriction User Guide' => 'Phriction Kullanım Kılavuzu',
      '%s moved this document to %s.' => '%s, bu belgeyi %s ile taşıdı.',
      'Content' => 'İçerik',
      'Update a Phriction document.' => 'Bir Phriction belgesini güncelleyin.',
      'Revert the published version of this document to an older version?' => 'Bu belgenin yayınlanan sürümünü eski bir sürüme döndürmek mi istiyorsunuz?',
      'Document Content' => 'Belge İçeriği',
      'Version %d' => 'Sürüm %s',
      'Last Author' => 'Son Yazar',
      'Published document changed' => 'Yayımlanan belge değiştirildi',
      'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)' => 'Düzenlemeye başladıktan sonra başka bir kullanıcı bu belgede değişiklikler yaptı. Değişikliklerinin üzerine yazmak ister misiniz? (Değişikliklerinin üzerine yazmayı seçerseniz, üzerine ne yazdığınızı görmek için belge düzenleme geçmişini gözden geçirmeli ve ardından değişiklikleri birleştirmek için başka bir düzenleme yapmalısınız.)',
      'Can not create document because the parent document with slug %s does not exist!' => '%s slug ile ana belge mevcut olmadığı için belge oluşturulamıyor!',
      'Edit Phriction Document Configurations' => 'Phriction Belge Yapılandırmaları Düzenle',
      'Accept Path' => 'Yolu Kabul Et',
      'Content object "%s" can not be published because it belongs to a different document.' => '"%s" içerik nesnesi farklı bir belgeye ait olduğundan yayınlanamıyor.',
      'Edit Current Version %s...' => 'Geçerli Sürümü Düzenle %s...',
      'Edit this Document' => 'Bu Belgeyi Düzenle',
      'Document History: %s' => 'Belge Geçmişi: %s',
      'Ancestor Paths' => 'Ata Yolları',
      'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".' => 'Bir viki belgesini görüntülemek için, tüm atalarını da görüntüleyebilmeniz gerekir. Bu belgenin atalarının en kısıtlayıcı görünümü politikası "%s".',
      'Wiki Documents' => 'Viki Belgeleri',
      'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.' => 'Bu belge taşındı. Buraya yeni içerik koymak için düzenleyebilir veya önceki bir sürüme dönmek için geçmişi kullanabilirsiniz.',
      'Edit Draft Version %s...' => 'Taslak Sürümü Düzenle %s...',
      'Document this content is for.' => 'Bu içeriğin bulunduğu belge.',
      'You are viewing an unpublished draft of this document.' => 'Bu belgenin yayınlanmamış bir taslağını görüntülüyorsunuz.',
      '%s deleted this document.' => '%s bu belgeyi sildi.',
      '<%s>' => '<%s>',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.' => 'Bu yöntem donmuş ve sonunda kullanımdan kaldırılacak. Yeni kodun yerine "phriction.content.search" kullanılmalıdır.',
      'An already deleted document can not be deleted.' => 'Zaten silinmiş bir belge silinemez.',
      'Stub' => 'Taslak',
      '%s moved this document from %s.' => '%s, bu belgeyi %s üzerinden taşıdı.',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.' => 'Bu yöntem donmuş ve sonunda kullanımdan kaldırılacak. Yeni kodun yerine "phriction.document.search" kullanılmalıdır.',
      '%s published a new version of %s.' => '%s, %s yeni bir versiyonunu yayınladı.',
      'No such document exists.' => 'Böyle bir belge yok.',
      'Edit Existing Document?' => 'Mevcut Belgeyi Düzenlensin mi?',
      'Read information about Phriction documents.' => 'Phriction belgeleriyle ilgili bilgi edinin.',
      'The document %s already exists. Do you want to edit it instead?' => '%s belgesi zaten var. Bunun yerine düzenlemek ister misiniz?',
      'A deleted document can not be moved.' => 'Silinen bir belge taşınamıyor.',
      'Printable Page' => 'Yazdırılabilir Sayfa',
      'Welcome to Phriction' => 'Phriction\'a hoş geldiniz',
      'CHANGES TO DOCUMENT CONTENT' => 'BELGE İÇERİĞİNDEKİ DEĞİŞİKLİKLER',
      '%s moved %s from %s' => '%s, %s üzerinden %s taşıdı',
      'This document is empty. You can edit it to put some proper content here.' => 'Bu belge boş. Burada bazı uygun içerik koymak için düzenleyebilirsiniz.',
      'Publish Draft?' => 'Taslak Yayınlansın mı?',
      'A document is deleted.' => 'Bir belge silindi.',
      'Would you like to use the path %s instead?' => 'Bunun yerine %s yolunu kullanmak ister misiniz?',
      'Delete Document?' => 'Belge Silinsin mi?',
      'Document Deleted' => 'Belge Silindi',
      'Content version.' => 'İçerik sürümü.',
      'Documents must have content.' => 'Belgeler içeriğe sahip olmalıdır.',
      'You can not move a document to its existing location. Choose a different location to move the document to.' => 'Bir belgeyi mevcut konumuna taşıyamazsınız. Belgeyi taşımak için farklı bir konum seçin.',
      '"%s" <%s>' => '"%s" <%s>',
      'Document History' => 'Belge Geçmişi',
      'Draft %d' => 'Taslak %s',
      'Original Change' => 'Orijinal Değişim',
      'Empty Parent Document' => 'Boş Ana Belge',
      'Document already exists!' => 'Belge Zaten Var!',
      '%s moved %s to %s.' => '%s, %s ile %s taşındı.',
      'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.' => 'Phriction, dokümanları ve değişikliklerini takip etmek için kullanımı basit ve kolaydır.',
      '« Previous Change' => '« Önceki Değişiklik',
      'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.' => 'Girdiğiniz yol (%s) geçerli bir viki belgesi yolu değil. Yollar boşluk veya özel karakterler içeremez.',
      'View Draft Version' => 'Taslak Sürümü Görüntüle',
      'Edit Conflict' => 'Değişiklik Çakışması',
      '%s edited the content of %s.' => '%s, %s içeriğini düzenledi.',
      'This document has unpublished draft changes.' => 'Bu belgede yayınlanmamış taslak değişiklikler var.',
      'Version %s vs %s' => 'Sürüm %s ve %s',
      '%s edited the content of this document.' => '%s, bu belge içeriğini düzenledi.',
      'This document is already deleted. You must specify content to re-create the document and make further edits.' => 'Bu belge zaten silinmiş. Belgeyi yeniden oluşturmak ve daha fazla düzenleme yapmak için içerik belirtmelisiniz.',
      'Parent Paths' => 'Üst Yollar',
      '%s published a new version of this document.' => '%s, bu belgeyi yeni bir sürümünü yayınladı.',
      'You are viewing the current published version of this document.' => 'Bu belgenin yayınlanmış sürümünü görüntülüyorsunuz.',
      'Update the published version of this document to this newer version?' => 'Bu belgenin yayınlanan sürümünü bu yeni sürüme güncellensin mi?',
      '%s changed the title from %s to %s.' => '%s, başlığı %s ile %s değiştirdi.',
      'Publish Older Version?' => 'Eski Sürüm Yayınlansın mı?',
      'Hierarchy' => 'Hiyerarşi',
      'Save as Draft' => 'Taslak Olarak Kaydet',
      'Edited by %s' => 'Düzenleyen %s',
      'No Document Here' => 'Burada Belge Yok',
      'A document\'s content changes.' => 'Bir belgenin içeriği değişir.',
      'A moved document can not be deleted.' => 'Taşınan bir belge silinemez.',
      'Adjust Path' => 'Yolu Ayarla',
      'Read information about Phriction document history.' => 'Phriction belge geçmişi hakkında bilgi edinin.',
      'Test rules which run when a wiki document is created or updated.' => 'Bir viki belgesi oluşturulduğunda veya güncellendiğinde çalışan test kuralları.',
      'Welcome' => 'Hoş geldiniz',
      'A stub document can not be deleted.' => 'Bir taslak belgesi silinemez.',
      'Can not move document because the parent document with slug %s does not exist!' => '%s slug ile ana belge olmadığından belge taşınamıyor!',
      '%s by %s, %s' => '%s yapan %s, %s',
      'Publish Older Version' => 'Eski Sürümü Yayınla',
      'Create this Document' => 'Bu Belgeyi Oluştur',
      'This engine is used to edit Phriction documents.' => 'Bu motor, Phriction belgelerini düzenlemek için kullanılır.',
      'Edits' => 'Düzenlemeler',
      'Already Published' => 'Zaten Yayınlandı',
      'Retrieve history about a Phriction document.' => 'Bir Phriction belgesiyle ilgili geçmişi al.',
      'Unable to load Content object with PHID "%s".' => 'Content nesnesi PHID "%s" ile yüklenemiyor.',
      'Create a Phriction document.' => 'Bir Phriction belgesi oluşturun.',
      'You are viewing an older version of this document, as it appeared on %s.' => '%s üzerinde göründüğü gibi, bu belgenin daha eski bir sürümünü görüntülüyorsunuz.',
      'Status information about the document.' => 'Belge ile ilgili durum bilgisi.',
      'React to wiki documents being created or updated.' => 'Oluşturulan veya güncellenen viki belgelerine tepki verin.',
      'Document Fields' => 'Belge Alanları',
      'All Content' => 'Tüm İçerik',
      'Phriction Content' => 'Phriction İçeriği',
      'Phriction Document Content' => 'Phriction Belge İçeriği',
      'Created through child' => 'Çocuktan yaratılmıştır',
      'Page Not Found' => 'Sayfa Bulunamadı',
      'New Document' => 'Yeni Belge',
      '%s stubbed out this document when creating %s.' => '%s, bu belgeyi %s oluştururken sapladı.',
      'Empty Document' => 'Boş Belge',
      'Move Here' => 'Buraya Taşı',
      'Get the content of documents or document histories.' => 'Belgelerin içeriğini veya belge geçmişlerini alın.',
      'Create a new document at' => 'Adresinde yeni bir belge oluşturun',
      'New Path' => 'Yeni Yol',
      'Phriction Documents' => 'Phriction Belgeleri',
      'A stub document can not be moved.' => 'Bir taslak belgesi taşınamaz.',
      'You can not create a document which does not have a parent.' => 'Ebeveyn olmayan bir belge oluşturamazsınız.',
      'Most Recent Change' => 'En Son Değişiklik',
      'Really delete this document? You can recover it later by reverting to a previous version.' => 'Bu belge gerçekten silinsin mi? Daha önceki bir sürüme geçerek daha sonra kurtarabilirsiniz.',
      'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.' => 'Bu belge silindi. Buraya yeni içerik koymak için düzenleyebilir veya önceki bir sürüme dönmek için geçmişi kullanabilirsiniz.',
      'Wiki Document %d' => 'Viki Belgesi %s',
      'Move Away' => 'Uzaklaş',
    );
  }

}
