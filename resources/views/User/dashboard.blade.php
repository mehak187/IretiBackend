<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Dashboard</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid px-3 px-md-5 pb-5">
                        <div class="row">
                            <div class="col-lg-6 col-xxl-3 mt-3">
                                <div class="lgreen p-4 rounded-4 h-100">
                                    <p class="mb-0">Total Live Orders</p>
                                    <div class="d-flex">
                                        <p class="mb-0"><span class="fs-3 font-semi me-2">5</span>MTM</p>
                                    </div>
                                    <div class="text-center lime py-1 mt-2 rounded-pill">
                                        <p class="mb-0 ex-small">
                                            <span>+25% <i class="fa-solid mx-1 text-success fa-arrow-up"></i></span>
                                            Order Last Month
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xxl-3 mt-3">
                                <div class="lgreen p-4 rounded-4 h-100">
                                    <p class="mb-0">Total Filled Orders</p>
                                    <div class="d-flex">
                                        <p class="mb-0"><span class="fs-3 font-semi me-2">2,985.670.00</span>USD</p>
                                    </div>
                                    <div class="text-center lime py-1 mt-2 rounded-pill">
                                        <p class="mb-0 ex-small">
                                            <span>-25% <i class="fa-solid mx-1 text-danger fa-arrow-down"></i></span>
                                            Last Month payments
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 mt-3">
                                <div class="green p-4 text-white rounded-4 h-100">
                                    <p class="mb-0 font-bold fs-2">13,188,200.00 USD</p>
                                    <p class="mb-0 font-bold fs-5">Total Executed YTD</p>

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="chardiv p-3 p-md-5">
                                <p class="mb-0 font-bold mb-3 fs-3 ">Yearly View</p>
                                <div class="col-12 d-flex justify-content-center">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="chardiv p-3 p-md-5">
                                <p class="mb-0 font-bold mb-3 fs-3 ">My Orders</p>
                                <div class="table-responsive">
                                    <table class="table dashtbl">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Buy</th>
                                                <th>Sell</th>
                                                <th>Order Date</th>
                                                <th>Executed Date</th>
                                                <th>Price Target</th>
                                                <th>Filled</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>
                                                    <div>
                                                        <p class="mb-0 font-semi">Soft Commodities</p>
                                                        <p class="mb-0">Cooking oil</p>
                                                    </div>
                                                </td>
                                                <td>$2500</td>
                                                <td>$3200</td>
                                                <td>20 March 2024</td>
                                                <td>26 March 2024</td>
                                                <td>$4500</td>
                                                <td>
                                                    <button class="btnred">
                                                        No
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div>
                                                        <p class="mb-0 font-semi">Soft Commodities</p>
                                                        <p class="mb-0">Cooking oil</p>
                                                    </div>
                                                </td>
                                                <td>$2500</td>
                                                <td>$3200</td>
                                                <td>20 March 2024</td>
                                                <td>26 March 2024</td>
                                                <td>$4500</td>
                                                <td>
                                                    <button class="btngreen">
                                                        Yes
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div>
                                                        <p class="mb-0 font-semi">Soft Commodities</p>
                                                        <p class="mb-0">Cooking oil</p>
                                                    </div>
                                                </td>
                                                <td>$2500</td>
                                                <td>$3200</td>
                                                <td>20 March 2024</td>
                                                <td>26 March 2024</td>
                                                <td>$4500</td>
                                                <td>
                                                    <button class="btngreen">
                                                        Yes
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="ftr text-center">
                    <p class="mb-0 text-muted">©2024 Ireti Capital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    @include('../Template.jslinks')
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Dataset 1',
                borderColor: '#AA7D09',
                data: [21, 23, 24, 27, 29, 31, 29, 27, 25, 23, 21, 25,],
                tension: 0.4
            }, {
                label: 'Dataset 2',
                borderColor: '#7AC231',
                data: [22, 24, 21, 28, 30, 28, 26, 24, 22, 26, 24, 28,],
                tension: 0.4
            }]
        };
        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                stacked: false,
                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        grid: {
                            drawOnChartArea: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                },
            },
        };
        new Chart(ctx, config);
    </script>
</body>

</html>