<?php

namespace Yoast\WP\SEO\Tests\Presentations\Indexable_Term_Archive_Presentation;

use Yoast\WP\SEO\Tests\TestCase;

/**
 * Class Open_Graph_Description_Test
 *
 * @coversDefaultClass \Yoast\WP\SEO\Presentations\Indexable_Term_Archive_Presentation
 *
 * @group presentations
 * @group open-graph
 */
class Open_Graph_Type_Test extends TestCase {
	use Presentation_Instance_Builder;

	/**
	 * Does the setup for testing.
	 */
	public function setUp() {
		parent::setUp();

		$this->set_instance();
	}

	/**
	 * Tests the situation where the Open Graph type is given.
	 *
	 * @covers ::generate_open_graph_type
	 */
	public function test_generate_open_graph_type() {
		$this->assertEquals( 'article', $this->instance->generate_open_graph_type() );
	}
}
