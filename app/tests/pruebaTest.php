<?php 
class PruebaTest extends TestCase
{
	public function testSiempreTrue()
	{
		$variableTrue = true;
		$this->assertTrue($variableTrue);
	}
	public function testLlamaRuta()
	{
		$this->call('GET', '/');
		$this->assertResponseOk();
	}

	public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }


    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
  
        return $stack;
    }
    

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }

       public function testSuma()
      {
    	$response = $this->action('GET', 'ArchivoController@getSuma');
    	$this->assertEquals(20, $response->getContent());
    }

    public function testNombre()
    {
    	$response = $this->action('POST', 'ArchivoController@postNombre', array('nombre' => "juan","apellido" => "perez"));
    	$this->assertEquals("el nombre es juan perez", $response->getContent());
    }

    public function testNumero()
    {
    	$response = $this->action('GET', 'ArchivoController@getNumero');
    	$this->assertEquals(10, $response->getContent());
    }
}
