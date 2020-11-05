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
                            <th>財產序號</th>
                            <th>財產名稱</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>財產序號</th>
                            <th>財產名稱</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>喬木</td>
                            <td>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>電線桿</td>
                            <td>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>告示牌</td>
                            <td>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>路燈</td>
                            <td>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>監視器</td>
                            <td>
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
              <div class="col-2">
                <span>序號</span>
              </div>
              <div class="col-3">
                  <input type="text" class="form-control" id="num">
              </div>
          </div>
          <div class="row mt-3">
            <div class="col-2">
              <span>財產名稱</span>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" id="pc_title">
            </div>
        </div>
        <div class="row mt-3">
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
</div>