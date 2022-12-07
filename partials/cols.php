<?php 
foreach($movies as $movie){ 
    $movie->setImgPath();
    ?>
    <div class="col">
        <div class="ms_card h-100">
            <div class="ms_card-img">
                <img src="<?php echo $movie->getImgPath(); ?>" alt="<?php echo "Copertina di $movie->title" ?>">
            </div>

            <div class="ms_card-description">
                <ul>
                    <li class="mb-2">
                        <h4>Titolo: <strong class="red"> <?php echo $movie->title; ?> </strong></h4>
                    </li>

                    <li class="mb-2">
                        Anno di uscita: <strong class="red"> <?php echo $movie->year ?> </strong>
                    </li>

                    <li class="mb-2">
                        Lingua originale: <strong class="red"><?php echo $movie->original_lang ?></strong> 
                    </li>

                    <li class="mb-2">
                        Generi:
                        <ul>
                            <?php foreach($movie->genres as $genre){?>
                                <li><strong class="red"><?php echo $genre; ?></strong></li>    
                            <?php } ?>
                        </ul>
                    </li>

                    <li class="mb-2">
                        Regia:
                        <ul>
                            <?php if(is_array($movie->director)){
                                    foreach($movie->director as $director){?>
                                        <li><strong class="red"><?php echo $director; ?></strong> </li>    
                                    <?php }
                                } else { ?>
                                    <li><strong class="red"><?php echo $movie->director ?></strong></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <li class="mb-2">
                        Attori:
                        <ul>
                            <?php foreach($movie->actors as $actor){?>
                                    <li><strong class="red"><?php echo $actor->name; ?></strong></li>    
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>
    