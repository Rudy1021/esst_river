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
                            <th>項目</th>
                            <th>名稱</th>
                            <th>開始日期/結束日期</th>
                            <th>申請人</th>
                            <th>申請單位</th>
                            <th>審核狀態</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>序號</th>
                            <th>項目</th>
                            <th>名稱</th>
                            <th>開始日期/結束日期</th>
                            <th>申請人</th>
                            <th>申請單位</th>
                            <th>審核狀態</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>設燈</td>
                            <td>名稱</td>
                            <td>2020/07/01<br>~<br>2020/07/05</td>
                            <td>王小明</td>
                            <td>光明集團</td>
                            <td class="text-success">已通過</td>
                            <td>
                                <button class="btn btn-sm btn-info">詳情</button>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>設燈</td>
                            <td>路燈設置</td>
                            <td>2020/07/01<br>~<br>2020/07/05</td>
                            <td>王小明</td>
                            <td>光明集團</td>
                            <td class="text-danger">未通過</td>
                            <td>
                                <button class="btn btn-sm btn-info">詳情</button>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>設燈</td>
                            <td>名稱</td>
                            <td>2020/07/01<br>~<br>2020/07/05</td>
                            <td>王小明</td>
                            <td>光明集團</td>
                            <td>審核中</td>
                            <td>
                                <button class="btn btn-sm btn-info">詳情</button>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
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
                    <span>項目</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_type">
                </div>
                <div class="col-2 my-auto">
                    <span>名稱</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_title">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>開始日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_start_date">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>結束日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_end_date">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>內容說明</span>
                </div>
                <div class="col-3">
                    <textarea class="form-control" id="ru_content"></textarea>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>申請人</span>
                </div>
                <div class="col-3">
                <input type="text" class="form-control" id="ru_apply_id">
                </div>
                <div class="col-2 my-auto">
                    <span>申請單位</span>
                </div>
                <div class="col-3">
                <input type="text" class="form-control" id="ru_apply_unit">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>說明圖</span>
                </div>
                <div class="col-3">
                    <input type="file" id="ru_filename">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>審核狀態</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_status">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>審核日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_check_time">
                </div>
                <div class="col-2 my-auto">
                    <span>審核人</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_id">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>退件原因</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ru_reason">
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
</div>
<?php
include("footer.php");
?>