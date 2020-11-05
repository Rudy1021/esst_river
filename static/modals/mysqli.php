<?php
class DB
{
  public $dbServer = "localhost";  //主機IP
  public $dbName   = "wra";    //資料庫名稱
  public $dbUser   = "root";    //帳號
  public $dbPswd   = "";           //密碼
  public $dbconn   = "";           //Connection

  //建立DB連線
  function dbConn()
  {
    $conn = mysqli_connect($this->dbServer, $this->dbUser, $this->dbPswd, $this->dbName);
    return $conn;
  }
  //查詢指令
  function dbQuery($conn, $sqlstr = "")
  {
    mysqli_query($conn, "SET NAMES UTF8");
    $result = mysqli_query($conn, $sqlstr);
    return $result;
  }

  //返回陣列資料
  function dbFetchArray($rst)
  {
    $array = mysqli_fetch_array($rst);
    return $array;
  }

#拿取全部資料
  function dbFetchAll($rst)
  {
    $array = mysqli_fetch_all($rst);
    return $array;
  }
  //返回該行資料
  function dbFetchRow($rst)
  {
    $row = mysqli_fetch_row($rst);
    return $row;
  }

  //返回查詢結果的資料數量
  function dbrownums($rst)
  {
    $rownums = mysqli_num_rows($rst);
    return $rownums;
  }

  //關閉DB連線
  function dbClose()
  {
    mysqli_close($this->dbconn);
  }
}
