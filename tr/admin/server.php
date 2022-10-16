<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Bu sunucunun varsayılan dağıtımını silmeye çalışıyorsunuz ancak kullanılacak bir yedek dağıtım yok.',
        'marked_as_failed' => 'Bu sunucu, önceki bir kurulumda başarısız olarak işaretlendi. Bu durum şu anda değiştirilemez.',
        'bad_variable' => ':name değişkeni ile ilgili bir doğrulama hatası vardı.',
        'daemon_exception' => 'Daemon ile iletişim kurmaya çalışırken bir istisna oluştu ve HTTP/:code yanıt kodu ile sonuçlandı. Bu istisna kaydedildi. (istek kimliği: :request_id)',
        'default_allocation_not_found' => 'İstenen varsayılan dağıtım, bu sunucunun dağıtımlarında bulunamadı.',
    ],
    'alerts' => [
        'startup_changed' => 'Bu sunucunun başlangıç ​​yapılandırması güncellendi. Bu sunucunun yuvası veya yumurtası değiştirildiyse, yeniden kurulum şimdi gerçekleşecek.',
        'server_deleted' => 'Sunucu sistemden başarıyla silindi.',
        'server_created' => 'Sunucu panelde başarıyla oluşturuldu. Lütfen daemon bu sunucuyu tamamen yüklemek için birkaç dakika bekleyin.',
        'build_updated' => 'Bu sunucunun oluşturma ayrıntıları güncellendi. Bazı değişikliklerin etkili olması için yeniden başlatılması gerekebilir.',
        'suspension_toggled' => 'Sunucu askı durumu :status olarak değiştirildi.',
        'rebuild_on_boot' => 'Bu sunucu, bir Docker Konteyneri yeniden oluşturulması gerektiği olarak işaretlendi. Bu, sunucu yeniden başlatıldığında gerçekleşecek.',
        'install_toggled' => 'Bu sunucunun kurulum durumu değiştirildi.',
        'server_reinstalled' => 'Bu sunucu, şimdi yeniden kurulum için sıraya alındı.',
        'details_updated' => 'Sunucu ayrıntıları başarıyla güncellendi.',
        'docker_image_updated' => 'Bu sunucu için kullanılacak varsayılan Docker görüntüsü başarıyla değiştirildi. Bu değişikliği uygulamak için yeniden başlatma gereklidir.',
        'node_required' => 'Sunucu eklemek için bu panelde en az bir node yapılandırmanız gerekir.',
        'transfer_nodes_required' => 'Sunucuları aktarmak için bu panelde en az iki node yapılandırmanız gerekir.',
        'transfer_started' => 'Sunucu aktarımı başlatıldı.',
        'transfer_not_viable' => 'Seçtiğiniz node, bu sunucuyu barındırmak için gerekli disk alanı veya bellek mevcut değil.',
    ],
];