# crudLaravel5.8

![ScreenshotTelaInicial](https://user-images.githubusercontent.com/8695642/64785994-f0251d00-d543-11e9-9338-3ff21f80e633.png)

Simples estrutura de CRUD criada com base no tutorial do site 5balloons.info através da URL: https://www.5balloons.info/tutorial-simple-crud-operations-in-laravel-5-5/

Ferramentas utilizadas:
-XAMPP no LInux Mint 19.1
-Visual Studio Code

Habilitei o virtual hosts no XAMPP e o configurei editando o arquivo /opt/lampp/etc/extra/httpd-vhosts.conf 

# VirtualHost for laravel.local
 
<VirtualHost laravel.local:80>
  DocumentRoot "/opt/lampp/htdocs/crudlaravel/public"
  ServerAdmin laravel.local
  <Directory "/opt/lampp/htdocs/crudlaravel">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>
