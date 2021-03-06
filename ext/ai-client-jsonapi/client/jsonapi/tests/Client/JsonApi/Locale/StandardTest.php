<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017
 */


namespace Aimeos\Client\JsonApi\Locale;


class StandardTest extends \PHPUnit_Framework_TestCase
{
	private $context;
	private $object;
	private $view;


	protected function setUp()
	{
		$this->context = \TestHelperJapi::getContext();
		$templatePaths = \TestHelperJapi::getTemplatePaths();
		$this->view = $this->context->getView();

		$this->object = new \Aimeos\Client\JsonApi\Locale\Standard( $this->context, $this->view, $templatePaths, 'locale' );
	}


	public function testGetItem()
	{
		$localeManager = \Aimeos\MShop\Factory::createManager( $this->context, 'locale' );
		$search = $localeManager->createSearch();
		$search->setConditions( $search->compare( '==', 'locale.status', 1 ) );
		$search->setSortations( [$search->sort( '+', 'locale.position' )] );
		$search->setSlice( 0, 1 );
		$localeItems = $localeManager->searchItems( $search );

		if( ( $localeItem = reset( $localeItems ) ) === false ) {
			throw new \Exception( 'No locale item found' );
		}


		$params = array(
			'id' => $localeItem->getId(),
			'fields' => array(
				'locale' => 'locale.id,locale.languageid,locale.currencyid'
			)
		);

		$helper = new \Aimeos\MW\View\Helper\Param\Standard( $this->view, $params );
		$this->view->addHelper( 'param', $helper );

		$response = $this->object->get( $this->view->request(), $this->view->response() );
		$result = json_decode( (string) $response->getBody(), true );


		$this->assertEquals( 200, $response->getStatusCode() );
		$this->assertEquals( 1, count( $response->getHeader( 'Allow' ) ) );
		$this->assertEquals( 1, count( $response->getHeader( 'Content-Type' ) ) );

		$this->assertEquals( 1, $result['meta']['total'] );
		$this->assertEquals( 'locale', $result['data']['type'] );
		$this->assertGreaterThan( 0, $result['data']['attributes']['locale.id'] );
		$this->assertEquals( 'en', $result['data']['attributes']['locale.languageid'] );
		$this->assertEquals( 'EUR', $result['data']['attributes']['locale.currencyid'] );

		$this->assertArrayNotHasKey( 'errors', $result );
	}


	public function testGetItems()
	{
		$params = array( 'sort' => 'locale.position' );
		$helper = new \Aimeos\MW\View\Helper\Param\Standard( $this->view, $params );
		$this->view->addHelper( 'param', $helper );

		$response = $this->object->get( $this->view->request(), $this->view->response() );
		$result = json_decode( (string) $response->getBody(), true );


		$this->assertEquals( 200, $response->getStatusCode() );
		$this->assertEquals( 1, count( $response->getHeader( 'Allow' ) ) );
		$this->assertEquals( 1, count( $response->getHeader( 'Content-Type' ) ) );

		$this->assertEquals( 1, $result['meta']['total'] );
		$this->assertEquals( 1, count( $result['data'] ) );
		$this->assertEquals( 'locale', $result['data'][0]['type'] );
		$this->assertEquals( 6, count( $result['data'][0]['attributes'] ) );
		$this->assertEquals( 'en', $result['data'][0]['attributes']['locale.languageid'] );
		$this->assertEquals( 'EUR', $result['data'][0]['attributes']['locale.currencyid'] );

		$this->assertArrayNotHasKey( 'errors', $result );
	}


	public function testGetItemsCriteria()
	{
		$params = array(
			'filter' => array(
				'>=' => array( 'locale.position' => 0 ),
			),
			'sort' => '-locale.position',
		);
		$helper = new \Aimeos\MW\View\Helper\Param\Standard( $this->view, $params );
		$this->view->addHelper( 'param', $helper );

		$response = $this->object->get( $this->view->request(), $this->view->response() );
		$result = json_decode( (string) $response->getBody(), true );


		$this->assertEquals( 200, $response->getStatusCode() );
		$this->assertEquals( 1, $result['meta']['total'] );
		$this->assertArrayNotHasKey( 'errors', $result );
	}


	public function testGetMShopException()
	{
		$templatePaths = \TestHelperJapi::getTemplatePaths();

		$object = $this->getMockBuilder( '\Aimeos\Client\JsonApi\Locale\Standard' )
			->setConstructorArgs( [$this->context, $this->view, $templatePaths, 'locale'] )
			->setMethods( ['getItems'] )
			->getMock();

		$object->expects( $this->once() )->method( 'getItems' )
			->will( $this->throwException( new \Aimeos\MShop\Exception() ) );


		$response = $object->get( $this->view->request(), $this->view->response() );
		$result = json_decode( (string) $response->getBody(), true );


		$this->assertEquals( 404, $response->getStatusCode() );
		$this->assertArrayHasKey( 'errors', $result );
	}


	public function testGetException()
	{
		$templatePaths = \TestHelperJapi::getTemplatePaths();

		$object = $this->getMockBuilder( '\Aimeos\Client\JsonApi\Locale\Standard' )
			->setConstructorArgs( [$this->context, $this->view, $templatePaths, 'locale'] )
			->setMethods( ['getItems'] )
			->getMock();

		$object->expects( $this->once() )->method( 'getItems' )
			->will( $this->throwException( new \Exception() ) );


		$response = $object->get( $this->view->request(), $this->view->response() );
		$result = json_decode( (string) $response->getBody(), true );


		$this->assertEquals( 500, $response->getStatusCode() );
		$this->assertArrayHasKey( 'errors', $result );
	}
}