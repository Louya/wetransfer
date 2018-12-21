# EZ-Transfer

Projet pédagogique AccessCodeSchool - Site de transfert de fichier sur le modèle de wetransfer.

## Pour commencer

Ces instructions vont vous permettre de copier, d'installer et de faire fonctionner le projet sur votre machine à but de développement. Pour installer le projet sur un server veuillez vous reporter à la section déploiement. 

### Prerequis

modules à installer
Composer install
npm install bootstrap


### Installation

Compiler le css
sass sass/main.scss css/main.css
sass sass/dashboard.scss css/dashboard.css

Charger la base de données
importer le ficher eztransfer.sql
ajouter les paramètre de connexions à la base de données dans le fichier model/set_PDO.php

## Tests de fonctionnement

Pour vérifier que le site fonctionne correctement connextez-vous en tapant

http://:localhost/home

ou l'adressse de votre serveur si vous l'utilisez en ligne.

## Déployement

Vérifier que le serveur :
redirection url,
taille maximal d'upload php,
taille maximum upload serveur,
droit d'acces au dossier /fichier

## Construit avec

* [Sass](https://sass-lang.com/documentation/)  - Extension CSS
* [Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/) - Librairie front-end de composants
* [Composer](https://maven.apache.org/) - PHP dependency Management
* [npm](https://www.npmjs.com/) - JS Dépendancy management

## Version

* Version 0.9.0

Nous utilisons [SemVer](http://semver.org/) pour le versionning.

## Auteurs

* **Fabien Cazalet** - *Initial work* - [Louya](https://github.com/Louya)
* **Elodie Martin** - *Initial work* - [elodie-martin](https://github.com/elodie-martin)
* **Gaëtan Emond** - *Initial work* - [gaetanemd](https://github.com/gaetanemd)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details