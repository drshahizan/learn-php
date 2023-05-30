<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-19 Testing Management System | Add Phlebotomist</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        label {
            font-size: 16px;
            font-weight: bold;
            color: #000;
        }
    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once('includes/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('includes/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Test Details# <?php echo intval($_GET['oid']); ?></h1>
                    <div class="row">
                        <?php
                        $testid = intval($_GET['tid']);
                        $query = mysqli_query($con, "select * from tbltestrecord
join tblpatients on tblpatients.MobileNumber=tbltestrecord.PatientMobileNumber
where  tbltestrecord.id='$testid'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <!-- personal information --->
                            <div class="col-lg-6">

                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <tr>
                                                <th>Full Name</th>
                                                <td><?php echo $row['FullName']; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Phone Number</th>
                                                <td><?php echo $row['MobileNumber']; ?></td>
                                            </tr>

                                            <tr>
                                                <th>E-mail</th>
                                                <td><?php echo $row['Email']; ?></td>
                                            </tr>


                                            <!--<tr>
                                                <th>Govt Issued Id</th>
                                                <td><?php echo $row['GovtIssuedId']; ?></td>
                                            </tr>


                                            <tr>
                                                <th>Govt Issued Id No</th>
                                                <td><?php echo $row['GovtIssuedIdNo']; ?></td>
                                            </tr>-->


                                            <tr>
                                                <th>Full Address</th>
                                                <td><?php echo $row['FullAddress']; ?></td>
                                            </tr>

                                            <tr>
                                                <th>State</th>
                                                <td><?php echo $row['State']; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Profile Reg Date</th>
                                                <td><?php echo $row['RegistrationDate']; ?></td>
                                            </tr>
                                        </table>



                                    </div>
                                </div>
                            </div>

                            <!-- Test Information --->
                            <div class="col-lg-6">

                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Screening Test Information</h6>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <tr>
                                                <th>Order Number</th>
                                                <td><?php echo $row['OrderNumber']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Location</th>
                                                <td><?php echo $row['Location']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Test Type</th>
                                                <td><?php echo $row['TestType']; ?></td>
                                            </tr>


                                            <tr>
                                                <th>Time Slot</th>
                                                <td><?php echo $row['TestTimeSlot']; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Report Status</th>
                                                <td><?php if ($row['ReportStatus'] == '') :
                                                        echo "Not Processed yet";
                                                    else :
                                                        echo $row['ReportStatus'];
                                                    endif;

                                                    ?></td>
                                            </tr>


                                            <?php if ($row['AssignedtoEmpId'] != '') : ?>
                                                <tr>
                                                    <th>Assign To</th>
                                                    <td><?php echo $row['AssigntoName']; ?>-(<?php echo $row['AssignedtoEmpId']; ?>)</td>
                                                </tr>

                                                <tr>
                                                    <th>Assigned Date</th>
                                                    <td><?php echo $row['AssignedTime']; ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if ($row['FinalReport'] != '') : ?>
                                                <tr>
                                                    <th>Report</th>
                                                    <td><a href="reportfiles/<?php echo $row['FinalReport']; ?>" target="_blank">Download</a></td>
                                                </tr>

                                                <tr>
                                                    <th>Report Delivered Time</th>
                                                    <td><?php echo $row['ReportUploadTime']; ?></td>
                                                </tr>
                                            <?php endif; ?>

                                        </table>


                                    </div>
                                </div>

                            </div>
                    </div>
                <?php } ?>


                <!-- Test Tracking History --->
                <?php
                $orderid = intval($_GET['oid']);
                $ret = mysqli_query($con, "select * from tblreporttracking
join tbladmin on tbladmin.ID=tblreporttracking.RemarkBy
where tblreporttracking.OrderNumber='$orderid'");
                $num = mysqli_num_rows($ret);
                ?>

                <div class="row">
                    <div class="col-lg-12">

                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary" align="center">Test Tracking History</h6>
                            </div>
                            <div class="card-body">
                                <?php if ($num > 0) {
                                ?>
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <tr>
                                            <th>Remark</th>
                                            <th>Status</th>
                                            <th>Remark Date</th>
                                            <th>Remark By</th>
                                            <?php while ($result = mysqli_fetch_array($ret)) { ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo $result['Remark']; ?></td>
                                            <td><?php echo $result['Status']; ?></td>
                                            <td><?php echo $result['PostingTime']; ?></td>
                                            <td><?php echo $result['AdminName']; ?></td>
                                        </tr>

                                    <?php } // End while loop
                                    ?>

                                    </table>
                                <?php
                                    //end if   
                                } else { ?>
                                    <h4 align="center" style="color:red"> No Tracking history found </h4>
                                <?php } ?>


                            </div>
                        </div>

                    </div>
                </div>

                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include_once('includes/footer.php'); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        //For report file
        $('#reportfile').hide();
        $(document).ready(function() {
            $('#status').change(function() {
                if ($('#status').val() == 'Delivered') {
                    $('#reportfile').show();
                    jQuery("#report").prop('required', true);
                } else {
                    $('#reportfile').hide();
                }
            })
        })
    </script>
</body>

</html>