<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Thêm phim mới </h3>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="/apremiere/add/" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên Phim (Movie Name)</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="movie-name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Tên chính thức (Official Name)</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="officical-name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Thời gian</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="movie-time">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Chất lượng phim</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" name="movie-quality">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Quốc gia</label>
                                    <input type="text" class="form-control" id="exampleInputPassword4" placeholder="" name="movie-country">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleSelectGenre">Phụ đề</label>
                                    <select class="form-control" id="exampleSelectGenre" name="movie-subtittle">
                                        <option>Thuyết minh</option>
                                        <option>Vietsub</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputURL">URL</label>
                                    <input type="text" class="form-control" id="exampleInputURL" placeholder="" name="movie-url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputActor">Diễn viên</label>
                                    <input type="text" class="form-control" id="exampleInputActor" placeholder="" name="movie-performer">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleSelectGenre">Thể loại</label>
                                    <select class="form-control" id="exampleSelectGenre" name="movie-type">
                                        <option>Hành động</option>
                                        <option>Hoạt hình</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleSelectStatus">Trạng thái</label>
                                    <select class="form-control" id="exampleSelectStatus" name="movie-status">
                                        <option>Đang chiếu</option>
                                        <option>Tạm ngưng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="poster">Poster</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="poster" name="movie-poster">
                                        <label class="custom-file-label" for="poster"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Đạo diễn</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="" name="movie-director">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Mô tả</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="movie-description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/apremiere/" class="btn btn-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>