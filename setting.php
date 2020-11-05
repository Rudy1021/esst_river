<?php
include("header.php");
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4 table-list">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="display: inline;">里程資訊管理</h6>
            <div class="btn-group float-right">
            <button class=" btn btn-primary btn-new">新增</button>
            <button class="btn btn-primary export">匯出</button>
          </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>序號</th>
                            <th>代碼</th>
                            <th>身份</th>
                            <th>單位名稱</th>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>電子郵件</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>序號</th>
                            <th>代碼</th>
                            <th>身份</th>
                            <th>單位名稱</th>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>電子郵件</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0000</td>
                            <td>最高權限使用者</td>
                            <td>雙欣科技</td>
                            <td>雙欣科技</td>
                            <td>07-522-5556</td>
                            <td>esst_service@esst.com.tw</td>
                            <td>
                                <button class="btn btn-sm btn-info">詳情</button>
                                <button class="btn btn-sm btn-warning">編輯權限</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4 new-page">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-table">新增資料至資料庫</h6>
      </div>
      <div class="card-body">
          <div class="row">
                <div class="col-2 my-auto">
                    <span>代碼</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_code">
                </div>
                <div class="col-2 my-auto">
                    <span>身份</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_type" disabled>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>單位名稱</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_unit">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>姓名</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_name">
                </div>
                <div class="col-2 my-auto">
                    <span>電話</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_tel">
                </div>
          </div>
            <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>電子郵件</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_mail">
                </div>
            </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>密碼</span>
                </div>
                <div class="col-3">
                <input type="password" class="form-control" id="account_pw">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>帳號狀態</span>
                </div>
                <div class="col-3">
                    <input type="file" id="caccount_status">
                </div>
                <div class="col-2 my-auto">
                    <span>建立時間</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_build_time">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>最新一次登入IP</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_ip">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>最後一次登入日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_login_time">
                </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-11 text-center">
                  <button class="btn btn-success" id="new-submit">
                      送出
                  </button>
                  <button class="btn btn-danger" id="back">
                      返回
                  </button>
              </div>
            </div>
          </div>
          <br>
      </div>
    </div>
    <div class="card shadow mb-4 edit-page">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-table">編輯權限</h6>
      </div>
      <div class="card-body">
          <div class="row">
                <div class="col-2 my-auto">
                    <span>帳號狀態</span>
                </div>
                <div class="col-3">
                    <input type="radio" name="accountStat" val="true" checked>
                    <label for="true">啟用</label>
                    <input type="radio" name="accountStat" val="false">
                    <label for="false">停用</label>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>里程資訊管理</span>
                </div>
                <div class="col-3">
                    <label class="switch">
                        <input type="checkbox" id="mileage">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-3 permission">
                    <input type="checkbox" val="edit">
                    <label for="edit">編輯</label>
                    <input type="checkbox" val="del">
                    <label for=""del">刪除</label>
                    <input type="checkbox" val="create">
                    <label for=""create">新增</label>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>財產資訊管理</span>
                </div>
                <div class="col-3">
                    <label class="switch">
                        <input type="checkbox" id="property">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-3 permission">
                    <input type="checkbox" val="edit">
                    <label for="edit">編輯</label>
                    <input type="checkbox" val="del">
                    <label for=""del">刪除</label>
                    <input type="checkbox" val="create">
                    <label for=""create">新增</label>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>維護巡查歷程管理</span>
                </div>
                <div class="col-3">
                    <label class="switch">
                        <input type="checkbox" id="fix">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-3 permission">
                    <input type="checkbox" val="edit">
                    <label for="edit">編輯</label>
                    <input type="checkbox" val="del">
                    <label for=""del">刪除</label>
                    <input type="checkbox" val="create">
                    <label for=""create">新增</label>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>移交工程資料管理</span>
                </div>
                <div class="col-3">
                    <label class="switch">
                        <input type="checkbox" id="change">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-3 permission">
                    <input type="checkbox" val="edit">
                    <label for="edit">編輯</label>
                    <input type="checkbox" val="del">
                    <label for=""del">刪除</label>
                    <input type="checkbox" val="create">
                    <label for=""create">新增</label>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>河川工地使用管理</span>
                </div>
                <div class="col-3">
                    <label class="switch">
                        <input type="checkbox" id="const">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-3 permission">
                <input type="checkbox" val="edit">
                    <label for="edit">編輯</label>
                    <input type="checkbox" val="del">
                    <label for=""del">刪除</label>
                    <input type="checkbox" val="create">
                    <label for=""create">新增</label>
                </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-11 text-center">
                  <button class="btn btn-success" id="edit-submit">
                      更新
                  </button>
                  <button class="btn btn-danger back">
                      返回
                  </button>
              </div>
            </div>
          </div>
          <br>
      </div>
    </div>
</div>
<?php
include("footer.php");
?>