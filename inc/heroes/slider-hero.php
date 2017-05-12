<?php
/**
 * Slider hero
 *
 * @package kidsworld
 * @author Allan Drake
 */

$slider_id = get_theme_mod('sweetbite_hero_slider');
if($slider_id && $slides = get_field('slides', $slider_id)) :
    $slider_div_id = uniqid();
?>

<!-- <div id="slider-hero">
    <div id="carouselExampleIndicators" class="carousel landing-page slide" data-ride="carousel">
        <ol class="carousel-indicators landing-page">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-img-overlay"></div>
            <div class="carousel-item landing-page active">
                <img class="d-block img-fluid" src="http://placehold.it/1600x600" alt="First slide">
            </div>
            <div class="carousel-item landing-page">
                <img class="d-block img-fluid" src="http://placehold.it/1600x600" alt="Second slide">
            </div>
            <div class="carousel-item landing-page">
                <img class="d-block img-fluid" src="http://placehold.it/1600x600" alt="Third slide">
            </div>
        </div>
    </div>
</div> -->
    <div id="slider-hero">
        <div id="<?php echo $slider_div_id; ?>" class="carousel landing-page slide hero-slider" data-ride="carousel">
            <ol class="carousel-indicators landing-page">
                <?php
                    for($i = 0; $i < count($slides); $i++) {
                        $class = ($i < 1) ? ' class=" active"' : '';
                        echo sprintf(
                            '<li data-target="#%1$s" data-slide-to="%2$d"%3$s></li>',
                            $slider_div_id,
                            $i,
                            $class
                        );
                    }
                ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                    for($i = 0; $i < count($slides); $i++) {
                        $class = ($i < 1) ? ' active' : '';
                        echo sprintf(
                            '<div class="carousel-item landing-page" style="background-image: url(%3$s);">',
                            $class,
                            get_theme_mod('hero_slider_height'),
                            $slides[$i]['background_image']
                        );
                        ?>
                            <div class="container">
                                <div class="row h-100 d-flex">
                                    <div class="col-md-12 text-center my-auto">
                                        <?php
                                            echo sprintf(
                                                '<p class="slide-title">%1$s</p>
                                                 <h2 class="slide-description">%2$s</h2>
                                                 <a class="slide-button" href="%3$s">%4$s</a>',
                                                $slides[$i]['title'],
                                                $slides[$i]['description'],
                                                $slides[$i]['button_link'],
                                                $slides[$i]['button_text']
                                            );
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>   
<?php
endif;
?>
