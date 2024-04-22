# Plug and Play

Built-in web server

```bash
 docker run --rm \
 -p 9000:9000 \
 -v "$PWD":/var/www/html \
 php:8.3-alpine \
 php -S 0.0.0.0:9000 -t /var/www/html
```