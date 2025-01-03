# Các gói composer cần thiết
1. Doctrine ORM (Quản lý cơ sở dữ liệu):
```bash
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
```
- Giải thích: Quản lý các thao tác CRUD với cơ sở dữ liệu.

2. Twig (Giao diện):
```bash
composer require symfony/twig-pack
```
- Giải thích: Dùng để render view một cách dễ dàng.

3. Security (Phân quyền):
```bash
composer require symfony/security-bundle
```
- Giải thích: Quản lý đăng nhập, phân quyền (admin và thành viên).

4. Form (Biểu mẫu):
```bash
composer require symfony/form
```
- Giải thích: Hỗ trợ tạo và xử lý form nhập liệu cho thành viên, hoạt động, quỹ.

5. Validator (Xác thực dữ liệu):
```bash
composer require symfony/validator
```
- Giải thích: Kiểm tra dữ liệu nhập vào như email, số điện thoại.

6. Translation (Đa ngôn ngữ):
```bash
composer require symfony/translation
```
- Giải thích: Hữu ích nếu bạn cần hỗ trợ giao diện đa ngôn ngữ.

7. Serializer (Xử lý JSON):
```bash
composer require symfony/serializer
```
- Giải thích: Dùng để chuyển đổi dữ liệu thành JSON (hữu ích cho API).

8. API Platform (Nếu có nhu cầu mở rộng API):
```bash
composer require api
```
- Giải thích: Tạo API nhanh chóng và chuyên nghiệp.

9. Asset (Quản lý CSS/JS):
```bash
composer require symfony/asset
```
- Giải thích: Hỗ trợ quản lý tệp CSS và JavaScript.

10. Webpack Encore (Biên dịch CSS/JS):
```bash
composer require symfony/webpack-encore-bundle
yarn install
```
- Giải thích: Biên dịch và tối ưu tệp giao diện.

11. Pagination (Phân trang):

```bash
composer require knplabs/knp-paginator-bundle
```
- Giải thích: Hỗ trợ phân trang cho danh sách thành viên, hoạt động.

12. Chart.js (Thống kê biểu đồ):

```bash
composer require phpoffice/phpspreadsheet
```
- Giải thích: Tạo biểu đồ cho báo cáo quỹ và hoạt động.

13. SwiftMailer (Gửi email):

```bash
composer require symfony/mailer
```
- Giải thích: Gửi email thông báo cho thành viên hoặc admin.

14. PHPUnit (Kiểm thử):
```bash
composer require --dev symfony/phpunit-bridge
```
- Giải thích: Kiểm thử các chức năng trước khi triển khai.

## Cài đặt tất cả gói trên:

```bash
composer require symfony/orm-pack symfony/maker-bundle symfony/twig-pack symfony/security-bundle symfony/form symfony/validator symfony/translation symfony/serializer knplabs/knp-paginator-bundle symfony/asset symfony/webpack-encore-bundle symfony/mailer
composer require --dev symfony/phpunit-bridge
```