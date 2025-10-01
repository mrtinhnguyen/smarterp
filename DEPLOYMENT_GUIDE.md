# Hướng dẫn Deploy Laravel ERP lên Server

## 📋 Yêu cầu hệ thống

### Server Requirements
- **PHP**: 8.1 hoặc cao hơn
- **Composer**: 2.0+
- **Node.js**: 16+ (cho Vite)
- **NPM/Yarn**: Để build assets
- **Database**: MySQL 8.0+ hoặc PostgreSQL 13+
- **Web Server**: Nginx hoặc Apache
- **SSL Certificate**: Let's Encrypt (khuyến nghị)

### PHP Extensions
```bash
php-mbstring
php-xml
php-curl
php-gd
php-zip
php-mysql
php-bcmath
php-intl
php-fileinfo
php-openssl
php-tokenizer
php-json
php-pdo
php-dom
php-filter
php-hash
php-iconv
php-json
php-mbstring
php-openssl
php-pcre
php-pdo
php-session
php-tokenizer
php-xml
```

## 🚀 Bước 1: Chuẩn bị Server

### 1.1 Cập nhật hệ thống
```bash
# Ubuntu/Debian
sudo apt update && sudo apt upgrade -y

# CentOS/RHEL
sudo yum update -y
```

### 1.2 Cài đặt PHP 8.1+
```bash
# Ubuntu/Debian
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.1 php8.1-cli php8.1-fpm php8.1-mysql php8.1-xml php8.1-curl php8.1-gd php8.1-zip php8.1-mbstring php8.1-bcmath php8.1-intl

# CentOS/RHEL
sudo dnf install php81 php81-php-cli php81-php-fpm php81-php-mysql php81-php-xml php81-php-curl php81-php-gd php81-php-zip php81-php-mbstring php81-php-bcmath php81-php-intl
```

### 1.3 Cài đặt Composer
```bash
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer
```

### 1.4 Cài đặt Node.js
```bash
# Sử dụng NodeSource repository
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt-get install -y nodejs

# Hoặc sử dụng nvm
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
source ~/.bashrc
nvm install 18
nvm use 18
```

### 1.5 Cài đặt Database
```bash
# MySQL
sudo apt install mysql-server
sudo mysql_secure_installation

# PostgreSQL
sudo apt install postgresql postgresql-contrib
```

## 🗄️ Bước 2: Cấu hình Database

### 2.1 Tạo Database và User
```sql
-- MySQL
CREATE DATABASE haka_erp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'haka_user'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT ALL PRIVILEGES ON haka_erp.* TO 'haka_user'@'localhost';
FLUSH PRIVILEGES;

-- PostgreSQL
CREATE DATABASE haka_erp;
CREATE USER haka_user WITH PASSWORD 'strong_password_here';
GRANT ALL PRIVILEGES ON DATABASE haka_erp TO haka_user;
```

## 📁 Bước 3: Upload và Cấu hình Code

### 3.1 Upload code lên server
```bash
# Sử dụng Git (khuyến nghị)
git clone https://github.com/your-repo/haka-erp.git /var/www/haka-erp
cd /var/www/haka-erp

# Hoặc upload qua FTP/SFTP
# Upload toàn bộ thư mục project lên /var/www/haka-erp
```

### 3.2 Cấu hình quyền
```bash
sudo chown -R www-data:www-data /var/www/haka-erp
sudo chmod -R 755 /var/www/haka-erp
sudo chmod -R 775 /var/www/haka-erp/storage
sudo chmod -R 775 /var/www/haka-erp/bootstrap/cache
```

### 3.3 Cài đặt dependencies
```bash
cd /var/www/haka-erp

# Cài đặt PHP dependencies
composer install --optimize-autoloader --no-dev

# Cài đặt Node.js dependencies
npm install

# Build assets
npm run build
```

## ⚙️ Bước 4: Cấu hình Environment

### 4.1 Tạo file .env
```bash
cp .env.example .env
nano .env
```

### 4.2 Cấu hình .env cho production
```env
APP_NAME="Haka ERP"
APP_ENV=production
APP_KEY=base64:your_generated_key_here
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=haka_erp
DB_USERNAME=haka_user
DB_PASSWORD=strong_password_here

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

### 4.3 Generate Application Key
```bash
php artisan key:generate
```

## 🗃️ Bước 5: Chạy Migrations và Seeders

### 5.1 Chạy migrations
```bash
php artisan migrate --force
```

### 5.2 Chạy seeders (nếu cần)
```bash
php artisan db:seed --force
```

### 5.3 Cài đặt ERP plugins
```bash
php artisan erp:install
```

## 🌐 Bước 6: Cấu hình Web Server

### 6.1 Nginx Configuration
```bash
sudo nano /etc/nginx/sites-available/haka-erp
```

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/haka-erp/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### 6.2 Enable site
```bash
sudo ln -s /etc/nginx/sites-available/haka-erp /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

