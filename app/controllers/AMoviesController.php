<?php
class  AMoviesController extends Controller {
    protected $AMoviesModel;

    public function __construct()
    {
        $this->AMoviesModel = $this->model('AMoviesModel');
        checkLogin();
    }

    public function index()
    {
        $i = [
            'page' => ''
        ];

        $o = [
            'getApiMovies' => ''
        ];

        if (isset($_GET['page'])){
            $i['page'] = $_GET['page'];
        } else {
            $i['page'] = 1;
        }

        $o['getApiMovies'] =  $this->AMoviesModel->getApiMovies($i['page']);

        $this->view('AdminMasterView', [
            'pages' => '/admin/AMoviesListView',
            'blocks' => '/amoives/list',
            'getApiMovies' =>  $o['getApiMovies'],
        ]);
    }

    public function addMovie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $thumb_url = filter_input(INPUT_POST, 'thumb_url', FILTER_SANITIZE_URL);
            $origin_name = filter_input(INPUT_POST, 'origin_name', FILTER_SANITIZE_STRING);
            $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
            $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
            $time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING);
            $slug = filter_input(INPUT_POST, 'slug', FILTER_SANITIZE_STRING);
            $lang = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING);
            $quality = filter_input(INPUT_POST, 'quality', FILTER_SANITIZE_STRING);
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
            $link_embed = filter_input(INPUT_POST, 'link_embed', FILTER_SANITIZE_STRING);
            $result = $this->AMoviesModel->addNewMovies($name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed);
            if ($result){
                header('Location: /amovies/');
            }
        }
    }

    public function detail()
    {
        $i = [
            'slug' => ''
        ];

        $o = [
            'getSlugMovies' => ''
        ];

        $i['slug'] = $_GET['slug'];

        $o['getSlugMovies'] = $this->AMoviesModel->getSlugMovies($i['slug']);

        $this->view('AdminMasterView', [
            'pages' => '/admin/AMoviesListView',
            'blocks' => '/amoives/detail',
            'getSlugMovies' => $o['getSlugMovies'],
        ]);
    }

}