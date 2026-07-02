# Meats

![PHP](https://img.shields.io/badge/PHP-8.3-blue)
![Laravel](https://img.shields.io/badge/Laravel-13.x-red)
![License](https://img.shields.io/badge/License-MIT-green)

Meats est une replica de steam (uniquement pour l'apprentissage)

## Devs & Contributeurs

Voyez [DEV.md](DEV.md) pour plus d'informations sur les contributeurs et comment contribuer au projet.

## 🚀 Démarrage rapide

### Prérequis

- PHP 8.3+
- Composer
- Node.js et npm

### Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

### Commandes utiles

```bash
php artisan serve
composer test
npm run build
```

## 🧱 Structure du projet

- app/ : contrôleurs, modèles et logique métier
- routes/ : définition des routes web et console
- resources/views/ : vues Blade
- database/ : migrations et seeders
- public/ : point d’entrée public du projet

## 🛠️ Développement

Le projet est basé sur Laravel et suit la structure standard du framework. Vous pouvez commencer par explorer les routes, les contrôleurs et les vues pour ajouter vos fonctionnalités.

## 📄 Licence

Ce projet est distribué sous licence MIT.
