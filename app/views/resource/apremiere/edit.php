<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Chỉnh sửa phim </h3>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="/apremiere/edit/" enctype="multipart/form-data">
                        <?php
                            foreach ($data['getOneMovies'] as $r){
                                ?>
                                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Tên Phim (Movie Name)</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="name" value="<?= $r['name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Link ảnh (Thumb Url)</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="thumb_url" value="<?= $r['thumb_url'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Tên chính thức (Official Name)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="origin_name" value="<?= $r['origin_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Mô tả (Content)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="content" value="<?= $r['content'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Năm phát hành (Year)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="year" value="<?= $r['year'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Thời lượng (Time)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="time" value="<?= $r['time'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Slug Phim (Slug)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="slug" value="<?= $r['slug'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Phụ đề (Lang)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="lang" value="<?= $r['lang'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Chất lượng (Quality)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="quality" value="<?= $r['quality'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleSelectStatus">Trạng thái (Status)</label>
                                            <select class="form-control" id="exampleSelectStatus" name="status">
                                                <option>Đang chiếu</option>
                                                <option>Tạm ngưng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGenre">Thể loại (Category)</label>
                                            <select class="form-control" id="exampleSelectGenre" name="category">
                                                <option>Hành động</option>
                                                <option>Hoạt hình</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Quốc gia (Country)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="country" value="<?= $r['country'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Đường dẫn phim (Link Embed)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="link_embed" value="<?= $r['link_embed'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/apremiere/" class="btn btn-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>