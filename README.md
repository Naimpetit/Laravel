# Laravel – Travaux pratiques

Ce dépôt rassemble les travaux pratiques réalisés avec **PHP et Laravel** dans le cadre de mon apprentissage du développement web.

Chaque dossier contient une application indépendante permettant de pratiquer les routes, les contrôleurs, les vues Blade, les formulaires et les opérations avec une base de données.

## Organisation

- `ds1` – Fournisseurs
- `ds2` – Contrats
- `tp1` – Produits
- `tp1bis` – Magasins
- `tp1ter` – Véhicules
- `tp2` – Produits
- `tp2bis` – Aliments
- `tp2ter` – Joueurs
- `tp3` – Commandes
- `tp3bis` – Saisons
- `tp3ter` – Locations

## Technologies

- PHP 8.2
- Laravel 12
- Blade
- MySQL / MariaDB
- Composer
- Node.js / npm

## Utilisation

Dans un dossier de projet :

```powershell
composer install
npm install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Configurer ensuite la base de données dans le fichier `.env`.

---

*Archive personnelle – Travaux pratiques Laravel*
