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
                  <li><a href="index.html"><i data-feather="home"></i>儀表板</a></li>
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
                  	<li class="active-page">
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
                              <h5 class="card-title">新增一筆訂單</h5>
                              <p>請輸入要新增的訂單資料。</p>
                              <form action="trade_edit.php" method="post" class="row g-3 needs-validation" novalidate>

								<!-- 商品編號 -->
                                <div class="col-md-1">
                                  <label for="customer_number_label" class="form-label">顧客編號<font color="red">*</font></label>
                                  <input type="text" name ="customer_number" class="form-control" id="customer_number_label" value="" required>
                                  <div class="valid-feedback">
                                    輸入正確！
                                  </div>
                                </div>

								<!-- 商品名稱 -->
                                <div class="col-md-2">
                                  <label for="items_name_label" class="form-label">訂單編號<font color="red">*</font></label>
                                  <input type="text" name="order_number" class="form-control" id="items_name_label" value="" required>
                                  <div class="valid-feedback">
                                    輸入正確！
                                  </div>
                                </div>

                <!-- 商品數量 -->
                                <div class="col-md-3">
                                  <label for="total_amount_label" class="form-label">訂單時間<font color="red">*</font></label>
                                  <input type="text" name="order_time" class="form-control" id="total_amount_label" value="" required>
                                  <div class="valid-feedback">
                                    輸入正確！
                                  </div>
                                </div>

                             	<!-- 查詢按鈕 -->
                                <div class="col-12">
                                  <button class="btn btn-primary" type="submit">新增至資料庫</button>
                                </div>

                              </form>
                          </div>
                      </div>

                      <!-- START 刪除區域 START -->

                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">刪除一筆資料</h5>
                              <p>請輸入要刪除的商品編號。</p>
                              <form action="trade_edit.php" method="post" class="row g-3 needs-validation" novalidate>

								<!-- 商品編號 -->
                                <div class="col-md-1">
                                  <label for="items_number_label" class="form-label">訂單編號<font color="red">*</font></label>
                                  <input type="text" name ="delete_number" class="form-control" id="items_number_label" value="" required>
                                  <div class="valid-feedback">
                                    輸入正確！
                                  </div>
                                </div>
                             	<!-- 查詢按鈕 -->
                                <div class="col-12">
                                  <button class="btn btn-primary" type="submit">資料庫中刪除</button>
                                </div>

                              </form>
                          </div>
                          </div>


                 <!-- END 刪除區域 END -->


                  <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">以下是您查詢的結果</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                      <!--欄位名稱-->
                                                          <tr>
                                                              <th>顧客編號</th>
                                                              <th>訂單編號</th>
                                                              <th>訂單時間</th>
                                                              <th>動作</th>
                                                              <th>狀態</th>
                                                              <!-- <th>訂購的商品 Items Name</th>
                                                              <th>訂單總額 Total Amount</th> -->
                                                          </tr>
                                                      </thead>
                                                      <tbody>

                                      <!--欄位內容-->
                                                          <tr>
                                                            <td>#範例</td>
                                                            <td>555</td>
                                                            <td>2023-10-10 10:10:10</td>

                                                          </tr>
                                                          <?php
                                                            if(isset($_POST["customer_number"]) && isset($_POST["order_number"]) && isset($_POST["order_time"])){

                                                              $customer_number = $_POST["customer_number"];
                                                              $order_number = $_POST["order_number"];
                                                              $order_time = $_POST["order_time"];

                                                              if ($customer_number != "" && $order_number != "" && $order_time != ""){
                                                                $conn = mysqli_connect('localhost', '112dbb12', '6331-1633', "112dbb12");
                                                                mysqli_query($conn, 'SET NAMES utf8');
                                                                mysqli_query($conn, 'SET CHARACTER_SET_CLIENT=utf8');
                                                                mysqli_query($conn, 'SET CHARACTER_SET_RESULTS=utf8');

                                                                $sql_check = "SELECT * FROM Trade WHERE Customer_Number = '$customer_number' AND Order_Number = '$order_number'";
                                                                $result_check = mysqli_query($conn, $sql_check);

                                                                if(mysqli_num_rows($result_check) > 0){echo "<td> 相同訂單資訊已存在 </td>";}
                                                                else{
                                                                  $sql_insert = "INSERT INTO Trade (Customer_Number, Order_Number, Order_time) VALUES ('$customer_number', '$order_number', '$order_time')";
                                                                  $result_insert = mysqli_query($conn, $sql_insert);

                                                                  if($result_insert){
                                                                    echo "<td>#" .$customer_number . "</td>";
                                                                    echo "<td>" .$order_number . "</td>"; 
                                                                    echo "<td>" . $order_time . "</td>";
                                                                    echo "<td> <a href='edit_trade.php?order_number=" . $order_number . "' class='btn btn-warning'>修改</a> </td>";
                                                                    echo "<td> 新增成功 ! </td>"; 
                                                                  }
                                                                  else 
                                                                    echo "<td> 商品新增失敗：" . mysqli_error($conn) . "</td>";
                                                                }
                                                              }
                                                            }
                                                            if(isset($_POST["delete_number"])){
                                                              $delete_number = $_POST["delete_number"];
                                                              if($delete_number != ""){
                                                                $conn = mysqli_connect('localhost', '112dbb12', '6331-1633', "112dbb12");
                                                                mysqli_query($conn, 'SET NAMES utf8');
                                                                mysqli_query($conn, 'SET CHARACTER_SET_CLIENT=utf8');
                                                                mysqli_query($conn, 'SET CHARACTER_SET_RESULTS=utf8');
            
                                                                $sql_check = "SELECT * FROM Trade WHERE Customer_Number = '$delete_number'";
                                                                $result_check = mysqli_query($conn, $sql_check);
                                                                if(mysqli_num_rows($result_check) <= 0){echo "<td> 找不到商品 </td>";}
                                                                else{
                                                                  $sql_insert = "DELETE FROM Trade WHERE Customer_Number = '$delete_number'";
                                                                  $result_insert = mysqli_query($conn, $sql_insert);
                                                                  if($result_insert){
                                                                    echo "<tr>";
                                                                    echo "<td> 該產品刪除成功 ! </td> </tr>";
                                                                  }
                                                                  else
                                                                    echo "<td> 商品刪除失敗". mysqli_error($conn). "</td>";
                                                                }
                                                              }
                                                            }
                                                          ?>
								</tbody>
                              </table>
					</div>
                    </div>
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
