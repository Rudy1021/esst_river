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
                            <th>案件代號</th>
                            <th>工作類型</th>
                            <th>工作名稱</th>
                            <th>開始時間</th>
                            <th>結束時間</th>
                            <th>建檔人</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>案件代號</th>
                            <th>工作類型</th>
                            <th>工作名稱</th>
                            <th>開始時間</th>
                            <th>結束時間</th>
                            <th>建檔人</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>109A001</td>
                            <td>定期維護</td>
                            <td>第65次河川維護工程</td>
                            <td>2020/07/23<br>15:00</td>
                            <td>2020/07/23<br>17:00</td>
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
                    <span>案件代號</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="caseNumber">
                </div>
                <div class="col-2 my-auto">
                    <span>建檔人</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="userName">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>工作類型</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ph_type_id">
                </div>
                <div class="col-2 my-auto">
                    <span>工作名稱</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ph_title">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>開始時間</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ph_start_date">
                </div>
                <div class="col-2 my-auto">
                    <span>結束時間</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ph_end_date">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>相關照片</span>
                </div>
                <div class="col-3">
                    <input type="file" id="ph_filename">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>內容描述</span>
                </div>
                <div class="col-3">
                <textarea class="form-control" id="ph_content"></textarea>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>備註</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ph_desc">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>建檔日期</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="ph_build_time">
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