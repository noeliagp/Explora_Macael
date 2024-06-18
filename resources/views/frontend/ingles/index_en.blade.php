@extends('layouts.master_en')

@section('body')
<div class="container-fluid p-0">
    <div class="index-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div>
                <h1 class="display-2">Explore Macael</h1>
                <p class="lead">Discover the Land of Marble</p>
              
            </div>
        </div>
    </div>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Tourism in Macael</h2>
                    <p class="lead">Tourism in Macael focuses on its past and present, written with mallet and chisel, linked to the famous white marble from its quarries, used since the Neolithic era, and utilized in the most important monuments that make up Spain's historical-artistic heritage, such as the Roman Theatre of Mérida, the Alhambra of Granada, the Escorial Palace, the Royal Palace of Madrid, and the Cartagena Town Hall.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <a href="/descubre_macael_en">
                            <img src="https://i.ibb.co/dgFqVXg/hornazo-1-2.jpg" class="img-fluid rounded-circle mb-3" alt="Gastronomy" style="width: 150px;">
                        </a>
                        <h4>Gastronomy</h4>
                        <p>Enjoy the authentic gastronomy of Macael, from traditional migas to unique desserts.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://i.ibb.co/Hg8DLrX/34911170116-24aa3e267a-q.jpg" class="img-fluid rounded-circle mb-3" alt="Festivals and Traditions" style="width: 150px;">
                        <h4>Festivals and Traditions</h4>
                        <p>Join the local festivities and experience Macael's vibrant culture.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://i.ibb.co/2888XgL/13983175382-e20856dac0-q.jpg" class="img-fluid rounded-circle mb-3" alt="Nature" style="width: 150px;">
                        <h4>Nature</h4>
                        <p>Explore natural landscapes and trails, perfect for outdoor adventures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h2 class="display-5">Gallery</h2>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="/descubre_macael">
                        <img src="https://i.ibb.co/0G5rsPf/fuente-leones-noche.jpg" class="img-fluid rounded" alt="Gallery 1">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="/monumento/20">
                        <img src="https://i.ibb.co/fph45BH/mortero.jpg" class="img-fluid rounded" alt="Gallery 2">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="https://i.ibb.co/68n3Pwh/foto-marmoris-macael-plazaalmeria-01.jpg" class="img-fluid rounded" alt="Galería 3" style="width: 320px" >
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
