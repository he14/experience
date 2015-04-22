<?php

return;

#echo print_r(field_info_field('field_vorname'));
#print_r($items);

#print_r($variables);

#field_view_field('node', $variables, 'field_vorname');

?>


<?php

foreach ($items as $item) {

foreach($item as $i) {

    #$arr = reset($i)['field_vorname'];

    #print_r(reset($i)['field_vorname']);

    #print_r(field_get_items('node', reset($i), 'field_vorname'));

    #print_r(reset($i));

    #print_r(field_view_value('noe', $item, 'field_vorname', array()));

    #echo field_view_value('node', reset($i), 'field_vorname');

    #echo field_view_field('node', reset($i), 'field_vorname');
}
}