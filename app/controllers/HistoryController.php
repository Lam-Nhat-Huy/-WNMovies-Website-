<?php
class HistoryController extends Controller {
    protected $APremiereModel;

    public function __construct()
    {
        $this->APremiereModel = $this->model('APremiereModel');
    }

    public function index()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1 ;
        $result_per_page = 6;
        $number_of_results =  mysqli_num_rows($this->APremiereModel->displayHistoryMovies());
        $this_page_first_result = ($page - 1) * $result_per_page;
        $number_of_pages = ceil($number_of_results / $result_per_page);

        $historyDeletedMovies = $this->APremiereModel->historyDeletedMovies($this_page_first_result, $result_per_page);
        $this->view('AdminMasterView', [
            'pages' => '/admin/APremiereListView',
            'blocks' => '/apremiere/delete',
            'historyDeletedMovies' => $historyDeletedMovies,
            'number' => $number_of_pages,
        ]);
    }

    public function restore()
    {
        $movieId = $_GET['id'];
        $restoreMovies = $this->APremiereModel->restoreMovies($movieId);
    }
}