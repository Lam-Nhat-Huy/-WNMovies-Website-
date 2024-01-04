<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <!-- Logo -->
                        <div class="text-center mb-4">
                            <img src="/public/admin/assets/images/logos.png" alt="Logo" class="img-fluid" style="max-width: 100%; height: 40px">
                        </div>
                        <form id="loginForm" method="post" action="">
                            <div class="form-group">
                                <label for="username">Tên đăng nhập *</label>
                                <input type="text" id="username" name="username" class="form-control p_input">
                                <div id="usernameError" class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu *</label>
                                <input type="password" id="password" name="password" class="form-control p_input">
                                <div id="passwordError" class="error-message"></div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-block enter-btn" onclick="validateForm()">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function validateForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        document.getElementById('usernameError').innerHTML = '';
        document.getElementById('passwordError').innerHTML = '';

        if (username.trim() === '') {
            document.getElementById('usernameError').innerHTML = 'Tên đăng nhập không được để trống';
            document.getElementById('usernameError').style.color = 'red';
            return false;
        }

        if (password.trim() === '') {
            document.getElementById('passwordError').innerHTML = 'Mật khẩu không được để trống';
            document.getElementById('passwordError').style.color = 'red';
            return false;
        }

            document.getElementById('loginForm').submit();
    }
</script>

