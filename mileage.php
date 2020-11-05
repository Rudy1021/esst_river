<?php
include("header.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $_POST['mi_river_title'];
}

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
                            <th>河川名稱</th>
                            <th>提防名稱</th>
                            <th>經度</th>
                            <th>緯度</th>
                            <th>界分區標</th>
                            <th>建檔人</th>
                            <th>更新紀錄</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>序號</th>
                            <th>河川名稱</th>
                            <th>提防名稱</th>
                            <th>經度</th>
                            <th>緯度</th>
                            <th>界分區標</th>
                            <th>建檔人</th>
                            <th>更新紀錄</th>
                            <th>操作</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            require_once("static/modals/mysqli_new.php");
                            $db = new DB();
                            $mi = $db->execute("select * from mileage_info");
                           
                            foreach($mi as $value){
                                $ac = $db->execute("select * from accounts where account_token ='".$value['account_token']."'");
                                
                                echo "<tr>";
                                echo "<td>".$value['mi_id']."</td>";
                                echo "<td>".$value['mi_river_title']."</td>";
                                echo "<td>".$value['mi_embankment_title']."</td>";
                                echo "<td>".$value['mi_twd97_x']."</td>";
                                echo "<td>".$value['mi_twd97_y']."</td>";
                                echo "<td>".$value['mi_marker']."</td>";
                                echo "<td>".$ac[0]["account_name"]."</td>";
                                echo "<td><span class='text-grey'>". $value['mi_build_time'] . "</span><br>". $value['mi_change_time'] ."</td>";
                                echo "<td>";
                                echo "<button class='btn btn-sm btn-info'>詳情</button>";
                                echo "<button class='btn btn-sm btn-warning'>編輯</button>";
                                echo "<button class='btn btn-sm btn-danger'>刪除</button>";
                                echo "<br>";
                                echo "<br>";
                                echo "<span>自由瀏覽權限</span>";
                                echo "<br>";
                                echo "<span>是</span>";
                                echo "</td>";
                                echo "</tr>";

                            }
                        ?>
                        <tr>
                            <td>1</td>
                            <td>雙雙河</td>
                            <td>X堤防</td>
                            <td>22.6756239</td>
                            <td>120.2865373</td>
                            <td>某某橋</td>
                            <td>張先生</td>
                            <td><span class="text-grey">建檔時間:2020/08/05</span><br>更新日期:2020/08/08</td>
                            <td>
                                <button class="btn btn-sm btn-info">詳情</button>
                                <button class="btn btn-sm btn-warning">編輯</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                                <br>
                                <br>
                                <span>自由瀏覽權限</span>
                                <br>
                                <span>是</span>
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
                    <span>河川名稱</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_river_title">
                </div>
                <div class="col-2 my-auto">
                    <span>堤防名稱與測點</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_embankment_title">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>TWD97 X座標</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_twd97_x">
                </div>
                <div class="col-2 my-auto">
                    <span>TWD97 Y座標</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_twd97_y">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>Google經度</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_google_x">
                </div>
                <div class="col-2 my-auto">
                    <span>Google緯度</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_google_y">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>其他</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_other">
                </div>
                <div class="col-2 my-auto">
                    <span>建物標</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_building">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>備註</span>
                </div>
                <div class="col-3">
                <textarea class="form-control" id="mi_desc"></textarea>
                </div>
                <div class="col-2 my-auto">
                    <span>界分區標</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_marker">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>建立時間</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_build_time">
                </div>
          </div>
          <div class="row mt-3">
                <div class="col-2 my-auto">
                    <span>最後一次修改時間</span>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="mi_change_time">
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
          <div class="row mt-3">
          <div class="col-2 my-auto">
                    <span>自由閱覽權限</span>
                </div>
                <div class="col-3">
                    <label class="switch">
                        <input type="checkbox" id="mi_open">
                        <span class="slider round"></span>
                    </label>
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