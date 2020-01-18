# Groupe de besse_j

insertion (insertion_sort) 
    Le tri par insertion consiste à insérer successivement chacun des éléments d'un tableau en le comparant aux éléments déjà triés qui le précèdent et en le plaçant dans l’emplacement libéré après avoir décalé vers la droite tous les éléments plus grands qui le précédent. 
    
    complexité
        best case : O(n)    else case : O(n²)

    
selection (selection_sort)
    Le tri par sélection consiste à parcourir tous les éléments non triés d'un tableau afin de trouver le plus petit élément puis à le placer par permutation à la suite des éléments déjà triés. Puis on recommence avec les élements non triés.

    complexité
        all cases : O(n²)

bulle (bubble_sort)
    Le tri à bulles consiste à comparer deux à deux les éléments consécutifs d'un tableau et à effectuer une permutation si le premier est plus grand que le second. On recommence le tri jusqu'à ce qu'il n'y est plus de permutation.

    complexité 
        best case : O(n)    else case : O(n²)

shell (shell_sort)
    Le tri de Shell est une variante optimisée du tri par insertion. Le tri par insertion provoque le décalage d’un élément de tous les éléments plus grands que celui à insérer. Dans le tri de Shell on effectue un tri par insertion à la différence que les éléments ne sont pas décalés d'un élément à la fois mais de plusieurs éléments dont la différence d'index est appelé "gap". À chaque étape le tri est dégrossi puis le "gap" est réduit. Chacune de ces réduction provoque un affinage du tri.
    Lorsque le "gap" atteint une valeur de 1 cela revient à effectuer un tri par insertion. Cependant le tri par insertion est ici appliqué à un tableau possédant déjà un certain ordre (cet ordre est provoqué par les étapes de préparation c'est à dire quand le "gap" est supérieur à 1).

    complexité 
        best case : O(n)    else case : O(n²)
    
fusion (merge_sort)
    Le tri fusion consiste dans une première étape à diviser un tableau en deux sous-tableaux égaux (à un élément près si le tableau est impair) puis à recommencer de manière récursive sur les sous-tableaux jusqu’à n’avoir plus qu’un élément par sous-tableau. 

   Dans une seconde étape, on fusionne deux à deux les sous-tableaux dans un nouveau tableau en ordonnant par ordre croissant les éléments puis en réitérant ce procédé jusqu'à obtenir un nouveau tableau trié de la même taille que l'originale.

    complexité
        all cases : O(n log(n))

rapide (quick_sort)
    Le tri rapide consiste à dans un premier temps, choisir arbitrairement un élément pivot que l'on nomme "p". Dans un deuxième temps on enlève "p" de la liste puis on segmente le tableau en deux sous-tableaux. L'un contenant les éléments strictement plus petits que "p", l'autre les éléments restants supérieurs ou égaux à "p". Dans un troisième temps on recommence récursivement avec les tableaux situés à droite et à gauche du pivot. Les tableaux finaux sont combinés pour obtenir un tableau trié.

    complexité
        best / average cases : O(n log(n))    else cases : O(n²)
    
peigne (comb_sort) 
    Le tri à peigne est une variante optimisée du tri à bulle. Le tri à peigne ne compare pas initialement des éléments adjacents mais commence par comparer des éléments plus lointains puis raccourci l'intervalle entre les éléments comparés pour finir par un tri à bulle classique. 

    complexité
        best case : O(n)    average case : O(n log(n))    else case : O(n²) 
    
Les tris par insertion, selection, ou encore à bulle seront à privilégier pour les tableaux de petites tailles du fait qu'ils ont une complexité en average case de O(n²) qui augmente très vite. Dans le cas où les données sont facilement déplaçables on aura tendance à utiliser le tri par insertion. Le tri par selection quand à lui minimise le nombre de déplacements par élément. Le tri de Shell est rarement employé tout seul, il est appliqué en premier afin d'organiser le tableau puis est exécuté un tri plus efficace sur les séries déjà ordonnées par exemple : le tri à bulle, le tri par insertion ou le tri à peigne. En moyenne le tri shell possède lui aussi une complexité de type quadratique O(n²).

Pour les tableaux de grandes tailles sera préconisé l'usage du tri fusion, rapide ou à peigne. La complexité de ces trois modes de tri est de type linéarthmique O(n log(n)) en average case. Elle augmente moins vite que la complexité quadratique. Le tri fusion partitionne, de manière équilibrée à chaque étape, les données à trier. Le tri rapide déplace plus rapidement les données vers leur position finale.
Le tri à peigne est un cas particulier car une optimisation du tri à bulle le rend compétitif en vitesse avec le tri rapide, fusion ou shell. Il permet cela car il élimine le problème que cause la présence de valeurs élevées en début de tri que rencontre le tri à bulle. 

Toutefois, pour conclure, pour une évaluation comparative plus fine des différents types de tri, il faudrait en complément analyser d’autres paramètres tels que les ressources mobilisées en mémoire.
