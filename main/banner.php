<section id="banner" class="row no-gap">
    <div class="col-md-6 no-gap">
       
            <header>
                <h1>Govt Polytechnic College, Kishtwar</h1>
                <p>Your Gateway to Quality Technical Education</p>
            </header>
            <p>At Govt Polytechnic Kishtwar, we are committed to providing a world-class education in various technical disciplines. 
                Our aim is to equip students with the skills and knowledge required for a bright future. 
                Join us to explore endless opportunities and grow in a dynamic environment.</p>
            <ul class="actions">
                <li><a href="#aboutUs" class="btn btn-primary btn-lg">Learn More</a></li>
            </ul>
        
    </div>

    <div class="col-md-6 no-gap">
        <div id="carouselExampleIndicators" class="carousel slide image-slider" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Sample PHP array of image paths
                $images = [
                    './images/gpKishtwar_01.jpg',
                    './images/gpKishtwar_02.jpg',
                    './images/gpKishtwar_03.jpg',
                    './images/gpKishtwar_04.jpg',
                    './images/gpKishtwar_05.jpg',
                    './images/gpKishtwar_06.jpg',
                ];

                $isActive = true; // To set the first slide as active
                foreach ($images as $image) {
                    echo '<div class="carousel-item' . ($isActive ? ' active' : '') . '">
                            <img src="' . $image . '" class="d-block w-100" alt="Govt Polytechnic Kishtwar" />
                          </div>';
                    $isActive = false; // Set to false after the first iteration
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>