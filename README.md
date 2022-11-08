# CSS3

Ce site a été développé d’abord en mobile (mobile first), qui a les mêmes propriétés CSS que le format tablette puis avec @media screen and (min-width: 1024px)  là où j’ai développé le CSS pour les format pc afin qu’il puisse s’adapté à toutes les écrans.
Sur ce site, la partie footer a été géré avec le CSS de boostrap que je détaillerai après.

Header: sur le header, j’ai utilisé Display block pour centrer l’image et la barre de recherche en format mobile et tablette.
En format pc, Display : flex puis justufy-content : espace-beetween pour séparer l’image et la barre de recherche qui se positionne chacun sur un côté avec un espace au milieu.

La barre de recherche et le bouton sont géré avec un display : flex pour les mettre sur la même ligne et un flex: 1 pour le champs de texte input pour qu’il prenne toute la largeur de son élément parent.  

La barre de navigation a des propriété comme list-style: none qui enlève les listes à puce et text-decoration: none qui  supprime le surlignement des liens. 
En format pc, j’ai utilisé un display flex suivi d’un justify-content : space-around qui place les liens sur toute la ligne en les espaçant avec un width : 100% sur les « li » pour supprimer les marges entres les spaces-around.
 Un border-bottom: solid 4px rgb(3, 101, 158); qui met un border-solid en bas des « li » avec une couleur bleu.
La couleur est gérée par le bacground avec une valeur de linear-gardient pour le mettre sous forme de dégradé.
Les sous-menu:  sont gére avec un diplay :none pour cacher les « li » et une position : relative. Et les afficher avec display : block une fois qu’on survole les « li » (li : hover) avec une position : absolute.


Le tableau de bord, les astuces et les actualité ont des propriétés en commun comme border-color ; le bacground ; le border-top-left-radius et border-top-lright-radius qui permettent uniquement de mettre les border-radius en haut à gauche et à droite. 
Leur titre aussi ont des mêmes propriétés de color, de text-align (pour centrer les titres), de font-size.
Leur « li » ont un list-style: none qui supprime les liste à puce.
Et leurs « a » avec un text-decoration : none pour supprime le surlignement.
Les titre du tableau de bord et des astuces ont le même bacground-color: rgb(3, 101, 158) => bleu foncé; tandis que celui des actualités est en brown (rouge-brun) ainsi que ses span ;



En format pc, la section principale est géré par un display : grid ; grid-template-columns: repeat(3, 1fr); gap: 1rem; qui segmentent la section en colonne de 3 avec un gap (espace entre les colonnes de 1rem). Et la section main (tableau de bord) occupe avec un grid-column: 1/3 ; le section aside (astuces et actualité) qui occupent eux un grid-column: 3/3, la dernière colonne.



footer: a été géré par boostrap.
La classe « class="bg-blue text-center text-lg-start »  met un background color blue, centre le text au milieu de leur colonnes. 
Row permet de mettre les éléments du footer sur une ligne et qui utilise un display flex pour les aligner sur cette ligne.
Sur les formats mobiles, le footer est composé que d’une colonne qui prend toute la largeur. Sur les tablettes, il prend 2 colonnes et 4 colonnes sur les formats pc. Cela est géré par la classe « col-lg-1 col-md-6 mb-4 mb-md-0 ». Ce qui rend le footer responsive.

