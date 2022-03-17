<?php

session_start();
if(!$_SESSION['email']){
     header('location:index.php') ;
}
                include './breif-php/conndb.php';
                
                include './breif-php/head.php';
                include './breif-php/sidebar.php'; 
                include './breif-php/header.php';
            ?>

                <div class="container mt-3 bg-withe">
                    <div class="row ">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="col col-xs-6 d-flex justify-content-between align-items-center mt-4 me-3">
                                <p class="panel-title fw-bolder fs-5">Payment Details</p>
                            </div>
                            <div class="col col-xs-6 text-right d-flex justify-content-end align-items-center">
                                <div class=" row fs-5 h-25">
                                    <i class="fa fa-sort-asc " aria-hidden="true"></i>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class=" height table-responsive">
                            <table class="table table-borderless">
                                <thead class="text-color fs-6 fw-normal">
                                    <tr>
                                        <th>Name</th>
                                        <th>Payment Schedule</th>
                                        <th>Bill Number</th>
                                        <th>Amount Paid</th>
                                        <th>Balance amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">

                                        <?php  
                                            $sql = "SELECT * FROM paye";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if($result) {
                                                // while($row = mysqli_fetch_assoc($result)){ 
                                                foreach($result as $row){
                                                    $name    = $row['name'];
                                                    $paye    = $row['payement'];
                                                    $number  = $row['number'];
                                                    $amount  = $row['amount'];
                                                    $balance = $row['balance'];
                                                    $date    = $row['datepay'];
                                        ?> 

                                    <tr class="bg-withe">
                                        <td class="align-middle"><?php echo $row ['name']; ?></td>
                                        <td class="align-middle"><?php echo $row ['payement']; ?></td>
                                        <td class="align-middle"><?php echo $row ['number']; ?></td>
                                        <td class="align-middle"><?php echo $row ['amount']; ?></td>
                                        <td class="align-middle"><?php echo $row ['balance']; ?></td>
                                        <td class="align-middle"><?php echo $row ['datepay']; ?></td>
                                        <td class="align-middle">
                                            <a class="fs-5 text-decoration-none" title="See">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr> 
                                    
                                    <?php  }
                                    };?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include './breif-php/footre.php';
   ?>