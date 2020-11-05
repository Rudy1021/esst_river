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
                            <th>年度</th>
                            <th>工程名稱</th>
                            <th>測點範圍</th>
                            <th>移交單位</th>
                            <th>移交日期</th>
                            <th>建檔人</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>序號</th>
                            <th>年度</th>
                            <th>工程名稱</th>
                            <th>測點範圍</th>
                            <th>移交單位</th>
                            <th>移交日期</th>
                            <th>建檔人</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>109</td>
                            <td>下游道路修復工程</td>
                            <td>1069A</td>
                            <td>小胖公司</td>
                            <td>2020/07/23</td>
                            <td>張小明</td>
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
                    <span>序號</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="number" disabled>
                </div>
                <div class="col-2 my-auto">
                    <span>年度</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_year">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>工程名稱</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_title">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>測點範圍</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_range">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>移交單位</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_unit">
                </div>
                <div class="col-2 my-auto">
                    <span>移交日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_date">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>工程圖或竣工圖</span>
                </div>
                <div class="col-3">
                <input type="file" id="dtp_filename">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>CAD參考圖</span>
                </div>
                <div class="col-3">
                    <input type="file" id="tp_CAD">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>保固工程</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_warranty">
                </div>
                <div class="col-2 my-auto">
                    <span>保固日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_warranty_date">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>備註</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="tp_desc">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>建立日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_build_time">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>建檔人</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="account_id">
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