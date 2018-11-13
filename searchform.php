
<?php
/**
 * Template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="searchform-container">
            <label for="s" class="assistive-text"><?php _e( 'Buscar', 'hugomitoire' ); ?></label>
            <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Novela, Escrito, Viaje, Charla, Cuentos, Terror, Fantástico y Ciencia Ficción, etc ...', 'hugomitoire' ); ?>" />
            <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Buscar', 'hugomitoire' ); ?>" />
        </div>
    </form>