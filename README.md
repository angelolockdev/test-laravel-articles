
# API de Gestion d'Articles

Ce projet est une simple API RESTful construite avec Laravel 10 pour gérer une collection d'articles. Il fournit des endpoints pour les opérations CRUD (Create, Read, Update, Delete).

## Prérequis

-   PHP >= 8.1
    
-   Composer
    
-   Une base de données (MySQL, PostgreSQL, etc.)
    
-   Extensions PHP requises : `fileinfo`, `curl`, `dom`, `mbstring`, `openssl`.
    

## Installation

1.  **Cloner le projet / Décompresser l'archive**
    
2.  **Naviguer dans le dossier du projet :**
    
    ```
    cd projet_laravel_articles
    
    ```
    
3.  **Installer les dépendances PHP :**
    
    ```
    composer install
    
    ```
    
4.  **Configurer l'environnement :** Copiez le fichier d'exemple `.env.example` en `.env` et mettez à jour les informations de connexion à la base de données (`DB_*`).
    
    ```
    cp .env.example .env
    
    ```
    
5.  **Générer la clé d'application :**
    
    ```
    php artisan key:generate
    
    ```
    
6.  **Exécuter les migrations de la base de données :** Cela créera la table `articles`.
    
    ```
    php artisan migrate
    
    ```
    
7.  **(Optionnel) Remplir la base de données avec des données de test :** Pour tester facilement l'API, vous pouvez utiliser le seeder fourni.
    
    ```
    php artisan db:seed --class=ArticleSeeder
    
    ```
    
8.  **Lancer le serveur de développement :**
    
    ```
    php artisan serve
    
    ```
    
    L'API sera accessible à l'adresse `http://127.0.0.1:8000`.
    

## Documentation de l'API

### Endpoints

**GET**

`/api/articles`

Liste tous les articles (paginé)

N/A

`200 OK` avec les données paginées

**POST**

`/api/articles`

Crée un nouvel article

JSON avec `titre`, `slug`, `contenu`, `auteur`

`201 Created` avec l'article créé

**GET**

`/api/articles/{id}`

Affiche un article spécifique

N/A

`200 OK` avec l'article demandé

**PUT/PATCH**

`/api/articles/{id}`

Met à jour un article spécifique

JSON avec les champs à mettre à jour

`200 OK` avec l'article mis à jour

**DELETE**

`/api/articles/{id}`

Supprime un article spécifique

N/A

`204 No Content`

### Exemple d'utilisation avec cURL

**1. Créer un nouvel article :**

```
curl -X POST http://127.0.0.1:8000/api/articles \
-H "Content-Type: application/json" \
-H "Accept: application/json" \
-d '{
    "titre": "Mon Premier Article API",
    "slug": "mon-premier-article-api",
    "contenu": "Ceci est le contenu de mon article créé via l'API.",
    "auteur": "John Doe",
    "date_publication": "2025-06-07 18:00:00"
}'

```

**2. Lister tous les articles :**

```
curl -X GET http://127.0.0.1:8000/api/articles \
-H "Accept: application/json"

```