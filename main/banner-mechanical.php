<section id="banner" class="row no-gap">
    <div class="col-md-6 no-gap">
        <header>
            <h1>Mechanical Engineering</h1>
            <p>Innovating Machinery for Tomorrow</p>
        </header>
        <p>The Mechanical Engineering Department at Govt Polytechnic College, Kishtwar, provides comprehensive programs that focus on the principles of mechanics, thermodynamics, and materials science. Our students are equipped with hands-on experience and technical knowledge required for careers in industries like automotive, manufacturing, and energy.</p>
        <p>Our facilities include modern labs, project areas, and tools to support research and development in mechanical systems and processes.</p>
    </div>
    <div class="col-md-6 no-gap">
        <div id="carouselMechanicalEngineering" class="carousel slide image-slider" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $images = [
                    './images/mechanical_01.jpg',
                    './images/mechanical_02.jpg',
                    './images/mechanical_03.jpg'
                ];
                $isActive = true;
                foreach ($images as $image) {
                    echo '<div class="carousel-item' . ($isActive ? ' active' : '') . '">
                            <img src="' . $image . '" class="d-block w-100" alt="Mechanical Engineering Department" />
                          </div>';
                    $isActive = false;
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselMechanicalEngineering" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselMechanicalEngineering" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
