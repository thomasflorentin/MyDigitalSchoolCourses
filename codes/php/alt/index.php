<?php 

    $pragmatic_programmer = array(
        'title'                 => 'The Pragmatic Programmer',
        'author'                => 'David Thomas',
        'pages'                 => 320,
        'tags'                  => array(
                                    'mustread',
                                    'DesignPattern'
        ),
        'lu'                    => true
    );

    $js = array(
        'title'                 => 'Javascript for the web Developers',
        'author'                => 'Nickolas Kalas',
        'pages'                 => 980,
        'tags'                  => array(
                                    'mustread',
                                    'js'
        ),
        'lu'                    => false
    );

    $eloquent = array(
        'title'                 => 'Eloquent Javascript',
        'author'                => 'Marijn Haverbeke',
        'pages'                 => 230,
        'tags'                  => array(
                                    'mustread',
                                    'js'
        ),
        'lu'                    => true
    );

    $livres = array($pragmatic_programmer, $js, $eloquent);

    
    function display_infos( $id, $livre ) { ?>

            <div class="book_item">
                <p>#<?php echo $id; ?></p>
                <h2><?php echo $livre['title']; ?></h2>
                <p><?php echo $livre['author']; ?></p>
                <p><?php echo $livre['pages']; ?></p>
                <p>
                    <?php foreach ($livre['tags'] as $tag) { ?>
                        <span>#<?php echo $tag; ?></span>
                    <?php } ?>  
                </p>
                <p>
                    <?php if( $livre['lu'] ) : ?>
                        LU ! 
                    <?php else : ?>
                        Pas lu ! 
                    <?php endif; ?>
                </p>
            </div>

    <?php } ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <h1>Bibliothèque</h1>

        <form class="filtres">
            <p>Faire une recherche</p>
            <p>
                <input type="text" name="main_search">
                <input type="submit" value="rechercher">
            </p>
            <p>
                <select name="" id="">
                    <option value="default">rechercher dans le champ...</option>
                    <option value="titre">titre</option>
                    <option value="auteur">auteur</option>
                </select>
            </p>
        </form>

        <div class="books_list">

            <?php if( $_GET['main_search'] && $_GET['main_search'] != '' ) { ?>
                <strong>
                    Votre recherche : 
                    <?php echo $_GET['main_search']; ?>
                    <br><br>
                </strong>
            <?php } ?>

            <?php 
                foreach ($livres as $id => $livre ) {
                    display_infos($id, $livre);
                }
            ?>
        </div>


        <style>
            * {
                box-sizing: border-box;
            }
            html {
                min-height: 100%;
            }
            body {
                padding: 50px;
                border: 30px solid blue;
                margin: 0;
                min-height: 100%;
            }

            h2 {
                color: blue;
                margin-bottom: 0;
                margin-top: 0;
            }

            p {
                margin: 0;
            }
            .filtres {
                margin-bottom: 40px;
                border: 1px solid gray;
                padding: 10px;
            }

            .book_item {
                margin-bottom: 20px;
            }

        </style>
    </body>
</html>