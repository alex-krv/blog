<?

class Post extends Core\Controller{

    public $modelPosts;

    function index($vars)
    {

        $this->modelPosts = new Application\models\Post();
        $posts = $this->modelPosts->getPost(1);

        $this->modelPosts = new Application\Models\User();
        $about = $this->modelPosts->getUser(1);

        $this->template->setTemplateName('post');
        $this->template->setVariable('posts', $posts);
        $this->template->setVariable('about', $about);

        $this->template->output();

    }

}