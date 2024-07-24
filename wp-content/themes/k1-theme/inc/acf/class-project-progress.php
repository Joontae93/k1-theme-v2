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
	/**
	 * The logo of the project
	 *
	 * @var ?ACF_Image $logo
	 */
	public ?ACF_Image $logo;

	/**
	 * The headline of the project
	 *
	 * @var string $headline
	 */
	private string $headline;

	/**
	 * The subheadline of the project
	 *
	 * @var ?string $subheadline
	 */
	private ?string $subheadline;

	/**
	 * Whether the project has a subheadline
	 *
	 * @var bool $has_subheadline
	 */
	public bool $has_subheadline;

	/**
	 * Whether the project has a giving link
	 *
	 * @var bool $override
	 */
	public bool $override;

	/**
	 * The goal amount
	 *
	 * @var int $goal
	 */
	private int $goal;

	/**
	 * Whether the giving target has been met
	 *
	 * @var bool $goal_complete
	 */
	public bool $goal_complete;

	/**
	 * The amount of dollars raised
	 *
	 * @var ?int $dollars
	 */
	private ?int $dollars;

	/**
	 * The completion rate as a percentage
	 *
	 * @var ?int $completion_rate
	 */
	public ?int $completion_rate;

	/**
	 * The completion rate as a percentage
	 *
	 * @var ?int $percent
	 */
	private ?int $percent;

	/**
	 * The giving link
	 *
	 * @var ?string $giving_link
	 */
	private ?string $giving_link;

	/**
	 * Whether the project has a giving link
	 *
	 * @var bool $has_giving_link
	 */
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

	/**
	 * Returns the headline as an HTML string
	 */
	public function get_the_headline(): string {
		return $this->headline;
	}

	/**
	 * Echoes the headline as an HTML string
	 */
	public function the_headline() {
		echo $this->get_the_headline();
	}

	/**
	 * Returns the subheadline as an HTML string
	 */
	public function get_the_subheadline(): string {
		return $this->subheadline;
	}

	/**
	 * Echoes the subheadline as an HTML string
	 */
	public function the_subheadline() {
		echo $this->get_the_subheadline();
	}

	/**
	 * Returns the giving link
	 */
	public function get_the_giving_link(): string {
		return $this->giving_link;
	}

	/**
	 * Echoes the giving link
	 */
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

	/**
	 * Formats int as US-locale currency
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
