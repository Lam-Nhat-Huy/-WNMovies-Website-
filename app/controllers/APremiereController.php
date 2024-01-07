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
        $o = [
            'displayMoviesList' => '',
        ];

        $o['displayMoviesList'] = $this->APremiereModel->displayMoviesList();

        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/list',
            'displayMoviesList' => $o['displayMoviesList'],
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

}