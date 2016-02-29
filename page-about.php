<?php
/* Template Name: About us */

/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

/*
|----------------------------------------------------------------
|   Get the Header.
|----------------------------------------------------------------
*/
get_template_part('header');
?>

<div id="slider" class="container-fluid no-padding">

    <div class="slide-overlay container-capped">

        <div class="middle-wrap">
            <h1>A <span style="color: #f6a500;">RELIABLE</span> TEAM</h1>
            <h4>
                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br/>
                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            </h4>
            <small>- Robert Johnson</small>
        </div>

    </div>

    <div class="image-darken"></div>
    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/sliderimage.png'; ?>" width="100%"/>
</div>

<div id="about-us" class="container-fluid container-capped">

    <div class="row row-about">

        <div class="col-md-12">
            <div class="title">
                <h1>Over Ons</h1>
                <div class="divider"><hr/></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="thumb"><img src="http://timvanderslik.nl/development/kas_bouw/wp-content/uploads/2016/02/nieuwbouw-thumb.jpg"></div>
            <div class="content">
                <h4>Wie wij zijn</h4>
                <div class="divider"><hr/></div>
                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut. Aenean massa. penatibus et magnis dis parturient montes, nasceturridiculus mus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu In enim justo, rhoncus ut.Aenean massa. penatibus et magnis dis parturient.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="thumb"><img src="http://timvanderslik.nl/development/kas_bouw/wp-content/uploads/2016/02/nieuwbouw-thumb.jpg"></div>
            <div class="content">
                <h4>Wat wij doen</h4>
                <div class="divider"><hr/></div>
                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut. Aenean massa. penatibus et magnis dis parturient montes, nasceturridiculus mus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu In enim justo, rhoncus ut.Aenean massa. penatibus et magnis dis parturient.</p>
            </div>
        </div>

    </div>

    <div class="row row-services">

        <div class="col-md-12">
            <div class="title">
                <h1>Onze diensten</h1>
                <div class="divider"><hr/></div>
            </div>
        </div>

        <div class="col-md-12 services">
            <div class="services-inner">

                <div class="col-md-4 services-nav">
                    <ul>
                        <li><a class="active" href="#">Nieuwbouw & verbouw</a></li>
                        <li><a href="#">Onderhoud</a></li>
                        <li><a href="#">Veranda's & luxe bijgebouwen</a></li>
                        <li><a href="#">Dakkapellen</a></li>
                    </ul>
                </div>

                <div class="col-md-8 services-text">
                    <p>
                        Als u met plannen voor nieuwbouw of verbouw zit, kan een oriënterend gesprek vaak perspectievenen
                        handige tips opleveren. U kunt met ons bespreken wat uw eisen of mogelijkheden van een eventuele
                        verbouwing zijn.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<?php
/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');