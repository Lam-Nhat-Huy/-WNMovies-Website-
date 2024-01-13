<?php
class APremiereModel extends  Database {
    public function displayMoviesList()
    {
        try {
            $sql = "SELECT * FROM movies WHERE is_deleted = 0";
            $result = $this->conn->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getMoviesLimit($this_page_first_result, $result_per_page)
    {
        try {
            $sql = "SELECT * FROM movies WHERE is_deleted = 0 LIMIT $this_page_first_result, $result_per_page";
            $result = $this->conn->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function displayHistoryMovies()
    {
        try {
            $sql = "SELECT * FROM movies WHERE is_deleted = 1";
            $result = $this->conn->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function historyDeletedMovies($this_page_first_result, $result_per_page)
    {
        try {
            $sql = "SELECT * FROM movies WHERE is_deleted = 1 LIMIT $this_page_first_result, $result_per_page";
            $result = $this->conn->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getOneMovies()
    {
        try
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM movies WHERE id = '$id'";
            $result = $this->conn->query($sql);
            return $result;
        } catch (PDOException $e){
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

    public function editMovies($id, $name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed)
    {
        $sql = "UPDATE movies SET name=?, thumb_url=?, origin_name=?, content=?, year=?, time=?, slug=?, lang=?, quality=?, status=?, category=?, country=?, link_embed=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            die("Error preparing the statement: " . $this->conn->error);
        }

        $stmt->bind_param('sssssssssssssi', $name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country, $link_embed, $id);

        if ($stmt->execute()) {
            $_SESSION['message_success'] = alertSuccess('Phim đã được cập nhật thành công');
            header('Location: /apremiere/');
            exit();
        } else {
            die("Error executing the statement: " . $stmt->error);
        }

        $stmt->close();
    }

    public function deleteMovies($movieId)
    {
        try {
            $sql = "UPDATE movies SET is_deleted = 1 WHERE id = ?";
            $stmt = $this->conn->prepare($sql);

            if (!$stmt) {
                die("Error preparing the statement: " . $this->conn->error);
            }

            $stmt->bind_param('i', $movieId);

            if ($stmt->execute()) {
                $_SESSION['message_success'] = alertSuccess('Phim đã được xóa thành công');
                echo '<script>window.history.go(-1);</script>';
                exit();
            } else {
                die("Error executing the statement: " . $stmt->error);
            }

            $stmt->close();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function restoreMovies($movieId)
    {
        try {
            $sql = "UPDATE movies SET is_deleted = 0 WHERE id = ?";
            $stmt = $this->conn->prepare($sql);

            if (!$stmt) {
                die("Error preparing the statement: " . $this->conn->error);
            }

            $stmt->bind_param('i', $movieId);

            if ($stmt->execute()) {
                $_SESSION['message_success'] = alertSuccess('Phim đã được phục hồi thành công');
                header('Location: /history/');
                exit();
            } else {
                die("Error executing the statement: " . $stmt->error);
            }

            $stmt->close();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}