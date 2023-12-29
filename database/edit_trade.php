<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="飲料訂單系統｜112(上)資料庫概論期中作業">
        <meta name="keywords" content="飲料訂單系統,資料庫概論">
        <meta name="author" content="Howard">

        <!-- 標題 -->
        <title>飲料訂單系統｜112(上)資料庫概論</title>

        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="assets/plugins/DataTables/datatables.min.css" rel="stylesheet">
        <link href="assets/css/main.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

    </head>
    <body>

        <!-- 上方系統選單 -->
        <div class="page-container">
            <div class="page-header">
              <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                  <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                      <li class="nav-item">
                        <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../index.html">首頁</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../index.html#team">開發人員</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="final_report.pdf">書面報告</a>
                      </li>
                    </ul>
                  </div>
                    <div class="" id="headerNav">
                      <ul class="navbar-nav">
                      </ul>
                  </div>
              </nav>
            </div>

            <!-- 選單列 -->
            <div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                  <li class="sidebar-title">控制台</li>
                  <li>
                    <a href="index.html"><i data-feather="home"></i>儀表板</a>
                  </li>
                  <li class="sidebar-title">商品管理</li>

					<!-- 選單內的分類 -->
                  	<li>
                   		<a href="item_list.php"><i data-feather="box"></i>全部商品清單</a>
                  	</li>
                  	<li>
                    	<a href="item_edit.php"><i data-feather="box"></i>新增/刪除商品</a>
                  	</li>

				  <li class="sidebar-title">顧客管理</li>

					<!-- 選單內的分類 -->
                  	<li>
                   		<a href="customer_list.php"><i data-feather="box"></i>全部顧客資料</a>
                  	</li>
                  	<li>
                    	<a href="customer_edit.php"><i data-feather="box"></i>新增/刪除顧客</a>
                  	</li>

				  <li class="sidebar-title">訂單管理</li>

					<!-- 選單內的分類 -->
                  	<li>
                   		<a href="trade_list.php"><i data-feather="box"></i>全部訂單資料</a>
                  	</li>
                  	<li>
                    	<a href="trade_edit.php"><i data-feather="box"></i>新增/刪除訂單</a>
                  	</li>

                </ul>
            </div>
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">修改清單</h5>
                              <!-- <p>請輸入您需查詢的項目。</p> -->
                              <form action="" method="post" class="row g-3 needs-validation" novalidate>

								                <!-- 顧客全域搜尋（輸入編號、名稱） -->
                                <div class="col-md-6">
                                  <label for="all_customer_label" class="form-label">顧客更改資料（輸入編號、名稱）</label><br>
                                  <!-- 顧客編號<font color="red">*</font><input type="text" name="customer_number" class="form-control" id="all_customer_label" value="">
                                  顧客名稱<font color="red">*</font><input type="text" name="customer_name" class="form-control" id="all_customer_label" value="" > -->
                                  <!-- <div class="valid-feedback">
                                    輸入正確！
                                  </div> -->
                                  <?php
                                    if(isset($_GET["order_number"])){
                                        $order_number =$_GET["order_number"];
                                        // echo "$customer_number";
                                        // echo "$customer_name";

                                        if ($order_number != ""){
                                          
                                          $conn = mysqli_connect('localhost', '112dbb12', '6331-1633', "112dbb12");
                                          if (!$conn)
                                                  die("資料庫連線失敗: " . mysqli_connect_error());

                                          mysqli_query($conn, 'SET NAMES utf8');
                                          mysqli_query($conn, 'SET CHARACTER_SET_CLIENT=utf8');
                                          mysqli_query($conn, 'SET CHARACTER_SET_RESULTS=utf8');

                                          $sql = "select * from Trade where Order_Number = '$order_number'";
                                          $result = mysqli_query($conn, $sql);
                                          if(mysqli_num_rows($result) == 0)
                                                    echo "查無此資料";
                                          
                                          while ($row = mysqli_fetch_assoc($result)){
                                            echo "<form action='edit_trade.php' method='post'><tr>";
                                            echo "<label>訂單編號<font color='red'>*</font></label><br>";
                                            echo "<td>" . $row["Order_Number"] . "</td><br>";
                                            echo "<label>客戶編號<font color='red'>*</font></label><br>";
                                            echo "<td><input type='text' name='customer_number' value='" . $row["Customer_Number"] . "'></td><br>";
                                            echo "<label>訂單時間<font color='red'>*</font></label><br>";
                                            echo "<td><input type='text' name='time' value='" . $row["Order_time"] . "'></td><br>";
                                            echo "<td><input type='submit' value='更新'></td>";
                                            echo "</tr>";
                                            echo "</form>";
                                          }
                                          // UPDATE Items SET Items_Name = '咖咖咖啡', Items_Amount = 1000, Items_Price = 33 WHERE Items_Number = 222;
                                          $customer_number = $_POST["customer_number"];
                                          $time = $_POST["time"];
                                          $sql_update = "UPDATE Trade SET Customer_number = $customer_number, Order_time = '$time' WHERE Order_Number = $order_number";
                                          $result_update = mysqli_query($conn, $sql_update);

                                          if ($result_update) {
                                              echo "<table> <thead><tr>";
                                              echo "<td>#" . $order_number . "</td>";
                                              echo "<td>" . $customer_number . "</td>";
                                              echo "<td>" . $time . "</td>";
                                              echo "<td> 更新成功 ! </td> </tr>";
                                              echo "</thead> </table>";
                                          } 

                                      }
                                      // else
                                      //   echo "<td> 請提供商品編號及商品名稱 </td>";
                                    }


                                    ?>
                                </div>

                             	<!-- 查詢按鈕 -->
                                <!-- <div class="col-12">
                                  <button class="btn btn-primary" type="submit">立即查詢</button>
                                </div> -->

                              </form>
                          </div>
                      </div>
                    </div>
                    </div>
                </div>
                </div>
				</div>

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="assets/plugins/DataTables/datatables.min.js"></script>
        <script src="assets/js/main.min.js"></script>
        <script src="assets/js/pages/datatables.js"></script>
    </body>
</html>
