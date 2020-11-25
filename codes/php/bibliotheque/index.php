<?php


    /* 
     * AVEC UN TABLEAU DE TABLEAUX
     */

    $books = array(
        'js' => array(
            'title' => 'Javascript for the web Developers',
            'author' => 'Javascript for the web Developers',
            'pages' => 230,
            'tags' => array(
                'mustread', 
                'js'
            ),
            'lu' => true
        ),
        'css' => array(
            'title' => 'Eloquent Javascript',
            'author' => 'Marijn Haverbeke',
            'pages' => 970,
            'tags' => array(
                'mustread', 
                'js'
            ),
            'lu' => false
        ),
        'php' => array(
            'title' => 'The Pragmatic Programmer',
            'author' => 'David Thomas',
            'pages' => 230,
            'tags' => array(
                'mustread', 
                'DesignPattern'
            ),
            'lu' => true
        ),
        'central_park' => array(
            'title' => 'central park',
            'author' => 'guillaume musso',
            'pages' => 441,
            'editor' => 'pocket',
            'tags' => array(
                'coding', 'guideline', 'must read'),
            'lu' => false

        ),
    );

    function display_infos($id, $values) { ?>
        <div class="book_item">
            <p>#1</p>
            <h2><?php echo $values['title']; ?>, <?php  echo $values['author']; ?> </h2>
            <p>Wrox, <?php echo $values['pages']; ?>p.</p>
            <p>
                
                <?php foreach ($values['tags'] as $tag) { ?>
                    <span>#<?php echo $tag; ?></span>
                <?php } ?>  
            </p>
            <p>
                <?php if($values['lu']) : ?>
                    Lu ! 
                <?php else : ?>
                    Pas encore lu...
                <?php endif; ?>
            </p>
        </div>
    <?php }

?>


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
            <p>Faire une recherhce</p>
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
                foreach ($books as $id => $values) {
                    display_infos( $id, $values );
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