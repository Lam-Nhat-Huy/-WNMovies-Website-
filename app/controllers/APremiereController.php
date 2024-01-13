<?php
class APremiereController extends Controller {
    protected $APremiereModel;

    public function __construct()
    {
        $this->APremiereModel = $this->model('APremiereModel');
        checkLogin();
    }

    public function index()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1 ;
        $result_per_page = 6;
        $number_of_results =  mysqli_num_rows($this->APremiereModel->displayMoviesList());
        $this_page_first_result = ($page - 1) * $result_per_page;
        $number_of_pages = ceil($number_of_results / $result_per_page);

        $o = [
            'displayMoviesList' => '',
        ];

        $o['displayMoviesList'] = $this->APremiereModel->displayMoviesList();

        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/list',
            'displayMoviesList' => $o['displayMoviesList'],
            'movies' => $this->APremiereModel->getMoviesLimit($this_page_first_result, $result_per_page),
            'number' => $number_of_pages,
        ]);
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            $thumb_url = filter_var($_POST["thumb_url"], FILTER_SANITIZE_URL);
            $origin_name = filter_var($_POST["origin_name"], FILTER_SANITIZE_STRING);
            $content = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
            $year = filter_var($_POST["year"], FILTER_VALIDATE_INT);
            $time = filter_var($_POST["time"], FILTER_SANITIZE_STRING);
            $slug = filter_var($_POST["slug"], FILTER_SANITIZE_STRING);
            $lang = filter_var($_POST["lang"], FILTER_SANITIZE_STRING);
            $quality = filter_var($_POST["quality"], FILTER_SANITIZE_STRING);
            $status = filter_var($_POST["status"], FILTER_SANITIZE_STRING);
            $category = filter_var($_POST["category"], FILTER_SANITIZE_STRING);
            $country = filter_var($_POST["country"], FILTER_SANITIZE_STRING);
            $link_embed = filter_var($_POST["link_embed"], FILTER_SANITIZE_URL);
            $this->APremiereModel->addMovies($name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed);
        }

        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/add',
        ]);
    }

    public function edit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            $thumb_url = filter_var($_POST["thumb_url"], FILTER_SANITIZE_URL);
            $origin_name = filter_var($_POST["origin_name"], FILTER_SANITIZE_STRING);
            $content = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
            $year = filter_var($_POST["year"], FILTER_VALIDATE_INT);
            $time = filter_var($_POST["time"], FILTER_SANITIZE_STRING);
            $slug = filter_var($_POST["slug"], FILTER_SANITIZE_STRING);
            $lang = filter_var($_POST["lang"], FILTER_SANITIZE_STRING);
            $quality = filter_var($_POST["quality"], FILTER_SANITIZE_STRING);
            $status = filter_var($_POST["status"], FILTER_SANITIZE_STRING);
            $category = filter_var($_POST["category"], FILTER_SANITIZE_STRING);
            $country = filter_var($_POST["country"], FILTER_SANITIZE_STRING);
            $link_embed = filter_var($_POST["link_embed"], FILTER_SANITIZE_URL);

            $this->APremiereModel->editMovies($id, $name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed);
            exit();
        }


        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/edit',
            'getOneMovies' => $this->APremiereModel->getOneMovies(),
        ]);
    }

    public function delete()
    {
        $movieId = $_GET['id'];
        $this->APremiereModel->deleteMovies($movieId);
    }

}