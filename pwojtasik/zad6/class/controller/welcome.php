<?phpclass Controller_Welcome extends Controller {	    public function action_index()     {        $this->view->title = 'Welcome!';        $this->view->content->imie = 'adrian';    }	}