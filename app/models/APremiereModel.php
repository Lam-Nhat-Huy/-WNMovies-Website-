<?php
class APremiereModel extends  Database {
    public function displayMoviesList()
    {
        try {
            $sql = "SELECT * FROM movies";
            $result = $this->conn->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function addMovies($name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed)
    {
        $sql = "INSERT INTO movies (name, thumb_url, origin_name, content, year, time, slug, lang, quality, status, category, country, link_embed)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            die("Error preparing the statement: " . $this->conn->error);
        }

        $stmt->bind_param('sssssssssssss', $name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed);

        if ($stmt->execute()) {
            $_SESSION['message_success'] = alertSuccess('Bạn đã công chiếu phim thành công');
            header('Location: /apremiere/');
            exit();
        } else {
            die("Error executing the statement: " . $stmt->error);
        }

        $stmt->close();
    }





}