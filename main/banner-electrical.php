<section id="banner" class="row no-gap">
    <div class="col-md-6 no-gap">
        <header>
            <h1>Electrical Engineering</h1>
            <p>Powering the Future with Innovation and Expertise</p>
        </header>
        <p>The Electrical Engineering Department at Govt Polytechnic College, Kishtwar, is dedicated to shaping the next generation of electrical engineers. Our comprehensive programs offer hands-on experience in power systems, renewable energy, and electronics, preparing students for a successful career in this ever-evolving field.</p>
        <p>Join us to gain practical skills and technical knowledge in a vibrant learning environment.</p>
    </div>
    <div class="col-md-6 no-gap">
        <div id="carouselElectricalEngineering" class="carousel slide image-slider" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $images = [
                    './images/electrical_01.jpg',
                    './images/electrical_02.jpg',
                    './images/electrical_03.jpg'
                ];
                $isActive = true;
                foreach ($images as $image) {
                    echo '<div class="carousel-item' . ($isActive ? ' active' : '') . '">
                            <img src="' . $image . '" class="d-block w-100" alt="Electrical Engineering Department" />
                          </div>';
                    $isActive = false;
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselElectricalEngineering" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselElectricalEngineering" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
