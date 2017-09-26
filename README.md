# symfonyCamp : Aide mémoire

## installation symfony

1. php bin/console server:run
2. php bin/console generate:bundle
3. **sudo composer dump-autoload**

## création de page

1. routing.yml dans Resources/config

## DB
1. définir paramètres BD dans "parameters.yml"
2. création DB à partir de la console : **php bin/console doctrine:database:create**
3. dossier 'Entity' créé
4. info sur le mapping: **php bin/console doctrine:mapping:info**
5. validation BD et symfony: **php app/console doctrine:schema:validate**
6. concordance classe et table: **php app/console doctrine:schema:update**
7. vérification préalable: **php app/console doctrine:schema:update –dump-sql**
8. si ok: **php app/console doctrine:schema:update –force**
9. 

## CRUD
1. voir tuto Emily
2. **php bin/console doctrine:generate:crud**
3. **php bin/console doctrine:schema:validate**
4. 
