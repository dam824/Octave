# Octave
Intégration de maquette avec différents affichages.

## Offset 1 : décalé  
![Offset 1](https://github.com/dam824/Octave/raw/main/static/images/offset-1.png)

## Offset 2 : linéaire  
![Offset 2](https://github.com/dam824/Octave/raw/main/static/images/offset-2.png)

## Display option in edit page  
![Display option](https://github.com/dam824/Octave/raw/main/static/images/edit.png)


# Compte-rendu et retour d’expérience

- Temps passé : 14h 
- Afin de gagné du temps sur le design j'ai privilégié tailwind. Quelques subtilités différent d'un css ou sass moderne
m'ont fait perdre un peu de temps. 
- 

# Question théorique : Dynamisation sous WordPress
- Étapes simples pour créer un bloc dynamique avec ACF Blocks
Documentation : [Documentation ACF ](https://www.advancedcustomfields.com/resources/blocks/).
- Créer un nouveau bloc via functions.php -> acf_register_block_type().
- Définir son template Twig (ou PHP) dans /templates/blocks/mon-bloc.twig.
- Dans le BO WP , utiliser l’interface ACF pour ajouter les champs personnalisés.
- Lier dynamiquement les champs ACF au template via {{ block.field }} avec Timber.
- Choisir dans l’éditeur Gutenberg les options (par exemple : offset "décalé" ou "linéaire").
 
# Pourquoi ACF Blocks 
- Créer rapidement des blocs personnalisés sans avoir à écrire du JavaScript React.
- Rendu dynamique. Pas de données écrites en dures dans le code
- Contrôle total du HTML/CSS.
- Utilisation du potentiel Wordpress en utilisant le BO comme un "backend"

# Alternatives à ACF
- Création d'une taxonomie custom dans functions.php qui permet de choisir le type de display (OFFSET 1 ou OFFSET 2)
- Pas de dépendance à un plugin tiers
- Evites les vulnérabilités dues aux plugins
- Utilisation natif de WP 


# JavaScript THIS
- This représente l'objet courant, ou, la classe sur lequelle le code est en train d'être executer "ça" 
Exemple:
# Objet
```
const user = {
  name: "John",
  sayHello: function () {
    console.log("Bonjour, je suis " + this.name);
  }
};

user.sayHello(); => Bonjour je suis John
```

# Classe 
```
class Personne {
    constructor(nom) {
        this.nom = nom;
    }
}

let alice = new Personne("Alice");
console.log(alice.nom); // Affiche "Alice"
```

Documentation : [This ](https://dev.to/kureru/le-mot-cle-this-en-javascript-38ji).