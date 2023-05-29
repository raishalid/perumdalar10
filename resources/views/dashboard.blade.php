<x-app-layout>

    {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"> --}}
    {{-- <h1 class="text-lg font-medium text-gray-900 dark:text-gray-100">Dashboard</h1> --}}
    {{-- <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lengkapi data keagenan anda.</p> --}}
    {{-- @livewire('agent-component') --}}
    {{-- </div> --}}
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Deposit (Rp)</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        38.000.000
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md d-flex justify-content-center align-items-center">
                                    {{-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> --}}

                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                        viewBox="0 0 32 32">
                                        <title>cycle</title>
                                        <g fill="#edecec" class="nc-icon-wrapper">
                                            <path
                                                d="M11,22H8A6,6,0,0,1,8,10H9v4a1,1,0,0,0,1,1,.988.988,0,0,0,.581-.187l7-5a1,1,0,0,0,0-1.626l-7-5A1,1,0,0,0,9,4V8H8A8,8,0,0,0,8,24h3a1,1,0,0,0,0-2Z"
                                                fill="#edecec"></path>
                                            <path data-color="color-2"
                                                d="M24,8H21a1,1,0,0,0,0,2h3a6,6,0,0,1,0,12H23V18a1,1,0,0,0-1.581-.813l-7,5a1,1,0,0,0,0,1.626l7,5A.988.988,0,0,0,22,29a1,1,0,0,0,1-1V24h1A8,8,0,0,0,24,8Z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Nilai Stok (Rp)</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        12.000.000
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md d-flex justify-content-center align-items-center">
                                    {{-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                        viewBox="0 0 32 32">
                                        <title>blockchain</title>
                                        <g stroke-width="2" fill="#e2e2e2" stroke="#e2e2e2" class="nc-icon-wrapper">
                                            <polyline points="2 6.5 9 10 16 6.5" fill="none" stroke="#e2e2e2"
                                                stroke-miterlimit="10" data-cap="butt"></polyline>
                                            <line x1="9" y1="10" x2="9" y2="18.5"
                                                fill="none" stroke="#e2e2e2" stroke-miterlimit="10" data-cap="butt">
                                            </line>
                                            <polygon points="16 6.5 9 2.999 2 6.5 2 15 9 18.5 16 15 16 6.5"
                                                fill="none" stroke="#e2e2e2" stroke-linecap="square"
                                                stroke-miterlimit="10"></polygon>
                                            <polyline points="16 6.5 23 10 30 6.5" fill="none" stroke="#e2e2e2"
                                                stroke-miterlimit="10" data-cap="butt"></polyline>
                                            <line x1="23" y1="10" x2="23" y2="18.5"
                                                fill="none" stroke="#e2e2e2" stroke-miterlimit="10" data-cap="butt">
                                            </line>
                                            <polygon points="30 6.5 23 2.999 16 6.5 16 15 23 18.5 30 15 30 6.5"
                                                fill="none" stroke="#e2e2e2" stroke-linecap="square"
                                                stroke-miterlimit="10"></polygon>
                                            <polyline points="9 18.5 16 22 23 18.5" fill="none"
                                                stroke-miterlimit="10" data-cap="butt" data-color="color-2">
                                            </polyline>
                                            <line x1="16" y1="22" x2="16" y2="30.5"
                                                fill="none" stroke-miterlimit="10" data-cap="butt"
                                                data-color="color-2"></line>
                                            <polygon points="23 18.5 16 14.999 9 18.5 9 27 16 30.5 23 27 23 18.5"
                                                fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                                data-color="color-2"></polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Pemasukan [Rp]</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        53,000,000-
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Transaksi (Rp)</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        580.000.000
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-4">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <div class="card z-index-2">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                            {{-- chart total penjualan --}}
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total penjualan bulan ini (Rp) : </p>
                        <h5 class="font-weight-bolder ms-2 mt-0 mb-0">
                            73.000.000
                        </h5>
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">(<span
                                class="font-weight-bolder">+23%</span>) dari bulan lalu</p>
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total nota transaksi (lembar) : </p>
                        <h5 class="font-weight-bolder ms-2 mt-0 mb-0">
                            230
                        </h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Sales overview</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2023
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        "Sep 22",
                        "Okt 22",
                        "Nov 22",
                        "Dec 22",
                        "Jan 23",
                        "Peb 23",
                        "Mar 23",
                        "Apr 23",
                        "Mei 23",
                    ],
                    datasets: [{
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "#fff",
                        data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                        maxBarThickness: 6,
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 15,
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: "normal",
                                    lineHeight: 2,
                                },
                                color: "#fff",
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },
                },
            });

            var ctx2 = document.getElementById("chart-line").getContext("2d");

            var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
            gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
            gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

            var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
            gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
            gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: [
                        "Sep 22",
                        "Okt 22",
                        "Nov 22",
                        "Dec 22",
                        "Jan 23",
                        "Peb 23",
                        "Mar 23",
                        "Apr 23",
                        "Mei 23",
                    ],
                    datasets: [{
                            label: "Penjualan",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#cb0c9f",
                            borderWidth: 3,
                            backgroundColor: gradientStroke1,
                            fill: true,
                            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                            maxBarThickness: 6,
                        },
                        {
                            label: "Pembelian",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#3A416F",
                            borderWidth: 3,
                            backgroundColor: gradientStroke2,
                            fill: true,
                            data: [500, 200, 20, 200, 600, 50, 350, 100, 600],
                            maxBarThickness: 6,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#b2b9bf",
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: "normal",
                                    lineHeight: 2,
                                },
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                color: "#b2b9bf",
                                padding: 20,
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: "normal",
                                    lineHeight: 2,
                                },
                            },
                        },
                    },
                },
            });
        </script>
    @endpush
</x-app-layout>
