<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly   
?>
<div
    class="popup_wrapper <?php echo (isset($_COOKIE['KDB_visitor_visit_time']) || is_user_logged_in()) ? 'hide_info' : NULL; ?>">
    <div class="popup info " id="geeting_info_popup">
        <!-- <button class="mobile close close_icon" aria-label="Close"></button> -->
        <div class="content_wrapper">
            <!-- <div class="close_wrapper">
                <button class="desktop close close_icon" aria-label="Close"></button>
            </div> -->
            <div class="slide one show">
                <div>
                    <!-- <div class="branding"><a href="https://page-effect.de/"> <img
                                src="/wp-content/plugins/ILEK-Map-App/assets/logo-2023.png" alt="Page Effect"></a></div> -->
                    <h2><span class="d_blue">Willkommen in der ILEK Map App</span>
                    </h2>


                    <!-- <p>
                        Die ILEK Map App ist eine konfigurierbare Kartenanwendung mit Datenbank und grafischer
                        Bedienoberfläche basierend auf Wordpress. Es handelt sich um einen ersten Prototypen in der
                        Testphase - zur Verfügung gestellt von <a href="https://page-effect.de/">Page Effect</a>.</p>
                    <p> Sollten Sie Interesse an einer Kartenanwendung für Ihr Projekt haben, schreiben Sie uns
                        gerne:
                        <a href="mailto:info@page-effect.com">info@page-effect.com</a>
                    </p> -->


                    <a class="mitmachen button" target="_blank" href="<?php echo site_url("zugang") ?>">Daten
                        bearbeiten</a>
                    <button class="close text_button button" aria-label="Close">Zur Karte</button>
                </div>



            </div>

        </div>
        <div class="close d-button" id="d-close-button">
            <div class="close_x_mark"></div>
        </div>
        <!-- <button class="close button close_icon" id="d-close-button"></button> -->
    </div>
</div>
<?php wp_footer(); ?>