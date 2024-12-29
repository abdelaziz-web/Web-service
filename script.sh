#!/bin/bash

# Créer le README.md
echo "# Web-service" >> README.md
echo "Fichier README.md créé avec succès"

# Initialiser le dépôt Git
git init
echo "Dépôt Git initialisé"

# Ajouter README.md
git add .
echo "README.md ajouté au staging"

# Premier commit
git commit -m "first commit"
echo "Premier commit effectué"

# Renommer la branche en main
git branch -M main
echo "Branche renommée en 'main'"

# Ajouter le remote
git remote add origin https://github.com/abdelaziz-web/Web-service.git
echo "Remote origin ajouté"

# Push vers GitHub
git push -u origin main
echo "Push effectué vers GitHub"

echo "Initialisation du projet terminée avec succès!"
