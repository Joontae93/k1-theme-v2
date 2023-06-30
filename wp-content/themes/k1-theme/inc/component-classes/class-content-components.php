<?php
/**
 * A Component Class that displays content a few different ways. All methods have an $args bypass and an $echo control where `false` returns the markup and `true` echoes the markup. The $args array also shows expected parameters.
 *
 * @param bool $acf class-wide control to use acf fields or standard WordPress field lookups (e.g. `get_field` vs `get_the_excerpt`). If true, excerpt will be set with `get_field('archive_content',$id)`. Defaults `true`
 *
 * @author KJ Roelke
 * @version 1.0.0
 */
class Content_Components {
	/**
	 * A headline element that has lots of optional parameters in the $args array.
	 *
	 * @param array $args Pass optional customizations
	 *
	 * ```php
	 * $args = array(
	 * 'headline_element'        => ?string default "h2",
	 * 'headline_class'          => ?string default "headline",
	 * 'subheadline_element'     => ?string default 'span');
	 * 'subheadline_class'       => ?string default 'subheadline');
	 * 'subheadline_content'     => ?string the subheadline content,
	 * ```
	 */
	public function headline( string $headline, bool $echo = true, array ...$args ) {
		$default = array(
			'headline_element'    => 'h2',
			'headline_class'      => 'headline',
			'subheadline_element' => 'span',
			'subheadline_class'   => 'subheadline',
		);

		$options = array_merge( $default, ...$args );
		extract( $options );

		$markup = "<{$headline_element} class='{$headline_class}'>{$headline}</{$headline_element}>";
		if ( ! empty( $subheadline_content ) ) {
			$markup .= "<{$subheadline_element} class='{$subheadline_class}'>{$subheadline_content}</{$subheadline_element}>";
		}
		if ( $echo ) {
			echo $markup;
		} else {
			return $markup;
		}
	}

	/**
	 *  Generates an `<a>` or `<button>` based on whether or not a $link is passed. Recommended use with named parameters for simple configuration.
	 *
	 * @param array $options {
	 *
	 *      @var string $text         The button text
	 *      @var string $link         The button href
	 *      @var string $html_class   btn classes
	 *      @var bool $is_external    Is the link external?
	 * }
	 * @param bool  $echo Whether to echo or return the markup (default: true)
	 */
	public function cta_button( array $options, bool $echo = true ) {
		$default = array(
			'text'        => 'Learn More',
			'link'        => '',
			'html_class'  => 'btn__primary--fill',
			'is_external' => false,
		);
		$options = array_merge( $default, $options );

		extract( $options );

		if ( empty( $link ) ) {
			$markup = "<button class='{$html_class}'>{$text}</button>";
		} else {
			$markup = ( $is_external ) ? "<a href='{$link}' target='_blank' rel='noopener noreferrer' class='{$html_class}'>{$text}</a>" : "<a href='{$link}' class='{$html_class}'>{$text}</a>";
		}

		if ( $echo ) {
			echo $markup;
		} else {
			return $markup;
		}
	}

	/**
	 * Renders a ul/ol of list items
	 *
	 * @param array  $list_items         an array of strings to become the `<li>`s
	 * @param string $item_class        a string to set list item htmlClass
	 * @param string $list_type         `ul` | `ol`
	 * @param bool   $echo                `echo` or `return` the markup
	 */
	public function bulleted_list( array $list_items, string $item_class = '', string $list_type = 'ul', bool $echo = true ) {
		$markup = "<{$list_type}>";
		foreach ( $list_items as $item ) {
			$markup .= empty( $item_class ) ? "<li>{$item}</li>" : "<li class='{$item_class}'>{$item}</li>";
		}
		$markup .= "</{$list_type}>";
		if ( $echo ) {
			echo $markup;
		} else {
			return $markup;
		}
	}
}