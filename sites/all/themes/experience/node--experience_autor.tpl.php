<?php 

echo '<div class="fallstudie-autoren">';

$name = render($content['field_vorname']) . ' ' . render($content['field_nachname']);
$email = render($content['field_email']);
$website = render($content['field_website']);
$logo = render($content['field_logo']);

if (!empty($name)) {
	echo empty($website) ? $name : sprintf('<a target="_blank" href="%s">%s</a>', $website, $name);
	echo '<br>';
}

if (!empty($email)) {
	echo sprintf('<a href="mailto:%s">E-Mail senden</a><br>', $email);
}

if (!empty($logo)) {
	echo empty($website) ? $logo : sprintf('<a target="_blank" href="%s">%s</a>', $website, $logo);
	echo '<br>';
}

echo '</div>';
