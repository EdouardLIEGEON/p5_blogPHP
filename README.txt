J'ai suivi une série de cours sur php et la poo et l'une des vidéos expliquait comment avoir un site avec des urls plus propres que les 
régulier localhost/... Mais la méthode ne fonctionne pas avec WAMP, c'est pourquoi j'ai choisi d'utiliser Laragon, ce que je vous encourage 
à faire pour lire l'application.

Étape 1 : Allez sur le site officiel de Laragon pour télécharger le fichier Laragon - Full( 147MB) 
Installer le à la racine du C: comme WAMP.

Étape 2 : Ouvrez Laragon, un panneau s'ouvre. Allez dans les paramètres avec l'icone en haut à droite. 
-> Dans "Général" cochez si besoin "Démarrer Laragon avec Windows" et "Créer automatiquemnt des hôtes virtuels"
-> Dans "Services & Ports" cochez "Apache" avec le port 80 et SSL 443 et "Activé" ainsi que MySQL (port 3306).
Le reste ne devrait pas être utile

Voilà la bonne configuration à avoir  dans Laragon/etc/apache2/sites-enabled/auto.p5_blogPHP.test.conf : 

define ROOT "C:/laragon/www/p5_blogPHP/public"
define SITE "p5_blogPHP.test"

<VirtualHost *:80> 
    DocumentRoot "${ROOT}"
    ServerName ${SITE}
    ServerAlias *.${SITE}
    <Directory "${ROOT}">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:443>
    DocumentRoot "${ROOT}"
    ServerName ${SITE}
    ServerAlias *.${SITE}
    <Directory "${ROOT}">
        AllowOverride All
        Require all granted
    </Directory>

    SSLEngine on
    SSLCertificateFile      C:/laragon/etc/ssl/laragon.crt
    SSLCertificateKeyFile   C:/laragon/etc/ssl/laragon.key
 
</VirtualHost>

Vous pouvez recharger Laragon sur le panneau si ce n'est pas fait automatiquement et cliquez sur "Démarrer" en bas à gauche du panneau.

Étape 3 : Cliquez sur "Base de données" en bas du panneau de Laragon pour accéder à PHPMyadmin avec utilisateur : "root" et mdp : ""
Installer le fichier sql du projet dans "Importer".

Étape 4 : Accédez à l'application sur cet url : p5_blogphp.test