RewriteEngine On

# Allow direct access to radio-fm.php
RewriteRule ^radio-fm\.php$ - [L]

# Redirect all other requests to index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [L]
