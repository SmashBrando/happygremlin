<?php

//define the variables
$content_editor = '';

//set the variables
$content_editor = get_sub_field('content'); //wysiwyg editor

?>

<section class="basic-content-editor">
	<?php echo $content_editor; ?>
</section>