<?php

return [
    'email' => [
        'title' => 'E-postanızı güncelleyin',
        'updated' => 'E-posta adresiniz güncellendi.',
    ],
    'password' => [
        'title' => 'Şifrenizi değiştirin',
        'requirements' => 'Yeni şifreniz en az 8 karakter uzunluğunda olmalıdır.',
        'updated' => 'Şifreniz güncellendi.',
    ],
    'two_factor' => [
        'button' => '2-Factor Authentication\'u yapılandırın',
        'disabled' => 'Hesabınızda iki faktörlü kimlik doğrulama devre dışı bırakıldı. Artık giriş yaparken bir belirteç sağlamayacağınızı unutmayın.',
        'enabled' => 'Hesabınızda iki faktörlü kimlik doğrulama etkinleştirildi! Artık giriş yaparken cihazınız tarafından oluşturulan kodu sağlamanız gerekecek.',
        'invalid' => 'Sağlanan belirteç geçersizdi.',
        'setup' => [
            'title' => 'İki faktörlü kimlik doğrulamayı kurun',
            'help' => 'Kodu tarayamıyor musunuz? Uygulamanıza aşağıdaki kodu girin:',
            'field' => 'Belirteci girin',
        ],
        'disable' => [
            'title' => 'İki faktörlü kimlik doğrulamayı devre dışı bırakın',
            'field' => 'Belirteci girin',
        ],
    ],
];