<img src="static/images/loginlogo.png" style="margin-top: 3.125rem;">
<div class="row justify-content-center">
    <div class="col-5">
        <div class="card bg-white">
            <div class="card-title">
            </div>
            <div class="defaultScreen">
                <div class="card-body">
                    <div class="text-left">
                        <h6><i class="fas fa-user"></i> 帳號</h6>
                        <input type="text" class="form-control mt-1 userId logininput" placeholder="請輸入E-mail信箱">
                        <h6 class="mt-2"><i class="fas fa-lock"></i> 密碼</h6>
                        <input type="password" class="form-control mt-1 userPassword logininput" placeholder="請輸入密碼">
                        <h6 class="mt-2"><i class="fas fa-lock"></i> 驗證碼（點擊圖片可換驗證碼）</h6>
                        <input type="text" class="form-control mt-1 checkcode logininput" placeholder="請輸入驗證碼">
                        <img src="captcha.php" class="mt-2 captcha">
                    </div>
                    <br>
                    <br>
                    <a class="btn text-center btn-info defaultSignup-btn" href="javascript:;"><i class="fas fa-user-plus"></i>帳號申請</a>
                </div>
            </div>
            <div class="defaultSignup">
                <div class="card-body">
                    <div class="text-left">
                        <h6><i class="fas fa-user"></i> 帳號</h6>
                        <input type="text" class="form-control mt-1 userId" placeholder="請輸入E-mail信箱">
                        <h6 class="mt-2"><i class="fas fa-lock"></i> 密碼</h6>
                        <input type="password" class="form-control mt-1 userPassword" placeholder="請輸入密碼">
                        <h6 class="mt-2"><i class="fas fa-phone"></i> 聯絡電話</h6>
                        <input type="text" class="form-control mt-1 phone" placeholder="請輸入電話號碼（可含分機）">
                        <h6 class="mt-2"><i class="fas fa-user"></i> 真實姓名</h6>
                        <input type="text" class="form-control mt-1 userName" placeholder="請輸入真實姓名">
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <div class="card-footer">
                <div class="login-footer">
                    <div class="text-right">
                        <a href="#" class="text-grey"><i class="fas fa-exclamation-circle"></i>忘記密碼</a>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="text-center">
                                <button class="btn btn-info btn-block login_btn">登入</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="signup-footer">
                    <div class="text-center">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <button class="btn btn-info btn-block back">返回</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-info btn-block signup-btn">確認送出</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>