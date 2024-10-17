<section id="banner" class="row no-gap">
    <div class="col-md-6 no-gap">
        <header>
            <h1>Civil Engineering</h1>
            <p>Building the Future with Innovation and Expertise</p>
        </header>
        <p>The Civil Engineering Department at Government Polytechnic College, Kishtwar, is dedicated to shaping the next generation of civil engineers. Our comprehensive programs offer hands-on experience in structural engineering, geotechnical engineering, and transportation engineering, equipping students with practical skills and technical knowledge essential for a successful career in this dynamic field.</p>
        <p>Our state-of-the-art facilities include well-equipped laboratories, dedicated project workspaces, and access to the latest industry-standard tools and software. Students engage in innovative projects, participate in workshops, and benefit from expert lectures, all within a vibrant learning environment that fosters creativity and collaboration.</p>
        <p>Join us to explore the exciting opportunities in civil engineering and become part of a community that is passionate about building the future through innovation.</p>
    </div>
    <div class="col-md-6 no-gap">
        <div id="carouselCivilEngineering" class="carousel slide image-slider" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $images = [
                    './images/civil_01.jpg',
                    './images/civil_02.jpg',
                    './images/civil_03.jpg'
                ];
                $isActive = true;
                foreach ($images as $image) {
                    echo '<div class="carousel-item' . ($isActive ? ' active' : '') . '">
                            <img src="' . $image . '" class="d-block w-100" alt="Civil Engineering Department" />
                          </div>';
                    $isActive = false;
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselCivilEngineering" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCivilEngineering" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
