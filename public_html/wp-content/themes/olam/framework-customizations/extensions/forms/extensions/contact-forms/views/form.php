<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var string $form_id
 * @var string $form_html
 * @var array $extra_data
 */
?>
<div class="form-wrapper fw-contact-form contact-form">
<div class="form-flash-message"><?php if (defined('FW')) { FW_Flash_Messages::_print_frontend(); } ?></div>
	<?php echo $form_html; ?>
</div>