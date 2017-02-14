<?php
App::uses('BooksController', 'Controller');

/**
 * BooksController Test Case
 *
 */
class BooksControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.book',
		'app.category',
		'app.comment',
		'app.writer',
		'app.books_writer'
	);

}
