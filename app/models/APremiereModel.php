<?php
class APremiereModel extends  Database {
    public function displayMoviesList()
    {
        $sql = "SELECT * FROM movies";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function addMovies($movieName, $officialName, $movieTime, $movieQuality, $movieCountry, $movieSubtitle, $movieURL, $moviePerformer, $movieType, $movieStatus, $moviePoster, $movieDirector, $movieDescription)
    {
        if (!empty($movieName) && !empty($officialName) && !empty($movieTime) && !empty($movieQuality) && !empty($movieCountry) && !empty($movieURL) && !empty($moviePerformer) && !empty($movieType) && !empty($movieStatus) && !empty($moviePoster) && !empty($movieDirector) && !empty($movieDescription)) {

            $sql = "INSERT INTO movies (name, thumb_url, origin_name, content, year, time, slug, lang, quality, status, category, country)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('ssssssssssss', $movieName, $movieURL, $officialName, $movieDescription, $movieTime, $movieQuality, $moviePerformer, $movieType, $movieStatus, $moviePoster, $movieDirector, $movieCountry);

                if ($stmt->execute()) {
                    $_SESSION['message_success'] = alertSuccess('Bạn đã công chiếu phim thành công');
                    header('Location: /apremiere/');
                    exit();
                } else {
                    echo "Error executing the statement: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Error preparing the statement: " . $this->conn->error;
            }
        } else {
            echo "Error: All required fields must be filled.";
        }
    }




}