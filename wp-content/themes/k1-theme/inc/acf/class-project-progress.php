<?php
/**
 * Project Progress
 * Creates a WordPress-style API for handling giving projects
 *
 * @package KingdomOne
 * @subpackage ACF
 * @since 1.1
 */

namespace KingdomOne\ACF;

use ChoctawNation\ACF_Image;

/** A WordPress-style API for interacting with the ACF Field for Project Progress */
class Project_Progress {
	public ?ACF_Image $logo;
	private string $headline;
	private ?string $subheadline;
	public bool $has_subheadline;
	public bool $override;
	private int $goal;
	public bool $goal_complete;
	private ?int $dollars;
	public ?int $completion_rate;
	private ?int $percent;
	private ?string $giving_link;
	public bool $has_giving_link;

	/**
	 * Builds the object
	 *
	 * @param string $field_name the name of the `group` ACF Field
	 * @param int    $page_id the id of the page where the ACF Field is located
	 */
	public function __construct( string $field_name, int $page_id ) {
		$project               = get_field( $field_name, $page_id );
		$this->logo            = empty( $project['logo'] ) ? null : new ACF_Image( $project['logo'] );
		$this->headline        = esc_textarea( $project['headline'] );
		$this->subheadline     = isset( $project['subheadline'] ) ? esc_textarea( $project['subheadline'] ) : null;
		$this->has_subheadline = null !== $this->subheadline;
		$this->goal            = intval( $project['goal'] );
		$this->override        = $project['override_calculations'];
		$this->percent         = $this->override ? intval( $project['percent'] ) : null;
		$this->dollars         = $this->override ? null : intval( $project['dollars'] );
		$this->completion_rate = $this->override ? $this->percent : ( $this->dollars / $this->goal * 100 );
		$this->goal_complete   = 100 === $this->percent || 100 <= $this->completion_rate;
		$this->giving_link     = isset( $project['giving_link'] ) ? esc_url( $project['giving_link'] ) : null;
		$this->has_giving_link = null !== $this->giving_link;
	}

	public function get_the_headline(): string {
		return $this->headline;
	}

	public function the_headline() {
		echo $this->get_the_headline();
	}

	public function get_the_subheadline(): string {
		return $this->subheadline;
	}

	public function the_subheadline() {
		echo $this->get_the_subheadline();
	}

	public function get_the_giving_link(): string {
		return $this->giving_link;
	}

	public function the_giving_link() {
		echo $this->get_the_giving_link();
	}

	/** Returns the Goal amount as formatted currency */
	public function get_the_goal(): string {
		return ( $this->format_currency( $this->goal ) );
	}
	/** Echoes the goal as formatted currency */
	public function the_goal() {
		return $this->get_the_goal();
	}

	/** Formats int as US-locale currency
	 *
	 * @param int $number the number to format
	 * @return string $xx,xxx
	 */
	private function format_currency( int $number ): string {
		return '$' . number_format( $number, 0, '.', ',' );
	}

	/**
	 * Returns the completion as a string with trailing `%` sign
	 */
	public function get_the_completion(): string {
		if ( $this->override ) {
			return $this->percent . '%';
		} else {
			return $this->completion_rate . '%';
		}
	}

	/**
	 * Returns the completion as a string with trailing `%` sign
	 */
	public function the_completion() {
		echo $this->get_the_completion();
	}
}
