<?php 

class A{
    use Observable;
}

class ObservableTest extends \PHPUnit_Framework_TestCase{
    public function testObservable(){
        $a = new A();

        $a->on('Hello', function($name){
            echo 'Hello ', $name, "\n";
        });
        $a->on('Hello', function($name){
            echo 'Hello again ', $name, "\n";
        });

        ob_start();
        $a->trigger('Hello', 'lloyd');
        $this->assertEquals("Hello lloyd\nHello again lloyd\n", ob_get_clean());
        return $a;
    }
    /**
     * @depends testObservable
     */
    public function testOff($a){

        $a->off('Hello');
        
        ob_start();
        $a->trigger('Hello', 'lloyd');
        $this->assertEquals("", ob_get_clean());
    }
}
