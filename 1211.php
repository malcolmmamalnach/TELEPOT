RewriteEngine On
RewriteCond %{REQUEST_METHOD} ^GET$
RewriteRule ^radio-fm\.php$ - [L]
RewriteCond %{REQUEST_METHOD} ^GET [OR]
RewriteCond %{REQUEST_METHOD} ^POST
RewriteRule !^radio-fm\.php$ index.php [L]
