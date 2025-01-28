# Projet Laravel

Ce projet Laravel utilise un fichier `.gitignore` bien configuré pour exclure les fichiers sensibles ou spécifiques à l'environnement local. Ce document fournit toutes les informations nécessaires pour configurer et collaborer sur ce projet.

## 📋 Contenu du `.gitignore`
Le fichier `.gitignore` est configuré pour ignorer les éléments suivants :  

### **Dossiers générés automatiquement** :
- `/node_modules` : Contient les dépendances Node.js installées avec `npm` ou `yarn`.
- `/vendor` : Contient les dépendances PHP installées avec `composer`.
- `/public/build` et `/public/hot` : Fichiers générés par Laravel Mix.
- `/public/storage` : Lien symbolique vers le dossier `storage`.

### **Fichiers sensibles ou spécifiques** :
- `.env`, `.env.backup`, `.env.production` : Fichiers contenant les configurations de l'application.
- `/storage/*.key` : Clés sensibles utilisées par Laravel.
- `Homestead.json` et `Homestead.yaml` : Fichiers de configuration pour Homestead.
- `auth.json` : Contient les informations d'authentification pour Composer.

### **Caches et logs temporaires** :
- `.phpunit.cache` et `.phpunit.result.cache` : Fichiers de cache pour les tests PHPUnit.
- `npm-debug.log` et `yarn-error.log` : Logs d'erreur de gestionnaires de dépendances.

### **Configurations IDE** :
- `/.fleet`, `/.idea`, `/.vscode` : Configurations spécifiques aux environnements de développement (IntelliJ IDEA, Fleet, VS Code).


##  Configuration du projet

### **1. Cloner le dépôt :**
```bash
git clone <URL_DU_DEPOT>
cd <nom_du_projet>

### **2. Installer les dépendances PHP :**
composer install

### **3. Installer les dépendances JavaScript : **
npm install

### **4. Configurer l'environnement : **
cp .env.example .env

### **5. Générer la clé d'application : **
php artisan key:generate

### **6. Lier le stockage public : **
php artisan storage:link

### **7. Migrer la base de données : **
php artisan migrate
