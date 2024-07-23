<?php

final class PhabricatorPhameTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      '%s set the subtitle for %s.' => '%s altyazıyı %s olarak ayarlardı.',
      'here' => 'burada',
      'Someone comments on a post.' => 'Birisi bir yayına yorum yapıyor.',
      'Next Post' => 'Yeni Gönderi',
      'Write a Post' => 'Bir Gönderi Yaz',
      'Manage Blogs' => 'Blogları Yönet',
      'Serves blogs with custom domains.' => 'Blogları özel alan adlarıyla sunar.',
      'Blog name.' => 'Blog adı.',
      'The custom domain should include a valid protocol in the URI (for example, "%s"). Valid protocols are "http" or "https".' => 'Özel etki alanı, URI\'da geçerli bir protokol içermelidir (örneğin, "%s"). Geçerli protokoller "http" veya "https"\'dir.',
      'This post has been archived, and is only visible to you and other users who can edit %s.' => 'Bu yayın arşivlendi ve yalnızca sizin ve %s\'i düzenleyebilen diğer kullanıcılar tarafından görülebiliyor.',
      '%s set %s blog\'s full domain to %s.' => '%s, %s blogunun tam etki alanını %s olarak ayarladı.',
      'Read information about blogs.' => 'Bloglarla ilgili bilgi edinin.',
      '%s updated %s blog\'s full domain from %s to %s.' => '%s, %s blogunun tam etki alanını %s ile %s güncelledi.',
      'Create or edit blogs in Phame.' => 'Phame\'de bloglar oluşturun veya düzenleyin.',
      'Archived Post' => 'Arşivlenmiş Yayın',
      'Blog' => 'Blog',
      'Posts must be attached to a blog.' => 'Gönderiler bir bloga eklenmelidir.',
      'Other blog activity not listed above occurs.' => 'Yukarıda listelenmeyen diğer blog etkinlikleri gerçekleşir.',
      '%s updated the post\'s subtitle to "%s".' => '%s, yayın altyazısını "%s" olarak güncelledi.',
      'Blog description.' => 'Blog açıklaması.',
      'React to Phame Blogs being created or updated.' => 'Oluşturulan veya güncellenen Phame Bloglarına tepki verin.',
      '%s updated the blog\'s parent domain from %s to %s.' => '%s, blogun ana etki alanını %s ile %s güncelledi.',
      'Activate Blog' => 'Blogu Etkinleştir',
      'Written by %s on %s in %s.' => '%s\'de %s\'de %s tarafından yazılmıştır.',
      'The custom domain should not specify a path (hosting a Phame blog at a path is currently not supported). Instead, just provide the bare domain name (for example, "%s").' => 'Özel etki alanı bir yol belirtmemelidir (şu anda bir Phame blogunu barındırmak desteklenmemektedir). Bunun yerine, yalnızca etki alanı adını girin (örneğin, "%s").',
      '%s marked %s as archived.' => '%s arşivlenmiş olarak %s olarak işaretlendi.',
      'Parent Domain must be set to a valid Remote URI.' => 'Ana Etki Alanı geçerli bir Uzak URI olarak ayarlanmalıdır.',
      'PHID of the blog.' => 'Blogun PHID\'si.',
      'Unpublish' => 'Yayından Kaldır',
      'Edit Blog Picture' => 'Blog Resmini Düzenle',
      'Search for posts within certain blogs.' => 'Bazı bloglardaki gönderileri arayın.',
      'Post subtitle.' => 'Altyazı gönder.',
      'No external domain' => 'Harici alan yok',
      'This blog will become active again.' => 'Bu blog tekrar aktif olacaktır.',
      'Recent Posts' => 'Son Gönderiler',
      'Internal and External Blogs' => 'İç ve Dış Bloglar',
      'Change post body.' => 'Gövdeyi değiştirin.',
      'You must choose a file when uploading a new blog header.' => 'Yeni bir blog başlığı yüklerken bir dosya seçmelisiniz.',
      'Phame' => 'Phame',
      'You do not have permission to create a blog.' => 'Blog oluşturma izniniz yok.',
      'Publish Post' => 'Gönderi Yayımla',
      '%s renamed this blog post from %s to %s.' => '%s, bu günlük gönderisini %s iken %s olarak yeniden adlandırdı.',
      'Delete Header' => 'Başlığı Sil',
      '%s changed the profile image for this blog.' => '%s bu blog için profil resmini değiştirdi.',
      'Read information about blog posts.' => 'Günlük yayınları hakkında bilgi edinin.',
      'Archive' => 'Arşiv',
      '%s updated %s blog\'s parent domain from %s to %s.' => '%s, %s blogun üst etki alanını %s ile %s güncelledi.',
      '%s updated the post content.' => '%s yayın içeriğini güncelledi.',
      'Other post activity not listed above occurs.' => 'Yukarıda listelenmeyen diğer gönderi etkinlikleri gerçekleşir.',
      'Archived Blogs' => 'Arşivlenmiş Bloglar',
      'Move Post' => 'Gönderiyi Taşı',
      'Upload New Header' => 'Yeni Başlık Yükle',
      'No blogs posts found.' => 'Blog yazısı bulunamadı.',
      'You must choose a file when uploading a new blog picture.' => 'Yeni bir blog resmi yüklerken bir dosya seçmelisiniz.',
      'All Blogs' => 'Tüm Bloglar',
      'Body of the post.' => 'Gönderi gövdesi.',
      '%s set this blog\'s parent domain to %s.' => '%s, bu blogun ana etki alanını %s olarak ayarladı.',
      'A blog\'s subscribers change.' => 'Bir blogun aboneleri değişir.',
      'Header' => 'Başlık',
      'PHID of the author of the post.' => 'Gönderinin yazarının PHID\'si.',
      '%s marked %s as a draft.' => '%s, taslak olarak %s olarak işaretlendi.',
      'There aren\'t any visible blog posts.' => 'Görünür blog yazısı yok.',
      'New post title.' => 'Yeni gönderi başlığı.',
      '[No Blog]' => '[Blog Yok]',
      'Publish Date' => 'Tarihi Yayımla',
      'Configure how blogs in Phame are created and edited.' => 'Phame\'de blogların nasıl oluşturulacağını ve düzenleneceğini yapılandırın.',
      'This post will go live once you publish it.' => 'Bu yayın, yayınladığınızda yayına girecek.',
      'Configure Blog Post Forms' => 'Blog Gönderi Formlarını Yapılandır',
      'This blog will be marked as archived.' => 'Bu blog arşivlenmiş olarak işaretlenecek.',
      'You have no draft posts.' => 'Taslak gönderiniz yok.',
      'Parent Site Name' => 'Ana Site Adı',
      'New blog status constant.' => 'Yeni blog durumu sabiti.',
      'Change the blog subtitle.' => 'Blog altyazısını değiştirin.',
      'This is a draft, and is only visible to you and other users who can edit %s. Use "Publish" to publish this post.' => 'Bu bir taslaktır ve yalnızca siz ve %s düzenleyebilen diğer kullanıcılar tarafından görülebilir. Bu gönderiyi yayımlamak için "Yayımla" kullanın.',
      '%s renamed %s blog post from %s to %s.' => '%s, %s günlük yazısını %s iken %s olarak yeniden adlandırdı.',
      'The custom domain should contain at least one dot (.) because some browsers fail to set cookies on domains without a dot. Instead, use a normal looking domain name like "%s".' => 'Özel alanların en az bir nokta içermesi gerekir (.) çünkü bazı tarayıcılar noktalara sahip olmayan alanlara çerezler koyamaz. Bunun yerine, "%s" gibi normal görünümlü bir etki alanı adı kullanın.',
      'Slug for the post.' => 'Yazı için slug.',
      'The subtitle can be no longer than %s characters.' => 'Altyazı %s karakterden uzun olamaz.',
      'New blog title.' => 'Yeni blog başlığı.',
      'Draft Posts' => 'Taslak Gönderiler',
      'Edit Header Image' => 'Başlık Resmini Düzenle',
      '%s changed the header image for this post.' => '%s, bu yayın için başlık görüntüsünü değiştirdi.',
      'Blog full domain URI.' => 'Tam etki alanı URI\'si.',
      'Configure creation and editing blog posts in Phame.' => 'Phame\'de blog gönderileri oluşturma ve düzenleme yapılandırma.',
      '%s created this blog.' => '%s bu blogu oluşturdu.',
      'Retitle the blog.' => 'Blogu tekrar toplayın.',
      'Unpublished draft by %s in %s.' => 'Yayımlanmamış taslak %s tarafından %s.',
      'Blog Header' => 'Blog Başlığı',
      'Written by %s on %s.' => '%s tarafından yazılan %s\'dir.',
      'Blogs must have a name.' => 'Blogların bir adı olmalı.',
      'Edit Blog Header' => 'Blog Başlığını Düzenle',
      'Draft Post' => 'Taslak Gönderi',
      'Post title.' => 'Yazı başlığı.',
      'If you archive this post, it will only be visible to users who can edit %s.' => 'Bu yayını arşivlerseniz, yalnızca %s’i düzenleyebilen kullanıcılar görülebilir.',
      'CHANGES TO BLOG DESCRIPTION' => 'BLOG AÇIKLAMASI DEĞİŞTİRİYOR',
      'Phame Blog' => 'Phame Blog',
      '%s renamed this blog from %s to %s.' => '%s, bu günlüğü %s iken %s olarak yeniden adlandırdı.',
      'A post\'s content changes.' => 'Bir yayının içeriği değişir.',
      'Change the blog parent domain.' => 'Blog ana etki alanını değiştirin.',
      'Create Post' => 'Gönderi Oluştur',
      'Post moved successfully.' => 'Yayın başarıyla taşındı.',
      'New post body.' => 'Yeni yayın gövdesi.',
      'Active Blogs' => 'Aktif Bloglar',
      'Local Blog' => 'Yerel Blog',
      '404 Not Found' => '404 Bulunamadı',
      '%s set %s blog\'s parent site to %s.' => '%s, %s blogu ana sayfasını %s olarak ayarladı.',
      'Blogs' => 'Bloglar',
      'This post will revert to draft status and no longer be visible to other users.' => 'Bu yayın taslak durumuna geri döner ve artık diğer kullanıcılar tarafından görülemez.',
      'Change the blog parent site name.' => 'Blog ana site adını değiştirin.',
      'Change post visibility.' => 'Mesaj görünürlüğünü değiştirin.',
      'Previous Post' => 'Önceki Yazı',
      'The specified blog PHID ("%s") is not valid. You can only create a post on (or move a post into) a blog which you have permission to see and edit.' => 'Belirtilen blog PHID ("%s") geçerli değil. Bir blogu yalnızca, görme ve düzenleme iznine sahip olduğunuz bir blogda yayın oluşturabilir (veya yazıya taşıyabilirsiniz).',
      'The author of a blog post can always view and edit it.' => 'Bir blog yazısının yazarı her zaman onu görüntüleyebilir ve düzenleyebilir.',
      'Domain must be unique; another blog already has this domain.' => 'Etki alanı benzersiz olmalıdır; başka bir blogda zaten bu etki alanı var.',
      'No description.' => 'Açıklama yok.',
      '%s set this post\'s subtitle to "%s".' => '%s, bu gönderinin altyazısını "%s" olarak ayarladı.',
      '%s updated the blog\'s full domain from %s to %s.' => '%s, blogun tam alan adını %s\'den %s\'e güncelledi.',
      'Unpublished draft by %s.' => 'Yayımlanmamış taslak %s.',
      'New blog parent site name.' => 'Yeni blog ana site adı.',
      'Phame Blogs' => 'Phame Bloglar',
      '%s created this post.' => '%s bu gönderiyi oluşturdu',
      'Blog Post' => 'Blog Gönderi',
      'Edit Blog' => 'Blogu Düzenle',
      'New post visibility constant.' => 'Yeni yazı görünürlük sabiti.',
      'New blog full domain URI.' => 'Yeni blog tam etki alanı URI.',
      '%s updated the subtitle for %s.' => '%s altyazıyı %s için güncelledi.',
      'Manage Blog' => 'Blogu Yönet',
      'Full Domain URI' => 'Tam Etki Alanı URI\'si',
      'Edit Post Header' => 'Gönderi Başlığını Düzenle',
      'Body' => 'Gövde',
      '%s changed the profile image for blog %s.' => '%s, blog %s için profil resmini değiştirdi.',
      'No parent site' => 'Üst site yok',
      'New post subtitle.' => 'Yeni yazı altyazı.',
      'Create New Post' => 'Yeni Gönderi Oluştur',
      'No blogs found.' => 'Blog bulunamadı.',
      'PHID of the blog that the post belongs to.' => 'Yazının ait olduğu blogun PHID\'si.',
      'The parent site can be no longer than %s characters.' => 'Ana site, %s karakterden uzun olamaz.',
      'Atom URI does not support custom domains.' => 'Atom URI özel etki alanlarını desteklemiyor.',
      'Parent Site' => 'Üst Site',
      'Post' => 'Gönder',
      '%s archived this blog.' => '%s bu blogu arşivledi',
      '%s archived this post.' => '%s bu gönderiyi arşivledi',
      'Visibility' => 'Görünürlük',
      '%s published this post.' => '%s bu gönderiyi yayınladı',
      'POST DETAIL' => 'GÖNDERİ DETAYI',
      'A blog\'s details change.' => 'Bir blogun detayları değişimi.',
      'Blog subtitle.' => 'Blog altyazı.',
      'Archived post by %s.' => '%s tarafından arşivlenen yayın.',
      'No parent domain' => 'Üst etki alanı yok',
      'But the page you seek is elsewhere.' => 'Ancak aradığınız sayfa başka bir yerde.',
      'Phame Posts' => 'Phane Gönderileri',
      'Blog parent domain name.' => 'Blog ana etki alanı adı.',
      '%s archived the blog %s.' => '%s, %s blogunu arşivledi.',
      'Publish date, if the post has been published.' => 'Yayın yayınlanmışsa, yayınlanma tarihi.',
      'Create or edit blog posts in Phame.' => 'Phame\'de blog gönderileri oluşturun veya düzenleyin.',
      'Create Blog' => 'Blgo Oluştur',
      'Title of the post.' => 'Gönderinin adı.',
      'Users who can edit a blog can always view it.' => 'Bir blogu düzenleyebilen kullanıcılar her zaman görüntüleyebilir.',
      'Choose a blog to create a post on (or move a post to).' => 'Bir gönderi oluşturmak için bir blog seçin (veya bir iletiyi adresine taşıyın).',
      'Phame Post' => 'Phame Gönderisi',
      'A post\'s subscribers change.' => 'Bir gönderinin aboneleri değişir.',
      '%s updated the blog\'s parent site from %s to %s.' => '%s, blogun ana sitesini %s ile %s güncelledi.',
      'Blog Posts' => 'Blog Gönderileri',
      'This post is not associated with a blog (the blog may have been deleted). Use "Move Post" to move it to a new blog.' => 'Bu yayın bir blog ile ilişkili değil (blog silinmiş olabilir). Yeni bir bloga taşımak için "Gönderimi Taşı" seçeneğini kullanın.',
      'Change the blog description.' => 'Blog açıklamasını değiştirin.',
      'Change the post subtitle.' => 'Gönderi altyazısını değiştirin.',
      '%s changed the header image for post %s.' => '%s, %s gönderisinin başlık resmini değiştirdi.',
      'Blog to publish this post to.' => 'Bu blog yazıyı yayımla.',
      'Parent Site URI' => 'Ana Site URI\'si',
      'Write Post' => 'Gönderi Yaz',
      '%s set %s blog\'s parent domain to %s.' => '%s, %s blogun ana etki alanını %s olarak ayarladı.',
      'Blog parent site name.' => 'Blog ana site adı.',
      'Phame User Guide' => 'Phame Kullanıcı Kılavuzu',
      'BLOG DETAIL' => 'BLOG AYRINTI',
      'For custom domains to work, the blog must have a view policy of public. This blog is currently set to "%s".' => 'Özel alan adlarının çalışabilmesi için, blog’un genel görünüm politikası olmalıdır. Bu blog şu anda "%s" olarak ayarlanmış.',
      '%s changed the blog for post %s.' => '%s, blogu %s yayın için değiştirdi.',
      '%s set this blog\'s full domain to %s.' => '%s, bu blogun tam etki alanını %s olarak ayarladı.',
      '%s set this blog\'s subtitle to "%s".' => '%s, bu blogun altyazısını "%s" olarak ayarladı.',
      'React to Phame Posts being created or updated.' => 'Oluşturulan veya güncellenen Phame Gönderiler tepki ver.',
      'Post visibility.' => 'Görünürlük gönderisi.',
      '%s updated %s blog\'s parent site from %s to %s.' => '%s, %s blogun ana sitesini %s ile %s güncelledi.',
      '%s set this blog\'s parent site to %s.' => '%s, bu blogun ana sitesini %s olarak ayarlardı.',
      'Post Header' => 'Gönderi Başlığı',
      'Active or archive the blog.' => 'Blogu aktifleştir veya arşivle.',
      'This blog is not visible to logged out users, so it can not be visited from a custom domain.' => 'Bu blog çıkış yapan kullanıcılar tarafından görülemiyor, bu nedenle özel bir alandan ziyaret edilemiyor.',
      'No one has written any blog posts yet.' => 'Henüz kimse blog yazısı yazmadı.',
      '%s changed the blog for this post.' => '%s, bu yayın için blogu değiştirdi.',
      'Create New Blog' => 'Yeni Blog Oluştur',
      'New blog description.' => 'Yeni blog açıklaması.',
      'Post body.' => 'Yayın gövdesi.',
      'About %s' => '%s Hakkında',
      'CHANGES TO POST CONTENT' => 'YAYIN İÇERİĞİ DEĞİŞİYOR',
      'Archive Blog' => 'Blogu Arşivle',
      'Blog: %s' => 'Blog: %s',
      'Archive Post' => 'Yayını Arşivle',
      'Retitle the post.' => 'Gönderi tekrar yerleştirin.',
      'Blog Picture' => 'Blog Resmi',
      'The name of the blog.' => 'Blogun adı.',
      'Configure Phame Blog Forms' => 'Phame Blog Formlarını Yapılandır',
      'Search Posts' => 'Yayınları Ara',
      'Published Posts' => 'Yayınlanmış Yayınlar',
      '%s updated the post content for %s.' => '%s, yayın içeriğini %s için güncelledi.',
      '%s marked this post as a draft.' => '%s bu yayını taslak olarak işaretledi.',
      'New blog parent domain.' => 'Yeni blog ana etki alanı.',
      '%s updated the blog\'s subtitle to "%s".' => '%s, blog altyazısını "%s" olarak güncelledi.',
      'Set Full Domain URI if you plan to serve this blog on another hosted domain. Parent Site Name and Parent Site URI are optional but helpful since they provide a link from the blog back to your parent site.' => 'Bu blogu barındırılan başka bir alanda sunmayı planlıyorsanız, Tam Etki Alanı URI\'sını ayarlayın. Ana Site Adı ve Ana Site URI’sı isteğe bağlıdır ancak blogdan ana sitenize bir bağlantı sağladıklarından yararlıdır.',
      'Upload Header' => 'Başlığı Yükle',
      'For custom domains to work, this server must be configured to allow the public access policy. Configure this setting %s, or ask an administrator to configure this setting. The domain can be specified later once this setting has been changed.' => 'Özel etki alanlarının çalışması için, bu Phabricator örneğinin genel erişim politikasına izin verecek şekilde yapılandırılması gerekir. Bu ayarı %s olarak yapılandırın veya bir yöneticiden bu ayarı yapılandırmasını isteyin. Bu ayar değiştirildikten sonra etki alanı daha sonra belirtilebilir.',
      'The parent domain can be no longer than %s characters.' => 'Üst etki alanı %s karakterden uzun olamaz.',
      '%s changed the header image for blog %s.' => '%s, blog %s başlık bilgisini değiştirdi.',
      'Unpublish Post' => 'Yayından Yayınlama',
      'Subtitle' => 'Altyazı',
      'View Live' => 'Canlı İzle',
      '%s published this blog.' => '%s bu blogu yayınlandı.',
      'Not On A Blog' => 'Blogda Değil',
      'Browse Blogs' => 'Bloglara Göz At',
      'Edit Post' => 'Yayın Düzenle',
      'Full Domain' => 'Tam Etki Alanı',
      '%s changed the header image for this blog.' => '%s, bu blog için başlık resmini değiştirdi.',
      'Blog Post: ' => 'Blog Yayını:',
      'Default create policy for blogs.' => 'Varsayılan olarak bloglar için politika oluşturun.',
      'Type a blog name...' => 'Bir blog adı yazın...',
      'Posts must have a title.' => 'Yayınların bir başlığı olmalı.',
      '%s published %s.' => '%s %s, yayınladı.',
      'Wherever you go, there you are.' => 'Nereye gidersen git, işte buradasınız.',
      '%s published the blog %s.' => '%s, %s blogunu yayınladı.',
      'All Posts' => 'Tüm Yayınlar',
      'Parent Domain' => 'Ana Etki Alanı',
      'Create a Blog' => 'Bir Blog Oluştur',
      '%s renamed %s blog from %s to %s.' => '%s, %s blogunu %s ile %s değiştirdi.',
      'Can Create Blogs' => 'Blog Oluşturabilir',
      'New blog subtitle.' => 'Yeni blog altyazı.',
      'Change the blog full domain URI.' => 'Blog tam etki alanı URI\'sını değiştirin.',
      'Archived Posts' => 'Arşivlenmiş Yayınlar',
      'Atom URI' => 'Atom URI',
      '(Empty Post)' => '(Boş Gönderi)',
      'This blog has no visible posts.' => 'Bu blogda görünür yayın yok.',
      'You must choose a file when uploading a new post header.' => 'Yeni bir gönderi başlığı yüklerken bir dosya seçmelisiniz.',
      'Post History' => 'Gönderi Geçmişi',
    );
  }

}
