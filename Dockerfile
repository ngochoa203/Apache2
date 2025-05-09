# Sử dụng image chính thức PHP có Apache
FROM php:8.1-apache

# Copy toàn bộ mã nguồn vào thư mục gốc web
COPY . /var/www/html/

# Mở port 80
EXPOSE 80
