<?

class Main extends Core\Controller{

    public $modelPosts;
    public $modelLabel;

    function index($vars)
    {
        $this->modelPosts = new Application\models\Post();
        $posts = $this->modelPosts->getList();

        $this->modelLabel = new Application\models\Label();
        $label = $this->modelLabel->getList();

        $this->template->setTemplateName('main');
        $this->template->setVariable('posts', $posts);

        $this->template->setVariable('label', $label);

        $this->template->output();
    }

    function add()
    {
        $vars = [
            'label'     => $_POST['label'],
            'title'     => $_POST['title'],
            'content'   => $_POST['content'],
            'user'      => 1
        ];

        $this->modelPosts = new Application\models\Post();
        $id = $this->modelPosts->add($vars);
        $responseArr = [];

        if($id != false){
            $responseArr['error'] = false;
            $responseArr['message']="данные добавлены успешно";
            $responseArr['data'] = array('id' => $id);
        }else{
            $responseArr['error'] = true;
            $responseArr['message'] = "ошибка, не удалось записать данные";
        }
        echo json_encode($responseArr);

    }

    function edit(){
        $vars = [
            'label'     => $_POST['label'],
            'title'     => $_POST['title'],
            'content'   => $_POST['content']
        ];
        $id = $_POST['id'];
        $this->modelPosts = new Application\models\Post();
        $response = $this->modelPosts->update($vars, $id);
        $responseArr = [];

        if($response){
            $responseArr['error'] = false;
            $responseArr['message']="данные обновлены успешно";
        }else{
            $responseArr['error'] = true;
            $responseArr['message'] = "ошибка, не удалось обновить данные";
        }
        echo json_encode($responseArr);
    }


    function delete(){
        $id = $_POST['id'];
        $this->modelPosts = new Application\models\Post();
        $response = $this->modelPosts->delete($id);
        $responseArr = [];

        if($response){
            $responseArr['error'] = false;
            $responseArr['message']="запись удалена успешно";
        }else{
            $responseArr['error'] = true;
            $responseArr['message'] = "ошибка, не удалось удалить запись";
        }
        echo json_encode($responseArr);
    }

}
