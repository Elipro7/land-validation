<?php include ('header.php'); ?>

<div class="content-page">
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h4 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Land Titles</h4>
                                <h5 class="my-2 py-1">9,184</h5>
                                <p class="mb-0 text-muted">
                                    <a href="block-title" >view more </a>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h4 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Sales</h4>
                                <h5 class="my-2 py-1">3,254</h5>
                                <p class="mb-0 text-muted">
                                    <a href="sales">view more </a>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h4 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Investors</h4>
                                <h5 class="my-2 py-1">861</h5>
                                <p class="mb-0 text-muted">
                                    <a href="investors">view more </a>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h4 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Land Issues</h4>
                                <h5 class="my-2 py-1">$253k</h5>
                                <p class="mb-0 text-muted">
                                    <a href="land_issues">view more </a>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
</div> <!-- content -->
<?php include ('footer.php'); ?>
