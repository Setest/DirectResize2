<?php
/**
 * Properties Lexicon Topic
 *
 * @package directresize2
 * @subpackage lexicon
 */

/* directresize2 properties */

$_lang['dirres2_log'] = 'Create log file.';
$_lang['dirres2_opacity'] = 'Opacity';
$_lang['dirres2_slide_duration'] = 'Slide duration';

$_lang['dirres2_exclude_dirs'] = 'The path to the directories are separated by commas, in which the plug-in will not work.';
$_lang['dirres2_exclude_dirs_children'] = 'When YES extends exception parent to child directory.';
$_lang['dirres2_exclude_dirs_suffix'] = 'Suffix for exclude directories. If exist contained folders will be also excluded. Its will working if "exclude_dirs_children" parameter will be false';
$_lang['dirres2_exclude_extensions'] = 'Exclude files with extensions. Comma separated parameter.';
$_lang['dirres2_exclude_text_in_elements'] = 'Исключает из проверки изображения которые содержат данный текст в элементах alt, class, id, tittle';
$_lang['dirres2_templates'] = 'Listed separated by commas ID templates that this plug-in works';
$_lang['dirres2_exclude_templates'] = 'Listed separated by commas ID templates that this plug-in NOT works';

$_lang['dirres2_insert_expander_js'] = 'Insert in ouput code files: jquery.js, colorbox.js etc. required for the component';
$_lang['dirres2_insert_expander_css'] = 'Insert style files for the component';
$_lang['dirres2_insert_expander'] = 'Insert support code JS for component';

$_lang['dirres2_expander'] = 'Select the type of Lightbox';
$_lang['dirres2_max_height'] = 'Lightbox height';
$_lang['dirres2_max_width'] = 'Lightbox width';
$_lang['dirres2_slideshow'] = 'Enable slidshow';

/* ColorBox */
$_lang['dirres2_style'] = 'Css stylesheet module colorbox (you can use: style1-5).';
$_lang['dirres2_transition'] = 'Type of transition. Can be set to "elastic", "fade", or "none".';

/* HighSlide */
$_lang['dirres2_caption_position'] = 'Position caption';
$_lang['dirres2_caption_source'] = 'Source of caption';
$_lang['dirres2_large_caption'] = 'Large of caption';
$_lang['dirres2_outline_type'] = 'Outline type';

/* PrettyPhoto */
$_lang['dirres2_theme'] = 'Theme';

/* Thumbnail */
$_lang['dirres2_default_thumb_path'] = 'The path of the files preview, if specified, the parameter "thumbnail_dir" ignored';
$_lang['dirres2_rewrite_image_on_exist'] = 'Rewrite thumbnail files if they exist';
$_lang['dirres2_thumb_key'] = 'The text is added to the file name to preview';
$_lang['dirres2_thumb_param'] = 'Parameters based on a preview phpThumbOf, example: "zc" = 1, "bg" = "# fff", "q" = 80
	Basic information:
<ul>
	<li>w - width of the preview, the default is taken from the width of the altered image</li>
	<li>h - height of the preview, the default is taken from the height of the altered image</li>
	<li>q - image compression quality (100 - best)</li>
	<li>zc = 1 - cropping with exact dimensions (w = 120 & h = 120 & zc = 1)</li>
	<li>fltr [] = blur | 10 - Blur</li>
	<li>fltr [] = gray - gray scale, etc.</li>
</ul>
';
$_lang['dirres2_thumbnail_dir'] = 'If exist, created thumbs folder using the current place of directory. Dots in name of folder is will be deleted. Provided that the option "default_thumb_path" Unknown.';
