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
                            <th>財產分類</th>
                            <th>編號</th>
                            <th>名稱</th>
                            <th>年份</th>
                            <th>數量</th>
                            <th>建檔人</th>
                            <th>更新紀錄</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>序號</th>
                            <th>財產分類</th>
                            <th>編號</th>
                            <th>名稱</th>
                            <th>年份</th>
                            <th>數量</th>
                            <th>建檔人</th>
                            <th>更新紀錄</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>電線杆</td>
                            <td>A1</td>
                            <td>電線桿A1</td>
                            <td>2008</td>
                            <td>1</td>
                            <td>張小明</td>
                            <td><span class="text-grey">建檔時間:2008/12/10</span><br>更新日期:2008/12/12</td>
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
                    <span>財產分類</span>
                </div>
                <div class="col-3">
                    <select class="form-control" id="item">
                        <option>電線杆</option>
                        <option>告示牌</option>
                        <option>路燈</option>
                        <option>監視器</option>
                    </select>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>編號</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_number">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>名稱</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_title">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>年份</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_year">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>標案編號</span>
                </div>
                <div class="col-3">
                <input type="text" class="form-control" id="pi_bid_number">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>是否為群組</span>
                </div>
                <div class="col-3">
                    <input type="radio" name="pi_group" value="Y" checked>
                    <label for="Y">是</label>
                    <input type="radio" name="pi_group" value="N">
                    <label for="N">否</label>
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>財產數量</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_num">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>預估位置</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_estimate_position">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>正確位置</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_correct_position">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>圖檔</span>
                </div>
                <div class="col-3">
                    <input type="file" id="pi_filename">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>備註</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="pi_desc">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>建檔時間</span>
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