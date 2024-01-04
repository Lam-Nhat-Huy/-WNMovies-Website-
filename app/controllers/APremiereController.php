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
            // Lấy giá trị từ các trường input
            $movieName = $_POST['movie-name'];
            $officialName = $_POST['officical-name'];
            $movieTime = $_POST['movie-time'];
            $movieQuality = $_POST['movie-quality'];
            $movieCountry = $_POST['movie-country'];
            $movieSubtitle = $_POST['movie-subtittle'];
            $movieURL = $_POST['movie-url'];
            $moviePerformer = $_POST['movie-performer'];
            $movieType = $_POST['movie-type'];
            $movieStatus = $_POST['movie-status'];
            $moviePoster = $_FILES['movie-poster'];
            $movieDirector = $_POST['movie-director'];
            $movieDescription = $_POST['movie-description'];

            $this->APremiereModel->addMovies($movieName, $officialName, $movieTime, $movieQuality, $movieCountry, $movieSubtitle, $movieURL, $moviePerformer, $movieType, $movieStatus, $moviePoster, $movieDirector, $movieDescription);
            exit();

        }

        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/add',
        ]);
    }

    public function test()
    {
        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/test',
        ]);
    }
}