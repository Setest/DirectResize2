<?php
/**
 * Properties Lexicon Topic
 *
 * @package directresize2
 * @subpackage lexicon
 */

/* directresize2 properties */

$_lang['dirres2_log'] = 'Создает файл лога.';
$_lang['dirres2_opacity'] = 'Прозрачность';
$_lang['dirres2_slide_duration'] = 'Длительность показа слайда';

$_lang['dirres2_exclude_dirs'] = 'Путь к директориям разделенных запятыми, в которых плагин работать не будет';
$_lang['dirres2_exclude_dirs_children'] = 'При "ДА" распространяет действие исключения родителя на дочерние директории';
$_lang['dirres2_exclude_dirs_suffix'] = 'Cуффикс папки исключения, при наличии, которого дочерние папки исключаются. При этом exclude_dirs_children должен быть равен false';
$_lang['dirres2_exclude_extensions'] = 'Перечисляются через запятую расширения файлов, которые не попадут под действие плагина';
$_lang['dirres2_exclude_text_in_elements'] = 'Исключает из проверки изображения которые содержат данный текст в элементах alt, class, id, tittle';
$_lang['dirres2_templates'] = 'Перечислять через запятую ID шаблонов, в которых данный плагин работает';
$_lang['dirres2_exclude_templates'] = 'Перечислять через запятую ID шаблонов, в которых данный плагин НЕ работает';

$_lang['dirres2_insert_expander_js'] = 'Вставить в код файлы jquery.js, colorbox.js и т.д. необходимые для работы компонента';
$_lang['dirres2_insert_expander_css'] = 'Вставить файлы стилей для работы компонента';
$_lang['dirres2_insert_expander'] = 'Вставить вспомогательные код JS для работы компонента';

$_lang['dirres2_expander'] = 'Выберите тип Lightbox-а';
$_lang['dirres2_max_height'] = 'Высота окна';
$_lang['dirres2_max_width'] = 'Ширина окна';
$_lang['dirres2_slideshow'] = 'Включить слайдшоу?';

/* ColorBox */
$_lang['dirres2_style'] = 'Файл стилей css модуля colorbox. Вы можете использовать style1 по style5';
$_lang['dirres2_transition'] = 'Тип перехода. Can be set to "elastic", "fade", or "none".';

/* HighSlide */
$_lang['dirres2_caption_position'] = 'Положение описания';
$_lang['dirres2_caption_source'] = 'Источник описания';
$_lang['dirres2_large_caption'] = 'Размер описания';
$_lang['dirres2_outline_type'] = 'Тип внешней линии';

/* PrettyPhoto */
$_lang['dirres2_theme'] = 'Тема';

/* FancyBox2 */
$_lang['dirres2_fb2_padding'] = 'Свободное расстояние внутри fancyBox вокруг содержимого. Может быть установлен как массив в виде: [top, right, bottom, left].';
$_lang['dirres2_fb2_openSpeed'] = 'Время открытия в мс. или принимает значения ("slow", "normal", "fast") для завершения перехода.';
$_lang['dirres2_fb2_closeSpeed'] = 'Время закрытия в мс. или принимает значения ("slow", "normal", "fast") для завершения перехода.';
$_lang['dirres2_fb2_openEffect'] = 'Эфект открытия окна ("elastic", "fade" or "none") for each transition type';
$_lang['dirres2_fb2_closeEffect'] = 'Эфект закрытия окна ("elastic", "fade" or "none") for each transition type';
$_lang['dirres2_fb2_closeClick'] = 'If set to true, fancyBox will be closed when user clicks the content.';
$_lang['dirres2_fb2_playSpeed'] = 'Slideshow speed in milliseconds.';
$_lang['dirres2_fb2_autoPlay'] = 'If set to true, slideshow will start after opening the first gallery item.';


/* Thumbnail */
$_lang['dirres2_default_thumb_path'] = 'Путь расположения файлов превью, если он указан, то параметр "thumbnail_dir" игнорируется';
$_lang['dirres2_rewrite_image_on_exist'] = 'Переписывать файлы эскизов если они существуют';
$_lang['dirres2_thumb_key'] = 'Текст добавляется в имя файла предпросмотра';
$_lang['dirres2_thumb_param'] = "Параметры создания превью на основе phpThumbOf, пример: 'zc'=1,'bg'='#fff','q'=80
Основные параметры:
<ul>
	<li>w - ширина превью, по-умолчанию берется из ширины измененного изображения,</li>
	<li>h - высота превью, по-умолчанию берется из высоты измененного изображения,</li>
	<li>q - качество сжатия изображения (100 - наилучшее)</li>
	<li>zc=1 - обрезка изображения с точными размерами (w=120&h=120&zc=1)</li>
	<li>fltr[]=blur|10 - размытие</li>
	<li>fltr[]=gray - градация серого и т.д.</li>
</ul>
";
$_lang['dirres2_thumbnail_dir'] = 'Создает папку превью с данным именем в папке из которой берется файл. При условии что параметр "default_thumb_path" не указан.';
