<?
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/application.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/interfaces/iTemplate.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/fTemplate.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/request.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/core/model.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/application/models/post.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/application/models/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/application/models/label.php';

$app = \Core\Application::getInstance();
$app->run();