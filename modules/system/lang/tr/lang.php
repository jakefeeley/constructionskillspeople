<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Sadeliğe dönüş...',
    ],
    'locale' => [
        'ar' => 'العربية',
        'be' => 'Беларуская',
        'bg' => 'Български',
        'ca' => 'Català',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt',
    ],
    'directory' => [
        'create_fail' => "Klasör oluşturulamıyor: :name",
    ],
    'file' => [
        'create_fail' => "Dosya oluşturulamıyor: :name",
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Geçersiz güvenlik anahtarı',
        ],
    ],
    'combiner' => [
        'not_found' => "Kombine dosyası: ':name' bulunamadı.",
    ],
    'system' => [
        'name' => 'Sistem',
        'menu_label' => 'Sistem',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Çeşitli',
            'logs' => 'Kayıtlar',
            'mail' => 'E-Mail',
            'shop' => 'Mağaza',
            'team' => 'Takım',
            'users' => 'Kullanıcılar',
            'system' => 'Sistem',
            'social' => 'Sosyal',
            'backend' => 'Backend',
            'events' => 'Olaylar',
            'customers' => 'Müşteriler',
            'my_settings' => 'Ayarlarım',
            'notifications' => 'Bildirimler',
        ],
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'İsimsiz tema',
        'name' => [
            'label' => 'Tema Adı',
            'help' => 'Temaya benzersiz bir isim verin. Örn: RainLab.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Temaları yükle',
        'search' => 'tema ara...',
        'installed' => 'Yüklü temalar',
        'no_themes' => 'Mağazadan yüklenmiş bir tema bulunmamaktadır.',
        'recommended' => 'Tavsiye edilen',
        'remove_confirm' => 'Bu temayı silmek istediğinize emin misiniz?',
    ],
    'plugin' => [
        'label' => 'Eklenti',
        'unnamed' => 'İsimsiz eklenti',
        'name' => [
            'label' => 'Eklenti Adı',
            'help' => 'Eklenti adı eşsiz olmalıdır. Örneğin, RainLab.Blog',
        ],
        'by_author' => ':name ile filtrele'
    ],
    'plugins' => [
        'manage' => 'Eklentileri yönet',
        'install' => 'Eklentileri yükle',
        'install_products' => 'Ürünleri yükle',
        'search' => 'eklenti ara...',
        'installed' => 'Yüklü eklentiler',
        'no_plugins' => 'Mağazadan yüklenmiş bir eklenti bulunmamaktadır.',
        'recommended' => 'Tavsiye edilen',
        'plugin_label'  => 'Eklenti',
        'unknown_plugin' => 'Eklenti sistemden kaldırıldı.',
        'select_label' => 'Eylem Seçin...',
        'bulk_actions_label' => 'Toplu eylemler',
        'check_yes' => 'Evet',
        'check_no' => 'Hayır',
        'unfrozen' => 'Güncellemeler Aktif',
        'enabled' => 'Eklenti Aktif',
        'freeze' => 'için güncellemeleri devre dışı bırak',
        'unfreeze' => 'için güncellemeleri aktifleştir',
        'enable' => 'aktifleştir',
        'disable' => 'pasifleştir',
        'refresh' => 'yenile',
        'remove' => 'Kaldır',
        'freeze_label' => 'Güncellemeleri Pasifleştir',
        'unfreeze_label' => 'Güncellemeleri Aktifleştir',
        'enable_label' => 'Eklentileri Aktifleştir',
        'disable_label' => 'Eklentileri Pasifleştir',
        'refresh_label' => 'Eklenti Verilerini Sıfırla',
        'action_confirm' => 'Seçili eklentileri :action etmek istediğinize emin misiniz?',
        'freeze_success' => 'Seçilen eklentiler için güncellemeler pasifleştirildi.',
        'unfreeze_success' => 'Seçilen eklentiler için güncellemeler aktifleştirildi.',
        'enable_success' => 'Seçilen eklentiler etkinleştirildi.',
        'disable_success' => 'Seçilen eklentiler pasifleştirildi.',
        'refresh_confirm' => 'Seçili eklentileri sıfırlamak istediğinize emin misiniz? Bu işlem, her eklentinin verilerini sıfırlayarak ilk yükleme durumuna geri getirir.',
        'refresh_success' => 'Eklentiler başarıyla yenilendi.',
        'remove_confirm' => 'Seçili eklentileri kaldırmak istediğinize emin misiniz? Bu işlem, ilişkili tüm verileri de kaldıracaktır.',
        'remove_success' => 'Eklentiler sistemden başarıyla kaldırıldı.',
    ],
    'project' => [
        'name' => 'Proje',
        'owner_label' => 'Proje Sahibi',
        'attach' => 'Projeyi Eşle',
        'detach' => 'Projeyi Ayır',
        'none' => 'Hiçbiri',
        'id' => [
            'label' => 'Proje ID',
            'help' => 'Proje ID\'sini nasıl bulurum?',
            'missing' => 'Lütfen kullanılacak Proje ID\'sini belirleyin.',
        ],
        'detach_confirm' => 'Bu projeyi ayırmak istediğinizden emin misiniz?',
        'unbind_success' => 'Proje ayırma işlemi tamamlandı.',
    ],
    'settings' => [
        'menu_label' => 'Ayarlar',
        'not_found' => 'Belirtilen ayarlar bulunamadı.',
        'missing_model' => 'Ayarlar sayfasında Model tanımı eksik.',
        'update_success' => ':name için ayarlar güncellendi.',
        'return' => 'Sistem ayarları sayfasına dön',
        'search' => 'Ara',
    ],
    'mail' => [
        'log_file' => 'Günlük kayıt dosyası',
        'menu_label' => 'Mail ayarları',
        'menu_description' => 'Email ayarlarını düzenle.',
        'general' => 'Genel',
        'method' => 'Mail Metodu',
        'sender_name' => 'Gönderici Adı',
        'sender_email' => 'Gönderici Email',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP Adresi',
        'smtp_authorization' => 'SMTP yetkilendirmesi kullan',
        'smtp_authorization_comment' => 'SMTP sunucusu yetkilendirme gerektiriyorsa bu onay kutusunu işaretleyin.',
        'smtp_username' => 'Kullanıcı Adı',
        'smtp_password' => 'Şifre',
        'smtp_port' => 'SMTP Port',
        'smtp_ssl' => 'SSL bağlantısı kullan',
        'smtp_encryption' => 'SMTP şifreleme protokolü',
        'smtp_encryption_none' => 'Şifreleme yok',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail Yolu',
        'sendmail_path_comment' => 'Sendmail programının yolunu belirtin.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun Domain',
        'mailgun_domain_comment' => 'Mailgun domain belirtin.',
        'mailgun_secret' => 'Mailgun Gizli Anahtarı',
        'mailgun_secret_comment' => 'Mailgun API anahtarını girin.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill Gizli Anahtarı',
        'mandrill_secret_comment' => 'Mandrill API anahtarını girin.',
        'ses' => 'SES',
        'ses_key' => 'SES key',
        'ses_key_comment' => 'SES API keyi girin',
        'ses_secret' => 'SES secret',
        'ses_secret_comment' => 'SES API secret keyi girin',
        'ses_region' => 'SES bölgesi',
        'ses_region_comment' => 'SES bölgenizi girin (örnek: us-east-1)',
        'drivers_hint_header' => 'Sürücüler yüklenmemiş',
        'drivers_hint_content' => 'Bu eposta yöntemiyle eposta gönderebilmeniz için ":plugin" eklentisinin kurulmuş olması gerekir.',
    ],
    'mail_templates' => [
        'menu_label' => 'Mail şablonları',
        'menu_description' => 'Kullanıcılar ve yöneticiler için gönderilen e-posta şablonları düzenleyin.',
        'new_template' => 'Yeni Şablon',
        'new_layout' => 'Yeni Layout',
        'new_partial' => 'Yeni Partial',
        'template' => 'Şablon',
        'templates' => 'Şablonlar',
        'partial' => 'Partial',
        'partials' => 'Partialler',
        'menu_layouts_label' => 'Mail Layoutları',
        'menu_partials_label' => 'Mail Partialleri',
        'layout' => 'Layout',
        'layouts' => 'Layoutlar',
        'no_layout' => '-- Şablon Yok --',
        'name' => 'İsim',
        'name_comment' => 'Bu şablona referans için benzersiz bir isim verin',
        'code' => 'Kod',
        'code_comment' => 'Bu şablona referans için benzersiz bir kod verin',
        'subject' => 'Konu',
        'subject_comment' => 'Email mesaj konusu',
        'description' => 'Tanım',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Düzyazı',
        'test_send' => 'Test mesajı gönder',
        'test_success' => 'Test mesajı başarılı şekilde gönderildi.',
        'test_confirm' => 'Deneme mesajı :email eposta adresine gönderilecek. Devam etmek istiyor musunuz?',
        'creating' => 'Şablon Oluşturuluyor...',
        'creating_layout' => 'Layout Oluşturuluyor...',
        'saving' => 'Şablon kaydediliyor...',
        'saving_layout' => 'Layout kaydediliyor...',
        'delete_confirm' => 'Bu şablonu silmek istediğinize emin misiniz?',
        'delete_layout_confirm' => 'Bu layout\'u silmek istediğinize emin misiniz?',
        'deleting' => 'Şablon Siliniyor...',
        'deleting_layout' => 'Layout Siliniyor...',
        'sending' => 'Deneme mesajı gönderiliyor...',
        'return' => 'Şablon listesine geri dön',
        'options' => 'Seçenekler',
        'disable_auto_inline_css' => 'Otomatik satır içi CSS\'yi devre dışı bırak',
    ],
    'mail_brand' => [
        'menu_label' => 'Mail yapılandırma',
        'menu_description' => 'Posta şablonlarının renklerini ve görünümünü değiştirin.',
        'page_title' => 'Posta görünümünü özelleştir',
        'sample_template' => [
            'heading' => 'Başlık',
            'paragraph' => 'Bu Lorem Ipsum ile doldurulmuş bir paragraf ve bir linktir. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Nesne',
                'description' => 'Açıklama',
                'price' => 'Fiyat',
                'centered' => 'Ortalanmış',
                'right_aligned' => 'Sağa Hizalı',
            ],
            'buttons' => [
                'primary' => 'Ana buton',
                'positive' => 'Positif buton',
                'negative' => 'Negatif buton',
            ],
            'panel' => 'Bu panel ne kadar harika..',
            'more' => 'Biraz daha metin',
            'promotion' => 'Kupon Kodu: OCTOBER',
            'subcopy' => 'Bu e-postanın alt yazısıdır',
            'thanks' => 'Teşekkürler',
        ],
        'fields' => [
            '_section_background' => 'Arkaplan',
            'body_bg' => 'Body arkaplanı',
            'content_bg' => 'İçerik arkaplanı',
            'content_inner_bg' => 'İç içerik arkaplanı',
            '_section_buttons' => 'Butonlar',
            'button_text_color' => 'Buton metni rengi',
            'button_primary_bg' => 'Ana düğme arkaplanı',
            'button_positive_bg' => 'Positif düğme arkaplanı',
            'button_negative_bg' => 'Negatif düğme arkaplanı',
            '_section_type' => 'Tipografi',
            'header_color' => 'Başlık rengi',
            'heading_color' => 'Başlıkların rengi',
            'text_color' => 'Metin rengi',
            'link_color' => 'Link rengi',
            'footer_color' => 'Footer rengi',
            '_section_borders' => 'Borderlar',
            'body_border_color' => 'Body border rengi',
            'subcopy_border_color' => 'Altyazı border rengi',
            'table_border_color' => 'Tablo border rengi',
            '_section_components' => 'Eklentiler',
            'panel_bg' => 'Panel arkaplanı',
            'promotion_bg' => 'Promosyon arkaplanı',
            'promotion_border_color' => 'Promosyon border rengi',
        ],
    ],
    'install' => [
        'project_label' => 'Projeye bağla',
        'plugin_label' => 'Eklenti Yükle',
        'theme_label' => 'Temayı yükle',
        'missing_plugin_name' => 'Yüklemek istediğiniz eklentinin adını giriniz.',
        'missing_theme_name' => 'Lütfen yüklemek için bir tema ismi giriniz.',
        'install_completing' => 'Kurulumu tamamla',
        'install_success' => 'Eklenti kurulumu tamamlandı.',
    ],
    'updates' => [
        'title' => 'Güncellemeleri Yönet',
        'name' => 'Sistemi Güncelle',
        'menu_label' => 'Güncellemeler',
        'menu_description' => 'Sistemi güncelleyin, temaları ve eklentileri yönetin.',
        'return_link' => 'Sistem güncellemelerine geri dön',
        'check_label' => 'Güncellemeleri kontrol et',
        'retry_label' => 'Tekrar dene',
        'plugin_name' => 'Adı',
        'plugin_code' => 'Kod',
        'plugin_description' => 'Açıklama',
        'plugin_version' => 'Versiyon',
        'plugin_author' => 'Yazar',
        'plugin_not_found' => 'Plugin not found',
        'core_current_build' => 'Mevcut versiyon',
        'core_build' => 'Versiyon :build',
        'core_build_help' => 'Son versiyon kullanılabilir.',
        'core_downloading' => 'Uygulama dosyaları indiriliyor',
        'core_extracting' => 'Uygulama dosyaları çıkarılıyor',
        'core_set_build' => 'Build numarası güncelleniyor',
        'plugins' => 'Modüller',
        'themes' => 'Temalar',
        'disabled' => 'Devre dışı',
        'plugin_downloading' => 'Modül indiriliyor: :name',
        'plugin_extracting' => 'Modül dosyaları çıkarılıyor: :name',
        'plugin_version_none' => 'Yeni eklenti',
        'plugin_current_version' => 'Mevcut sürüm',
        'theme_new_install' => 'Yeni tema kur.',
        'theme_downloading' => 'Tema indiriliyor: :name',
        'theme_extracting' => 'Tema paketten çıkarılıyor: :name',
        'update_label' => 'Sistemi güncelle',
        'update_completing' => 'Güncelleme işlemi tamamlanıyor',
        'update_loading' => 'Kullanılabilir güncellemeler kontrol ediliyor...',
        'update_success' => 'Güncelleme işlemi başarıyla tamamlandı.',
        'update_failed_label' => 'Güncelleme hatası',
        'force_label' => 'Güncellemeye zorla',
        'found' => [
            'label' => 'Güncellemeler bulundu!',
            'help' => 'Sistemi güncelleye tıklayarak güncelleme işlemini başlatabilirsiniz.',
        ],
        'none' => [
            'label' => 'Güncelleme yok',
            'help' => 'Yeni güncelleme bulunamadı.',
        ],
        'important_action' => [
            'empty' => 'Eylem seçin',
            'confirm' => 'Güncellemeyi onayla',
            'skip' => 'Eklentiyi geç (tek seferlik)',
            'ignore' => 'Eklentiyi geç (her zaman)',
        ],
        'important_action_required' => 'Eylem gerekli',
        'important_view_guide' => 'Yükseltme kılavuzuna göz atın',
        'important_view_release_notes' => 'Sürüm notlarını göster',
        'important_alert_text' => 'Bazı eklentiler işlem gerektirebilir.',
        'details_title' => 'Eklenti detayları',
        'details_view_homepage' => 'Anasayfa',
        'details_readme' => 'Kılavuz',
        'details_readme_missing' => 'Herhangi bir kılavuz bulunamadı.',
        'details_changelog' => 'Değişiklikler',
        'details_changelog_missing' => 'Değişiklik geçmişi yok.',
        'details_upgrades' => 'Yükseltme Kılavuzu',
        'details_upgrades_missing' => 'Yükseltme talimatı bulunamadı.',
        'details_licence' => 'Lisans',
        'details_licence_missing' => 'Lisans bilgisi yok.',
        'details_current_version' => 'Mevcut sürüm',
        'details_author' => 'Geliştirici',
    ],
    'server' => [
        'connect_error' => 'Sunucuyla bağlantı kurulamadı.',
        'response_not_found' => 'Güncelleme sunucusu bulunamadı.',
        'response_invalid' => 'Sunucudan hatalı cevap geldi.',
        'response_empty' => 'Sunucudan boş cevap geldi.',
        'file_error' => 'Paket teslim edilirken sunucuda hata meydana geldi.',
        'file_corrupt' => 'Sunucudaki dosya bozulmuş.',
    ],
    'behavior' => [
        'missing_property' => ':class sınıfı :behavior davranışı tarafından kullanılan $:property özelliğini tanımlamalı.',
    ],
    'config' => [
        'not_found' => ':location için tanımlanan :file adlı ayar dosyası bulunamadı.',
        'required' => ':location konumunda kullanılan :property ayarı bir değer içermelidir.',
    ],
    'zip' => [
        'extract_failed' => "':file' adlı çekirdek dosyası dosya paketinden çıkarılamadı.",
    ],
    'event_log' => [
        'hint' => 'Bu kayıtlar, uygulamada ortaya çıkan potansiyel hataları, istisnaları ve hata ayıklama bilgilerini görüntüler.',
        'menu_label' => 'Olay kaydı',
        'menu_description' => 'Olay kayıtlarının zamanlarını ve detaylarını görüntüler.',
        'empty_link' => 'Olay kaydını temizle',
        'empty_loading' => 'Olay kaydı temizleniyor...',
        'empty_success' => 'Olay kaydı temizlendi.',
        'return_link' => 'Olay kayıtlarına dön',
        'id' => 'ID',
        'id_label' => 'Olay Numarası',
        'created_at' => 'Tarih & Saat',
        'message' => 'Mesaj',
        'level' => 'Seviye',
        'preview_title' => 'Olay',
    ],
    'request_log' => [
        'hint' => 'Bu günlük dikkat edilmesi gereken tarayıcı isteklerinin bir listesini görüntüler. Örneğin, bir ziyaretçi bulunmayan bir CMS sayfasını açarsa 404 kodu ile bir kayıt oluşturulur.',
        'menu_label' => 'İstek günlüğü',
        'menu_description' => '(404) sayfası gibi kötü ya da yeniden yönlendirilmiş istekleri görüntüler.',
        'empty_link' => 'İstek günlüğünü temizle',
        'empty_loading' => 'İstek günlüğü temizleniyor...',
        'empty_success' => 'İstek günlüğü temizlendi.',
        'return_link' => 'İstek günlüğüne dön',
        'id' => 'ID',
        'id_label' => 'İstek Numarası',
        'count' => 'Sayaç',
        'referer' => 'Referer',
        'url' => 'URL',
        'status_code' => 'Durum',
        'preview_title' => 'İstek',
    ],
    'permissions' => [
        'name' => 'Sistem',
        'manage_system_settings' => 'Sistem ayarlarını düzenleyebilir',
        'manage_software_updates' => 'Sistem güncellemelerini yönetebilir',
        'access_logs' => 'Sistem günlüğünü görüntüleyebilir',
        'manage_mail_templates' => 'E-posta şablonları yönetebilir',
        'manage_mail_settings' => 'E-posta ayarlarını yönetebilir',
        'manage_other_administrators' => 'Diğer yöneticileri düzenleyebilir',
        'manage_preferences' => 'Yönetim paneli seçeneklerini düzenleyebilir',
        'manage_editor' => 'Kod editör ayarlarını düzenleyebilir',
        'view_the_dashboard' => 'Panoyu görüntüleyebilir',
        'manage_default_dashboard' => 'Varsayılan kontrol panelini yönetebilir',
        'manage_branding' => 'Yönetim Panelini özelleştirebilir',
    ],
    'log' => [
        'menu_label' => 'Log ayarları',
        'menu_description' => 'Hangi alanlar için log kayıtları tutulacağını belirtin.',
        'default_tab' => 'Log kaydetme',
        'log_events' => 'Sistem olaylarını kaydet',
        'log_events_comment' => 'Dosya tabanlı loglara ek olarak, sistem olaylarını veritabanında da tutar.',
        'log_requests' => 'Hatalı istekleri kaydet',
        'log_requests_comment' => '404 hataları gibi dikkat gerektirebilecek tarayıcı istekleri.',
        'log_theme' => 'Tema değişikliklerini kaydet',
        'log_theme_comment' => 'Tema dosyalarında backend üzerinden bir değişiklik yapıldığında tutulan kayıtlar.',
    ],
    'media' => [
        'invalid_path' => "Geçersiz dosya dizini belirtildi: ':path'.",
        'folder_size_items' => 'öğe(ler)',
    ],
];
