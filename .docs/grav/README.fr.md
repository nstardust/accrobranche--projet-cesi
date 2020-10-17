# ![](https://avatars1.githubusercontent.com/u/8237355?v=2&s=50) Grav

[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/cfd20465-d0f8-4a0a-8444-467f5b5f16ad/mini.png)](https://insight.sensiolabs.com/projects/cfd20465-d0f8-4a0a-8444-467f5b5f16ad)
[![Discord](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Discord%20Chat)](https://chat.getgrav.org)
 [![Build Status](https://travis-ci.org/getgrav/grav.svg?branch=develop)](https://travis-ci.org/getgrav/grav) [![OpenCollective](https://opencollective.com/grav/backers/badge.svg)](#backers) [![OpenCollective](https://opencollective.com/grav/sponsors/badge.svg)](#sponsors)

Grav est un file-based Web-platform (plate-forme Web basée sur des fichiers) **Rapide**, **Simple** et **Flexible**. **Aucune** installation n'est requise. Extrayez simplement l'archive ZIP et vous êtes déjà opérationnel. Il suit des principes similaires à ceux des autres flat-file CMS platforms (plates-formes CMS de fichiers plats), mais sa philosophie de conception est différente de la plupart. Grav est livré avec un puissant **système de gestion de packages** pour permettre une installation et une mise à niveau simples des plugins et des thèmes, ainsi qu'une simple mise à jour de Grav lui-même.

L'architecture sous-jacente de Grav est conçue pour utiliser des technologies bien établies et les meilleures de sa catégorie pour garantir que Grav est simple à utiliser et facile à étendre. Certaines de ces technologies clés comprennent:

* [Twig Templating](https://twig.sensiolabs.org/): pour un contrôle puissant de l'interface utilisateur
* [Markdown](https://en.wikipedia.org/wiki/Markdown): pour une création de contenu facile
* [YAML](https://yaml.org): pour une configuration simple
* [Parsedown](https://parsedown.org/): pour un support rapide de Markdown et Markdown Extra
* [Doctrine Cache](https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/caching.html): couche de performance
* [Pimple Dependency Injection Container](https://pimple.sensiolabs.org/): pour l'extensibilité et la maintenabilité
* [Symfony Event Dispatcher](https://symfony.com/doc/current/components/event_dispatcher/introduction.html): pour la gestion des événements des plugins
* [Symfony Console](https://symfony.com/doc/current/components/console/introduction.html): pour l'interface CLI (en ligne de commande)
* [Gregwar Image Library](https://github.com/Gregwar/Image): pour la manipulation d'image dynamique

# Exigences

- PHP 7.1.3 ou plus. Vérifier la [liste des modules requis](https://learn.getgrav.org/basics/requirements#php-requirements)
- Vérifier les exigences [Apache](https://learn.getgrav.org/basics/requirements#apache-requirements) ou [IIS](https://learn.getgrav.org/basics/requirements#iis-requirements)

# Guide d'installation

Voici les options pour obtenir Grav:

### Téléchargement d'un package Grav

Vous pouvez télécharger un package **prêt à l'emploi** à partir de la [Page de téléchargements sur https://getgrav.org](https://getgrav.org/downloads)

### Avec Composer

Vous pouvez créer un nouveau projet avec la dernière version **stable** Grav avec la commande suivante:

```
$ composer create-project getgrav/grav ~/webroot/grav
```

### Depuis GitHub

1. Cloner le référentiel Grav à partir de [https://github.com/getgrav/grav]() dans un dossier à la racine Web de votre serveur, e.g. `~/webroot/grav`. Lancez un **terminal** ou une **console** et accédez au dossier webroot:
   ```
   $ cd ~/webroot
   $ git clone https://github.com/getgrav/grav.git
   ```

2. Installez les **plugins** et les **dépendances de thème** en utilisant [Grav CLI application](https://learn.getgrav.org/advanced/grav-cli) `bin/grav`:
   ```
   $ cd ~/webroot/grav
   $ bin/grav install
   ```

Consultez les [procédures d'installation](https://learn.getgrav.org/basics/installation) pour plus d'informations.

# Ajout de fonctionnalités

Vous pouvez télécharger des [plugins](https://getgrav.org/downloads/plugins) ou des [themes](https://getgrav.org/downloads/themes) manuellement à partir de l'onglet approprié depuis la [Page de téléchargements sur https://getgrav.org](https://getgrav.org/downloads), mais la solution préférée est d'utiliser le [Grav Package Manager](https://learn.getgrav.org/advanced/grav-gpm) ou `GPM`:

```
$ bin/gpm index
```

Cela affichera tous les plugins disponibles et vous pourrez ensuite en installer un ou plusieurs avec:

```
$ bin/gpm install <plugin/theme>
```

# Mise à jour

Pour mettre à jour Grav, vous devez utiliser le [Grav Package Manager](https://learn.getgrav.org/advanced/grav-gpm) ou `GPM`:

```
$ bin/gpm selfupgrade
```

Pour mettre à jour les plugins et les thèmes:

```
$ bin/gpm update
```


# Contribution
Nous apprécions toute contribution à Grav, qu'elle soit liée à des bugs, à la grammaire, ou simplement à une suggestion ou une amélioration! Veuillez consulter le [Guide de contribution](CONTRIBUTING.md) for more guidance on this topic.

## Securité
Si vous découvrez un éventuel problème de sécurité lié à Grav ou à l'un de ses plugins, veuillez envoyer un e-mail à l'équipe principale à contact@getgrav.org et nous y remédierons dès que possible.

# Pour Commencer

* [Qu'est-ce que Grav?](https://learn.getgrav.org/basics/what-is-grav)
* [Installer](https://learn.getgrav.org/basics/installation) Grav en quelques secondes
* Comprendre la [Configuration](https://learn.getgrav.org/basics/grav-configuration)
* Jetez un œil à nos [Skeletons](https://getgrav.org/downloads/skeletons) gratuits disponibles
* Si vous avez des questions, accédez à notre [Serveur Discord](https://chat.getgrav.org)!
* Have fun!

# Explorer Davantage

* Jetez un œil à notre [Tutoriel de base](https://learn.getgrav.org/basics/basic-tutorial)
* Plongez dans plus [avancé](https://learn.getgrav.org/advanced) functions
* En savoir plus sur [Grav CLI](https://learn.getgrav.org/cli-console/grav-cli)
* Consultez des exemples dans le [Grav Cookbook](https://learn.getgrav.org/cookbook)
* Et pleins d'[Outils Grav Géniaux](https://github.com/getgrav/awesome-grav)

# Soutiens
Soutenez Grav avec un don mensuel pour nous aider à poursuivre le développement. [[Devenez contributeur](https://opencollective.com/grav#backer)]

<img src="https://opencollective.com/grav/tiers/backers.svg?avatarHeight=36&width=600" />

# Sponsors
Devenez sponsor et obtenez votre logo sur notre README sur Github avec un lien vers votre site. [[Devenez sponsor](https://opencollective.com/grav#sponsor)]

<img src="https://opencollective.com/grav/tiers/sponsors.svg?avatarHeight=36&width=600" />

# License

Voir la [LICENSE](LICENSE.txt)


[gitflow-model]: http://nvie.com/posts/a-successful-git-branching-model/
[gitflow-extensions]: https://github.com/nvie/gitflow

# Running Tests

Installez tout d'abord les dépendances de développement en exécutant `composer update` depuis la racine de votre projet Grav.
Ensuite, `composer test` exécutera les tests unitaires, qui devraient toujours être exécutés avec succès sur n'importe quel site.
Les utilisateurs Windows doivent utiliser la commande `composer test-windows`.
Vous pouvez également exécuter un seul fichier de test unitaire, e.g. `composer test tests/unit/Grav/Common/AssetsTest.php`
