## PACKAGES

- [laravel/fortify](https://github.com/laravel/fortify)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [livewire/livewire](https://github.com/livewire/livewire)
- [alpinejs/alpine](https://github.com/alpinejs/alpine)
- [laravel/sail](https://github.com/laravel/sail)

## HTML, CSS

- [Tailwind CSS](https://tailwindcss.com)

## Sayfalar

- Dashboard *https://swordsec.test/dashboard*
- Sayfa #1 *https://swordsec.test/first-page*
- Sayfa #2 *https://swordsec.test/second-page*

## Kullanıcılar

- Admin (Tüm sayfaları görüntüleyebilir) *Kullanıcı adı:* admin@swordsec.com *Şifre:* password
- User #1 (Sadece dashboard ve sayfa #1'i görüntüleyebilir) *Kullanıcı adı:* user1@swordsec.com *Şifre:* password
- User #2 (Sadece dashboard ve sayfa #2'yi görüntüleyebilir) *Kullanıcı adı:* user2@swordsec.com *Şifre:* password

## Yükleme

- git clone https://github.com/ersanserkan/swordsec.git
- cd swordsec
- composer install
- cp .env.example .env
- php artisan key:generate
- ./vendor/bin/sail up -d
- ./vendor/bin/sail artisan migrate --seed