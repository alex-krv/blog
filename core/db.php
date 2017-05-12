<?
    namespace Core;

	class DB {
        const   DB_HOST = 'localhost',
            DB_NAME = 'blog',
            DB_USER = 'root',
            DB_PASS = '',
            DB_CHAR = 'utf8';

        protected static $instance;

        protected function __construct() {}

    	private function __clone() {}

        private function __wakeup() {}

        public static function getInstance()
	    {
	        if (self::$instance === null)
	        {
                $opt  = array(
                    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_EMULATE_PREPARES   => TRUE,
                );
                $dsn = 'mysql:host='.self::DB_HOST.';dbname='.self::DB_NAME.';charset='.self::DB_CHAR;
	            self::$instance = new \PDO($dsn, self::DB_USER, self::DB_PASS, $opt);
	        }
	        return self::$instance;
	    }
	    
	    public static function __callStatic($method, $args)
	    {
	        return call_user_func_array(array(self::getInstance(), $method), $args);
	    }

	    public static function query($sql, $args = [])
	    {
	        $stmt = self::getInstance()->prepare($sql);
	        return $stmt;
	    }

	}
