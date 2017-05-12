<?
namespace Core;

abstract class Controller
{
    public $template;

    public function __construct(){
        $this->template = new FTemplate();
    }
    abstract function index($vars);

}
	