<?php

//EASY WAY
// $film_data = $film->getAllData();
// $movie_data = $movie->getAllData();
   
?>
    <main>
        <!-- PERFORMANCE CODE -->
        <?php foreach($films as $film): 
            $film_data = $film->getAllData();
        ?>
        <div class="movie">
            <h2><?php echo $film->getTitle()?></h2>
            <ul>
            <li>Genere: 
                <?php foreach($film_data['genre'] as $genre){echo $genre.', ';} ?>
            </li>
            <li>Data: <?php echo $film_data['release_date']?></li>

            <?php if($film_data['actors']):?>
                <li>Attori: <?php foreach($film_data['actors'] as $actor){echo $actor;} ?></li>
            <?php endif; ?>

            <li>Studio: <?php echo $film_data['studio']?></li>
            <li>Like: <?php echo $film_data['likes']?></li>
            </ul>
        </div>
        <?php endforeach;?>

        

         <!-- EASY WAY -->
        <!-- <div class="movie">
            <h2><?php echo $film->getTitle()?></h2>
            <ul>
            <li>Genere: 
            <?php foreach($film_data['genre'] as $genre){echo $genre;} ?>
            </li>
            <li>Data: <?php echo $film_data['release_date']?></li>

            <?php if($film_data['actors']):?>
                <li>Attori: <?php foreach($film_data['actors'] as $actor){echo $actor;} ?></li>
            <?php endif; ?>

            <li>Studio: <?php echo $film_data['studio']?></li>
            <li>Like: <?php echo $film_data['likes']?></li>
            </ul>
        </div>

        <div class="movie">
            <h2><?php echo $movie->getTitle()?></h2>
            <ul>
            <li>Genere: 
                <?php foreach($movie_data['genre'] as $genre){echo $genre.', ';} ?>
            </li>
            <li>Data: <?php echo $movie_data['release_date']?></li>

            <?php if($movie_data['actors']):?>
                <li>Attori: <?php foreach($movie_data['actors'] as $actor){echo $actor;} ?></li>
            <?php endif; ?>

            <li>Studio: <?php echo $movie_data['studio']?></li>
            <li>Like: <?php echo $movie_data['likes']?></li>
            </ul>
        </div> -->
        
        
    </main>