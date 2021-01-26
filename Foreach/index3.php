<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach($videotheque as $infos){
    $acteurs = implode("<br>", $infos['acteurs']);

    echo "<br><br>Nom du film: " . $infos["nom"] . "<br>
    La date de sortie: " . $infos['date'] . "<br>
    Le réalisateur est: " . $infos['realisateur'] . "<br>
    Les acteurs sont: <br>" . $acteurs;
}

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '<br><br>13.Mes films : <br>';
//ajoutez votre code ici

$videotheque[] = [
    'nom' => 'Demolition Man', 
    'date' => '1993', 
    'realisateur' => 'Marco Brambilla',
    'acteurs' => [
        'Sylvester Stallone',
        'Wesley Snipes',
        'Benjamin Bratt',
        'Sandra Bullock'
    ]
];

$videotheque[] = [
    'nom' => 'Fast and Furious', 
    'date' => '2001', 
    'realisateur' => 'Vin Diesel',
    'acteurs' => [
        "Vin Diesel", 
        "Justin Lin", 
        "Philip Atwell", 
        "F. Gary Gray", 
        "John Singleton", 
        "David Leitch", 
        "James Wan", 
        "Rob Cohen"
    ]
];

$videotheque[] = [
    'nom' => 'Chappie', 
    'date' => '2015', 
    'realisateur' => 'Neill Blomkamp',
    'acteurs' => [
        "Hugh Jackman",
        "Dev Patel",
        "Yolandi Visser",
        "Sharlto Copley"
    ]
];
foreach($videotheque as $infos){
    $acteurs = implode("<br>", $infos['acteurs']);

    echo "<br><br>Nom du film: " . $infos["nom"] . "<br>
    La date de sortie: " . $infos['date'] . "<br>
    Le réalisateur est: " . $infos['realisateur'] . "<br>
    Les acteurs sont: <br>" . $acteurs;
}