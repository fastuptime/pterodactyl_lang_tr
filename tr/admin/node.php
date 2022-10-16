<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Sağlanan FQDN veya IP adresi geçerli bir IP adresine yönlendirilmiyor.',
        'fqdn_required_for_ssl' => 'Bu düğüm için SSL kullanmak için bir FQDN ve bir de genel IP adresi gereklidir.',
    ],
    'notices' => [
        'allocations_added' => 'Bu düğüme başarıyla dağıtımlar eklendi.',
        'node_deleted' => 'Düğüm panelden başarıyla kaldırıldı.',
        'location_required' => 'Bu panelde bir düğüm eklemek için en az bir konum yapılandırmanız gerekir.',
        'node_created' => 'Yeni düğüm başarıyla oluşturuldu. Bu makinede daemona otomatik olarak erişmek için \'Yapılandırma\' sekmesini ziyaret edebilirsiniz. <strong>Herhangi bir sunucu ekleyebilmek için önce en az bir IP adresi ve bağlantı noktası atamalısınız.</strong>',
        'node_updated' => 'Düğüm bilgileri güncellendi. Herhangi bir daemona yapılandırma değişikliği yapıldıysa, bu değişikliklerin etkili olması için yeniden başlatılması gerekecektir.',
        'unallocated_deleted' => '<code>:ip</code> için tüm atanmamış bağlantı noktaları silindi.',
    ],
];