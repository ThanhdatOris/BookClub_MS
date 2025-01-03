# BookClub_MS
 Hệ thống quản lý CLB SV Yêu Thích Sách CTUT

# Khởi tạo dự án
- Tải về .zip code php phiên bản tối thiểu 8.2 tại: https://windows.php.net/download/
- Giải nén thư mục vào laragon/bin/php
- Switch phiên bản php tại giao diện laragon (mục menu)
- Cài đặt composer
- Tạo dự án với tên "bookclub"
```bash
composer create-project symfony/skeleton ./
composer update
```
- Cài các gói composer cần thiết (xem phụ lục)
- Cấu hình .env
```php
DATABASE_URL="mysql://root:password@127.0.0.1:3306/bookclub?serverVersion=8.0.32&charset=utf8mb4"
```
- Kiểm tra kết nối
```bash
php bin/console doctrine:database:create
#kết quả
C:\laragon\www\BookClub_MS\bookclub>php bin/console doctrine:database:create
Created database `bookclub` for connection named default
```
- Tạo entity
```bash
php bin/console make:entity <tên_entity>
```
- Sau khi update entity
```bash
php bin/console doctrine:database:create  # Nếu chưa tạo database
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

