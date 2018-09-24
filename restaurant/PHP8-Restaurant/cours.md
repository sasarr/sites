Le restaurant utilise un microkernel qui reprend les fonctions basiques d'un framework comme Synfony.
Vocabulaire utile :
    - index.php => root 
    - route => index.php/route

Création de pages :
    - Les pages sont atteintes via une "route" ( index.php/nomdelapage ). On reste dans l'index tout le temps.
    - Création d'un controller tel que : 
        ./application/controllers/nomdelapage/NomdelapageController.class.php
    - Une classe NomdelapageController() doit être créée en reprennant la structure de la classe de la home. 
    - Dans les deux methode présente, on passe dans une ou l'autre selon si on est en get ou post. Il faudra utiliser celle appropriée.
    - Création d'une vue tel que : 
        ./application/www/nomdelapage/NomdelapageView.phtml

Préparation des variables :
    - Dans la méthode get ou post appropriée, il faut retourner les variables qu'on veut utiliser dans le phtml sous forme d'un tableau associatif tel que : 
        return ["var1name" => "var1value", "var2name" => "var2value"]
    - Dans le phtml associé on aura accès aux variables tel que :
        $var1name; // "var1value"
        $var2name; // "var2value"

Changer de page :
    - Toujours dans la methode appropriée <! Pas de header("Location"); >: 
        $http->redirectTo("/route/souspage");

Misc : 
    - La seule doc disponible est le code. 
    - Les méthodes disponibles sont dans le dossier "library"
    - Dans la base de donnée, dans la table order, il faut modifier la valeur par default de CreationTimestamp et CompleteTimestamp en CurrentTimestamp.
