# Freefly

Pour mettre à jour le dossier, il faut :

	- Que le site fonctionne (aucune erreur)
	- Console : php app/console cache:clear
				php app/console assets:install
				git status
				git add -A
				git commit -m "Modif Frank	"
				git push


Pour récupérer les fichiers : 
	- Console : git pull

/!\ Si le site ne fonctionne pas, supprimer le dossier dev qui se trouve dans "app/cache"


Commande utile :

	- php app/console cache:clear
	- php app/console asset:install web : intègre les images dans le dossier web
	- php app/console generate:bundle : créer un bundle
	- php app/console generate:doctrine:entity : créer une entitée
	- php app/console generate:doctrine:crud : créer un crud entité
	- php app/console doctrine:schema:update --force : créer les tables des entités
