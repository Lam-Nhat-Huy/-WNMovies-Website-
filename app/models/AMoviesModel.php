<?php
class AMoviesModel extends Database {
    public function getApiCache($url) {
        $cacheFile = 'cache/' . md5($url) . '.json';
        $cacheTime = 3200;
        if (file_exists($cacheFile) && time() - fileatime($cacheFile) < $cacheTime) {
            $data = file_get_contents($cacheFile);
            return json_decode($data, true);
        }
        $apiResponse = file_get_contents($url);
        file_put_contents($cacheFile, $apiResponse);
        return json_decode($apiResponse, true);
    }

    public function getApiMovies($page)
    {
        $i = [
            'api' => 'https://ophim1.com/danh-sach/phim-moi-cap-nhat/?page=' . $page,
            'data' => ''
        ];

        $i['data'] = $this->getApiCache($i['api']);
        return $i['data'];
    }

    public function getSlugMovies($slug)
    {
        $i = [
            'slug' => "https://ophim1.com/phim/" . $slug,
            'data' => ''
        ];

        $i['data'] = $this->getApiCache($i['slug']);
        return $i['data'];
    }

    public function addNewMovies($name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country)
    {
        try {
            $sql = "INSERT INTO `movies` (name,thumb_url,origin_name,content,year,time,slug,lang,quality,status,category,country)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ssssssssssss', $name, $thumb_url, $origin_name, $content, $year, $time, $slug, $lang, $quality, $status, $category, $country);
            if ($stmt->execute()){
                $_SESSION['message_success'] = alertSuccess('Bạn đã công chiếu phim thành công');
                header('Location: /amoive/');
            }
            $stmt->close();
        } catch (Exception $e) {
            echo "Errors" . $e->getMessage();
        }
    }

}