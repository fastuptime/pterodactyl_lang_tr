<?php

return [
    'auth' => [
        'fail' => 'Kimlik doğrulama başarısız',
        'success' => 'Kimlik doğrulama başarılı',
        'password-reset' => 'Şifre sıfırlama başarılı',
        'reset-password' => 'Şifreyi sıfırla',
        'checkpoint' => 'İki faktörlü kimlik doğrulama istendi',
        'recovery-token' => 'İki faktörlü kurtarma kodu kullanıldı',
        'token' => 'İki faktörlü soruyu çözdü',
        'ip-blocked' => 'Listelenmeyen IP adresinden :identifier için engellendi',
        'sftp' => [
            'fail' => 'SFTP girişi başarısız',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-posta değiştirildi :old to :new',
            'password-changed' => 'Şifre değiştirildi',
        ],
        'api-key' => [
            'create' => 'Yeni API anahtarı oluşturuldu :identifier',
            'delete' => 'API anahtarı silindi :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH anahtarı hesaba eklendi :fingerprint',
            'delete' => 'SSH anahtarı hesaptan kaldırıldı :fingerprint',
        ],
        'two-factor' => [
            'create' => 'İki faktörlü kimlik doğrulama etkinleştirildi',
            'delete' => 'İki faktörlü kimlik doğrulama devre dışı bırakıldı',
        ],
    ],
    'server'=> [
        'reinstall' => 'Sunucu yeniden yüklendi',
        'console' => [
            'command' => 'Sunucuda ":command" komutu çalıştırıldı',
        ],
        'power' => [
            'start' => 'Sunucu başlatıldı',
            'stop' => 'Sunucu durduruldu',
            'restart' => 'Sunucu yeniden başlatıldı',
            'kill' => 'Sunucu işlemi öldürüldü',
        ],
        'backup' => [
            'download' => ':name yedeklemesi indirildi',
            'delete' => ':name yedeklemesi silindi',
            'restore' => ':name yedeklemesi geri yüklendi (silinen dosyalar: :truncate)',
            'restore-complete' => ':name yedeklemesi geri yükleme tamamlandı',
            'restore-failed' => ':name yedeklemesi geri yükleme tamamlanamadı',
            'start' => ':name yedeklemesi için yeni bir yedekleme başlatıldı',
            'complete' => ':name yedeklemesi tamamlandı olarak işaretlendi',
            'fail' => ':name yedeklemesi başarısız olarak işaretlendi',
            'lock' => ':name yedeklemesi kilitlendi',
            'unlock' => ':name yedeklemesi kilidi açıldı',
        ],
        'database' => [
            'create' => ':name veritabanı oluşturuldu',
            'rotate-password' => ':name veritabanı için şifre döndürüldü',
            'delete' => ':name veritabanı silindi',
        ],
        'file' => [
            'compress_one' => ':directory:file sıkıştırıldı',
            'compress_other' => ':count dosya :directory dizininde sıkıştırıldı',
            'read' => ':file dosyasının içeriği görüntülendi',
            'copy' => ':file dosyasının bir kopyası oluşturuldu',
            'create-directory' => ':directory dizini oluşturuldu',
            'decompress' => ':files dosyaları :directory dizinine sıkıştırıldı',
            'delete_one' => ':directory:files.0 dosyası silindi',
            'delete_other' => ':count dosya :directory dizininde silindi',
            'download' => ':file dosyası indirildi',
            'pull' => ':url adresinden :directory dizinine uzak dosya indirildi',
            'rename_one' => ':directory:files.0.from dosyası :directory:files.0.to olarak yeniden adlandırıldı',
            'rename_other' => ':count dosya :directory dizininde yeniden adlandırıldı',
            'write' => ':file dosyasına yeni içerik yazıldı',
            'upload' => ':directory dizinine dosya yükleme işlemi başlatıldı',
            'uploaded' => ':directory:file dosyası yüklendi',
        ],
        'sftp' => [
            'denied' => 'SFTP erişimi reddedildi',
            'create_one' => ':files.0 oluşturuldu',
            'create_other' => ':count yeni dosya oluşturuldu',
            'write_one' => ':files.0 dosyasının içeriği değiştirildi',
            'write_other' => ':count dosyanın içeriği değiştirildi',
            'delete_one' => ':files.0 dosyası silindi',
            'delete_other' => ':count dosya silindi',
            'create-directory_one' => ':files.0 dizini oluşturuldu',
            'create-directory_other' => ':count dizin oluşturuldu',
            'rename_one' => ':files.0.from dosyası :files.0.to olarak yeniden adlandırıldı',
            'rename_other' => ':count dosya yeniden adlandırıldı',
        ],
        'allocation' => [
            'create' => ':allocation sunucuya eklendi',
            'notes' => ':allocation için notlar ":old" olarak güncellendi ":new"',
            'primary' => ':allocation sunucunun birincil dağıtımı olarak ayarlandı',
            'delete' => ':allocation dağıtımı silindi',
        ],
        'schedule' => [
            'create' => ':name zamanlama oluşturuldu',
            'update' => ':name zamanlama güncellendi',
            'execute' => ':name zamanlaması manuel olarak çalıştırıldı',
            'delete' => ':name zamanlaması silindi',
        ],
        'task' => [
            'create' => ':name zamanlaması için ":action" görevi oluşturuldu',
            'update' => ':name zamanlaması için ":action" görevi güncellendi',
            'delete' => ':name zamanlaması için bir görev silindi',
        ],
        'settings' => [
            'rename' => 'Sunucu :old isminden :new olarak yeniden adlandırıldı',
        ],
        'startup' => [
            'edit' => ':variable değişkeni :old isminden :new olarak değiştirildi',
            'image' => 'Sunucu için Docker imajı :old isminden :new olarak değiştirildi',
        ],
        'subuser' => [
            'create' => ':email alt kullanıcı olarak eklendi',
            'update' => ':email alt kullanıcısının izinleri güncellendi',
            'delete' => ':email alt kullanıcı olarak silindi',
        ],
    ],
];