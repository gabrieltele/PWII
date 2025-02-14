<?php
include './Header.php';
?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10 p-3">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.pokemondb.net/artwork/avif/mareep.avif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.pokemondb.net/artwork/avif/flaaffy.avif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.pokemondb.net/artwork/avif/ampharos.avif" wi class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
</div>


<?php
include './Footer.php';
?>