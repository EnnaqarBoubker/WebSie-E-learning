<?php
    $payment = array (
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'Payment Schedule' => 'First', 'Bill Number' => '00012223', 'Amount Paid' => 'DHS 100,000', 'Balance amount' => 'DHS 500,000', 'Date' => '05-Jan, 2022', 'icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'),
    );

   
?>

            <?php
                include 'breif-php/sidebar.php'; 
                include 'breif-php/nav.php';
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                        <?php  
                                            foreach ($payment as $P) {
                                        ?> 

                                    <tr class="bg-withe">
                                        <td class="align-middle"><?php echo $P ['Name']; ?></td>
                                        <td class="align-middle"><?php echo $P ['Payment Schedule']; ?></td>
                                        <td class="align-middle"><?php echo $P ['Bill Number']; ?></td>
                                        <td class="align-middle"><?php echo $P ['Amount Paid']; ?></td>
                                        <td class="align-middle"><?php echo $P ['Balance amount']; ?></td>
                                        <td class="align-middle"><?php echo $P ['Date']; ?></td>
                                        <td class="align-middle"><a class="fs-5 text-decoration-none" title="See"><?php echo $P ['icon']; ?></a></td>
                                    </tr> 
                                    
                                    <?php  };?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./css/bootstrap.bundle.min.js"></script>
</body>

</html>