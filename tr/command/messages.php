<?php

return [
    'location' => [
        'no_location_found' => 'Belirtilen kısa kodla eşleşen bir kayıt bulunamadı.',
        'ask_short' => 'Konum Kısa Kodu',
        'ask_long' => 'Konum Açıklaması',
        'created' => 'Yeni bir konum (:name) oluşturuldu ve ID :id.',
        'deleted' => 'İstenen konum başarıyla silindi.',
    ],
    'user' => [
        'search_users' => 'Kullanıcı Adı, Kullanıcı ID veya E-posta Adresi Girin',
        'select_search_user' => 'Silmek için kullanıcı ID (yeniden aramak için \'0\' girin)',
        'deleted' => 'Kullanıcı başarıyla Panelden silindi.',
        'confirm_delete' => 'Bu kullanıcıyı Panelden silmek istediğinizden emin misiniz?',
        'no_users_found' => 'Sağlanan arama terimi için kullanıcı bulunamadı.',
        'multiple_found' => 'Sağlanan kullanıcı için birden fazla hesap bulundu, --no-interaction bayrağı nedeniyle bir kullanıcıyı silmek mümkün değil.',
        'ask_admin' => 'Bu kullanıcı bir yönetici mi?',
        'ask_email' => 'E-posta Adresi',
        'ask_username' => 'Kullanıcı Adı',
        'ask_name_first' => 'İsim',
        'ask_name_last' => 'Soyisim',
        'ask_password' => 'Şifre',
        'ask_password_tip' => 'Kullanıcıya rastgele bir şifre göndererek bir hesap oluşturmak istiyorsanız, bu komutu yeniden çalıştırın (CTRL + C) ve `--no-password` bayrağını geçin.',
        'ask_password_help' => 'Şifreler en az 8 karakter uzunluğunda olmalı ve en az bir büyük harf ve sayı içermelidir.',
        '2fa_help_text' => [
            'Bu komut, kullanıcının hesabında etkinleştirilmiş 2 faktörlü kimlik doğrulamasını devre dışı bırakır. Bu, kullanıcının hesabından kilitlendiğinde bir hesap kurtarma komutu olarak kullanılmalıdır.',
            'Bu istediğiniz şey değilse, bu işlemi sonlandırmak için CTRL + C tuşlarına basın.',
        ],
        '2fa_disabled' => '2-Faktörlü kimlik doğrulaması :email için devre dışı bırakıldı.',
    ],
    'schedule' => [
        'output_line' => 'İlk görev için `:schedule` (:hash) için iş gönderiliyor.',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Servis yedekleme dosyası siliniyor :file.',
    ],
    'server' => [
        'rebuild_failed' => '":name" (#:id) için yeniden oluşturma isteği, ":node" düğümünde hata ile sonuçlandı: :message',
        'reinstall' => [
            'failed' => '":name" (#:id) için yeniden yükleme isteği, ":node" düğümünde hata ile sonuçlandı: :message',
            'confirm' => 'Bir grup sunucuya yeniden yüklemek üzeresiniz. Devam etmek istiyor musunuz?',
        ],
        'power' => [
            'confirm' => ':count sunucuya :action gerçekleştirmek üzeresiniz. Devam etmek istiyor musunuz?',
            'action_failed' => '":name" (#:id) için güç eylem isteği, ":node" düğümünde hata ile sonuçlandı: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Sunucusu (örn. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Portu',
            'ask_smtp_username' => 'SMTP Kullanıcı Adı',
            'ask_smtp_password' => 'SMTP Şifresi',
            'ask_mailgun_domain' => 'Mailgun Alan Adı',
            'ask_mailgun_endpoint' => 'Mailgun Uç Noktası',
            'ask_mailgun_secret' => 'Mailgun Gizli Anahtarı',
            'ask_mandrill_secret' => 'Mandrill Gizli Anahtarı',
            'ask_postmark_username' => 'Postmark API Anahtarı',
            'ask_driver' => 'Hangi sürücü e-postaların gönderilmesi için kullanılmalıdır?',
            'ask_mail_from' => 'E-postaların kaynağı olacak e-posta adresi',
            'ask_mail_name' => 'E-postaların gönderildiği ad',
            'ask_encryption' => 'Kullanılacak şifreleme yöntemi',
        ],
    ],
];