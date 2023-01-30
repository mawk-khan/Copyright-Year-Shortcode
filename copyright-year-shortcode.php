// Copyright year shortcode for footer area

function year_shortcode () {
  $year = date_i18n ('Y');
  return $year;
}
add_shortcode ('year', 'year_shortcode');
