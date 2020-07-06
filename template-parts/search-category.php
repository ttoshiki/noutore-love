<?php
$categories = get_categories(array('taxonomy' => 'column_category'));
if ( $categories ) {
	$cat_selct = '<div class="cat-dropDownWrapper"><select name="cat-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;" class="cat-dropDown">';
	$cat_selct .= '<option value="" selected="selected" disabled>カテゴリーを選択</option>';
	$cat_selct .= '<option value="'.home_url().'/blog">すべてのカテゴリー</option>';
	foreach ( $categories as $category ) {
		$cat_selct .= '<option value="'.esc_html( get_category_link( $category->term_id ) ).'">'.esc_html( $category->name ).'</option>';
	}
	$cat_selct .= '</select></div>';
	echo $cat_selct;
}
?>