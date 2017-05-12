<?
namespace Core;

// use Core\Request;

class Application{
	/**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    protected static $instance;

    private $request;
    
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    	$this->request = new Request();
    }
    public function run()
	{
		$this->request->route();
	}

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

}
