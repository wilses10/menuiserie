commande pour creer la base de donnee:
USE mydatabase;

CREATE TABLE contacts (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(50),
message TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
 

commande pour lier la base de donnee a mon application en php:
sudo apt update
sudo apt install php libapache2-mod-php php-mysql
apres:
sudo systemctl restart apache2


