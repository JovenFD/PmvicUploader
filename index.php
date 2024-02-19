<?php @include "header.php" ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
    <h4 class="text-white mt-2">AC PMVIC UPLOADER</h4>
</nav>

<div class="container-fluid mt-3 pt-2 text-white">

    <div class="row">
        <div class="col-md-6">
            <div class="bg-dark card c-box p-3">
                <div class="card-body">
                    <div class="c-boxex-text">
                        <span class="c-conter" id="totalUp"></span>
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <span class="c-title">Total Uploaded</span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-dark card c-box p-3">
                <div class="card-body">
                    <div class="c-boxex-text">
                        <span class="c-conter" id="totalTodayUp"></span>
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <span class="c-title">Uploaded Today</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 c-body mb-5">
        <div class="col-md-4">
            <div class="bg-dark card c-box">
                <div class="card-body c-tbl">
                    <p><span class="p-title">Monitoring Data</span></p>
                    <div class="single-chart" id="chartContainer">
                        <svg viewBox="0 0 36 36" class="circular-chart blue">
                            <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="circle" id="progressPath" stroke-dasharray="0, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <text x="18" y="20.35" class="percentage" id="percentageText">0%</text>
                        </svg>
                    </div>
                    <center>
                        <p>Plate No. <br>
                            <hr><span id="plateno">Loading...</span>
                        </p>
                    </center>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="bg-dark card c-box">
                <div class="card-body c-tbl p-4">
                    <p><span class="p-title">Uploaded List</span></p>
                    <br>
                    <table id="tbl_uploader" class="table table-bordered table-responsive text-white text-center">
                        <thead>
                            <tr>
                                <th class="text-center">PLATE_NO</th>
                                <th class="text-center">MV_FILE_NO</th>
                                <th class="text-center">ENGINE_NO</th>
                                <th class="text-center">CHASSIS_NO.</th>
                                <th class="text-center">MVIRS.</th>
                                <th class="text-center">UPLOADED</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php @include "footer.php" ?>