### 6.3 Apache Configuration (Alternative)
```apache
<VirtualHost *:80>
    ServerName yourdomain.com
    DocumentRoot /var/www/haka-erp/public

    <Directory /var/www/haka-erp/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/haka-erp_error.log
    CustomLog ${APACHE_LOG_DIR}/haka-erp_access.log combined
</VirtualHost>
```

## 🔒 Bước 7: Cài đặt SSL Certificate

### 7.1 Sử dụng Let's Encrypt
```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

### 7.2 Auto-renewal
```bash
sudo crontab -e
# Thêm dòng sau:
0 12 * * * /usr/bin/certbot renew --quiet
```

## ⚡ Bước 8: Tối ưu hóa Performance

### 8.1 Cấu hình PHP-FPM
```bash
sudo nano /etc/php/8.1/fpm/pool.d/www.conf
```

```ini
pm = dynamic
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
pm.max_requests = 1000
```

### 8.2 Tối ưu hóa Laravel
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize
```

### 8.3 Cấu hình Redis (Optional)
```bash
sudo apt install redis-server
sudo systemctl enable redis-server
sudo systemctl start redis-server
```

## 🔧 Bước 9: Cấu hình Cron Jobs

### 9.1 Thêm Laravel Scheduler
```bash
sudo crontab -e
# Thêm dòng sau:
* * * * * cd /var/www/haka-erp && php artisan schedule:run >> /dev/null 2>&1
```

## 📊 Bước 10: Monitoring và Logs

### 10.1 Cấu hình Log Rotation
```bash
sudo nano /etc/logrotate.d/haka-erp
```

```
/var/www/haka-erp/storage/logs/*.log {
    daily
    missingok
    rotate 14
    compress
    notifempty
    create 644 www-data www-data
}
```

### 10.2 Monitoring Commands
```bash
# Kiểm tra status
sudo systemctl status nginx
sudo systemctl status php8.1-fpm
sudo systemctl status mysql

# Kiểm tra logs
sudo tail -f /var/log/nginx/error.log
sudo tail -f /var/www/haka-erp/storage/logs/laravel.log
```

## 🚨 Troubleshooting

### Common Issues

1. **Permission Issues**
```bash
sudo chown -R www-data:www-data /var/www/haka-erp
sudo chmod -R 755 /var/www/haka-erp
sudo chmod -R 775 /var/www/haka-erp/storage
sudo chmod -R 775 /var/www/haka-erp/bootstrap/cache
```

2. **Database Connection Issues**
```bash
# Kiểm tra database connection
php artisan tinker
>>> DB::connection()->getPdo();
```

3. **Asset Issues**
```bash
# Rebuild assets
npm run build
php artisan view:clear
php artisan cache:clear
```

4. **Plugin Issues**
```bash
# Reinstall plugins
php artisan erp:install --force
```

## 📝 Checklist Deploy

- [ ] Server requirements đã đáp ứng
- [ ] Database đã được tạo và cấu hình
- [ ] Code đã được upload
- [ ] Dependencies đã được cài đặt
- [ ] Environment variables đã được cấu hình
- [ ] Application key đã được generate
- [ ] Migrations đã được chạy
- [ ] ERP plugins đã được cài đặt
- [ ] Web server đã được cấu hình
- [ ] SSL certificate đã được cài đặt
- [ ] Performance optimizations đã được áp dụng
- [ ] Cron jobs đã được cấu hình
- [ ] Monitoring đã được thiết lập

## 🔄 Backup Strategy

### Database Backup
```bash
# Tạo backup script
sudo nano /usr/local/bin/backup-haka-erp.sh
```

```bash
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/backup/haka-erp"
mkdir -p $BACKUP_DIR

# Database backup
mysqldump -u haka_user -p haka_erp > $BACKUP_DIR/database_$DATE.sql

# Files backup
tar -czf $BACKUP_DIR/files_$DATE.tar.gz /var/www/haka-erp

# Keep only last 7 days
find $BACKUP_DIR -name "*.sql" -mtime +7 -delete
find $BACKUP_DIR -name "*.tar.gz" -mtime +7 -delete
```

```bash
sudo chmod +x /usr/local/bin/backup-haka-erp.sh
sudo crontab -e
# Thêm: 0 2 * * * /usr/local/bin/backup-haka-erp.sh
```

## 📞 Support

Nếu gặp vấn đề trong quá trình deploy, hãy kiểm tra:
1. Logs của web server
2. Logs của PHP-FPM
3. Logs của Laravel
4. Database connection
5. File permissions
6. Environment configuration

---

**Lưu ý**: Thay thế `yourdomain.com` bằng domain thực tế của bạn và cập nhật các thông tin database, email phù hợp với môi trường production.
