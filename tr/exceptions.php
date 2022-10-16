<?php

return [
    'daemon_connection_failed' => 'Daemon ile iletişim kurulurken bir istisna oluştu ve HTTP/:code yanıt kodu ile sonuçlandı. Bu istisna kaydedildi.',
    'node' => [
        'servers_attached' => 'Bir düğümün silinmesi için hiçbir sunucuya bağlı olmaması gerekir.',
        'daemon_off_config_updated' => 'Daemon yapılandırması <strong>güncellendi</strong>, ancak Daemon üzerinde yapılandırma dosyasını otomatik olarak güncellerken bir hata ile karşılaşıldı. Bu değişiklikleri uygulamak için Daemon için yapılandırma dosyasını (config.yml) manuel olarak güncellemeniz gerekir.',
    ],
    'allocations' => [
        'server_using' => 'Bu tahsise bir sunucu şu anda atanmış. Bir tahsis yalnızca hiçbir sunucu atanmadığı sürece silinebilir.',
        'too_many_ports' => 'Aynı anda 1000\'den fazla bağlantıyı tek bir aralıkta eklemek desteklenmiyor.',
        'invalid_mapping' => ':port için sağlanan eşleme geçersiz ve işlenemedi.',
        'cidr_out_of_range' => 'CIDR gösterimi yalnızca / 25 ve / 32 arasında maskeleri içerir.',
        'port_out_of_range' => 'Bir tahsisteki bağlantılar 1024\'ten büyük ve 65535\'e eşit veya daha az olmalıdır.',
    ],
    'nest' => [
        'delete_has_servers' => 'Aktif sunucularla bağlantılı bir Yumurtadan Panel\'den silinemez.',
        'egg' => [
            'delete_has_servers' => 'Aktif sunucularla bağlantılı bir Yumurtadan Panel\'den silinemez.',
            'invalid_copy_id' => 'Yumurtadan kopyalanacak bir betiği seçtiğinizden veya kendi betiğini kopyaladığınızdan emin olun.',
            'must_be_child' => '"Kopyalanan Ayarlar" bu Yumurtanın seçilen Yumurtaya bir alt seçenek olmalıdır.',
            'has_children' => 'Bu Yumurta bir veya daha fazla diğer Yumurtanın bir parçasıdır. Lütfen bu Yumurtayı silmeden önce bu Yumurtaları silin.',
        ],
        'variables' => [
            'env_not_unique' => 'Bu Yumurtanın ortam değişkeni :name benzersiz olmalıdır.',
            'reserved_name' => 'Ortam değişkeni :name korumalıdır ve bir değişkene atanamaz.',
            'bad_validation_rule' => '":rule" doğrulama kuralı bu uygulama için geçerli bir kural değildir.',
        ],
        'importer' => [
            'json_error' => 'JSON dosyasını ayrıştırmaya çalışırken bir hata oluştu: :error.',
            'file_error' => 'Sağlanan JSON dosyası geçerli değil.',
            'invalid_json_provided' => 'Sağlanan JSON dosyası tanınabilir bir biçimde değil.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Kendi alt kullanıcı hesabınızı düzenlemek yasaktır.',
        'user_is_owner' => 'Bu sunucu sahibini bu sunucu için bir alt kullanıcı olarak ekleyemezsiniz.',
        'subuser_exists' => 'Bu sunucu için bir alt kullanıcı olarak atanmış bir kullanıcı zaten bu e-posta adresine sahip.',
    ],
    'databases' => [
        'delete_has_databases' => 'Aktif veritabanlarına bağlı bir veritabanı ana sunucudan silinemez.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Bir zincirli görev için maksimum aralık süresi 15 dakikadır.',
    ],
    'locations' => [
        'has_nodes' => 'Bir konuma bağlı aktif düğümler olan bir konum silinemez.',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Düğüm #:node</a> üzerinde anahtarları iptal etme başarısız oldu. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan düğüm bulunamadı.',
        'no_viable_allocations' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan tahsisler bulunamadı.',
    ],
    'api' => [
        'resource_not_found' => 'İstenen kaynak bulunamadı.',
    ],
];