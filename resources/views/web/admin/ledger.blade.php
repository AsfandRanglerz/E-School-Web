@extends('web.admin.layout.app')
@section('title', 'Ledger')

@section('content')

<div class="container-fluid  px-0">
    <div class="d-flex justify-content-between align-items-center p-3">
        <div class="d-flex flex-column">
            <h5 class="admin-page-heading">Ledger</h5>
            <span class="admin-page-span">Overview / Ledger</span>
        </div>

        <div class="d-flex justify-content-center align-items-center gap-2">

            <a href="#" class="primary-anchor free-details-a">
                + Record Income
            </a>

            <a href="#" class="primary-anchor free-details-a">
                + Record Expense
            </a>

        </div>
    </div>
</div>

<div class="container-fluid px-0">
    <div class="pt-3 px-1">

        <div class="row g-3 mx-0 row-equal">

            {{-- LEFT --}}
            <div class="col-lg-7">

                <div class="addws p-3">

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div>
                            <span class="admin-page-span">Total balance</span>
                            <h2 class="admin-page-heading mt-2"
                                style="font-size:32px;">
                                1,000 PKR
                            </h2>
                        </div>

                    </div>

                    <div class="row mt-2 g-3">

                        {{-- Income --}}
                        <div class="col-md-6">

                            <div class="addws border-0 shadow-none"
                                style="background:#f8fafc;">

                                <div class="d-flex justify-content-between align-items-start">

                                    <div>

                                        <span class="adswdbg span-fb2">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </span>

                                        <h6 class="mt-3 mb-1">Income</h6>

                                        <h4>1,698 PKR</h4>

                                    </div>

                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-3">

                                    <div class="earning-div-for-expenses-analytics">
                                        <h6>Yearly Analytics</h6>
                                        <h4>$64,522.24</h4>
                                    </div>

                                    <span class="admin-page-span">
                                        18 Feb 25 - 18 Feb 26
                                    </span>

                                </div>

                                <div class="chart-wrapper pt-2">
                                    <canvas id="earningsChart"></canvas>
                                </div>

                            </div>

                        </div>

                        {{-- Expense --}}
                        <div class="col-md-6">

                            <div class="addws border-0 shadow-none"
                                style="background:#f8fafc;">

                                <div class="d-flex justify-content-between align-items-start">

                                    <div>

                                        <span class="adswdbg span-fb5">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </span>

                                        <h6 class="mt-3 mb-1">Expenses</h6>

                                        <h4>698 PKR</h4>

                                    </div>

                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-3">

                                    <div class="earning-div-for-expenses-analytics">
                                        <h6>Yearly Analytics</h6>
                                        <h4>$64,522.24</h4>
                                    </div>

                                    <span class="admin-page-span">
                                        18 Feb 25 - 18 Feb 26
                                    </span>

                                </div>

                                <div class="chart-wrapper pt-2">
                                    <canvas id="expensesChart"></canvas>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            {{-- RIGHT --}}
            <div class="col-lg-5">

                <div class="addws">

                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3 pb-3 border-bottom">

                            <span class="admin-page-heading">
                                Total Profit
                            </span>

                            <div class="d-flex align-items-center ms-auto gap-2 div-for-header-content">

                                <span class="admin-page-heading">
                                    01 - 18 Feb 2026
                                    <span class="fa fa-chevron-down ms-1"></span>
                                </span>

                            </div>

                        </div>
                    </div>

                    <div class="chart-wrapper chart-total-profit pb-3">

                        <div class="chart-total-profit-inner">

                            <canvas id="totalProfitChart"></canvas>

                            <div class="chart-total-profit-center">

                                <span class="admin-page-span">
                                    Total
                                </span>

                                <h3 class="admin-page-heading">
                                    2,324
                                </h3>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div class="container-fluid px-0 pt-3 pb-5">

    <div class="dfst dfstsad">

        <div class="p-3 dfsti">

            {{-- Tabs --}}
            <ul class="nav nav-pills mb-3 custom-nav-pills-transactions"
                id="pills-tab"
                role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active all-transactions-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#allTransactions"
                        type="button">
                        All <span>4</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link incoming-transactions-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#incomingTransactions"
                        type="button">
                        Incoming <span>3</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link outgoing-transactions-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#outgoingTransactions"
                        type="button">
                        Outgoing <span>1</span>
                    </button>
                </li>

            </ul>

            {{-- Search --}}
            <div>
                <form action="" class="form-for-search-dash">

                    <div class="my-3 transaction-search-wrapper">

                        <i class="fa-solid fa-magnifying-glass transaction-search-icon"></i>

                        <input type="text"
                            class="form-control"
                            placeholder="Search by creator, reason, amount...">

                        <button type="button"
                            class="transaction-export-btn">

                            <i class="fa-solid fa-ellipsis-vertical"></i>

                        </button>

                    </div>

                </form>
            </div>

            {{-- Table --}}
            <div class="tab-content">

                <div class="tab-pane fade show active all-transactions-content"
                    id="allTransactions">

                    <div class="table-container">

                        <table class="custom-table">

                            <thead>

                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Created By</th>
                                    <th>Payment Type</th>
                                    <th>Type</th>
                                    <th>Reason</th>
                                    <th>Document</th>
                                    <th>Actions</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>
                                        17 Feb 2026 <br>
                                        12:55 PM
                                    </td>

                                    <td>698 PKR</td>

                                    <td>eSchool</td>

                                    <td>
                                        <a href="#"
                                            class="transaction-purpose-link">
                                            Cash
                                        </a>
                                    </td>

                                    <td style="color:#ef4444;">
                                        Outgoing
                                    </td>

                                    <td>Salary (T0001)</td>

                                    <td>No Document</td>

                                    <td>
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        17 Feb 2026 <br>
                                        12:30 PM
                                    </td>

                                    <td>1,500 PKR</td>

                                    <td>eSchool</td>

                                    <td>
                                        <a href="#"
                                            class="transaction-purpose-link">
                                            Cash
                                        </a>
                                    </td>

                                    <td style="color:#22c55e;">
                                        Incoming
                                    </td>

                                    <td>Admission Fee (S0001)</td>

                                    <td>No Document</td>

                                    <td>
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        17 Feb 2026 <br>
                                        12:30 PM
                                    </td>

                                    <td>99 PKR</td>

                                    <td>eSchool</td>

                                    <td>
                                        <a href="#"
                                            class="transaction-purpose-link">
                                            Cash
                                        </a>
                                    </td>

                                    <td style="color:#22c55e;">
                                        Incoming
                                    </td>

                                    <td>Security Fee (S0001)</td>

                                    <td>No Document</td>

                                    <td>
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        17 Feb 2026 <br>
                                        12:30 PM
                                    </td>

                                    <td>99 PKR</td>

                                    <td>eSchool</td>

                                    <td>
                                        <a href="#"
                                            class="transaction-purpose-link">
                                            Cash
                                        </a>
                                    </td>

                                    <td style="color:#22c55e;">
                                        Incoming
                                    </td>

                                    <td>Student Fund (S0001)</td>

                                    <td>No Document</td>

                                    <td>
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@push('js')

<script>
$(document).ready(function() {

    /* =========================
       DATE PICKER
    ========================== */
    $("#attendancePicker [data-input]").datepicker({

        dateFormat: "yy-mm-dd",

        onSelect: function(dateText) {

            let today = $.datepicker.formatDate(
                "yy-mm-dd",
                new Date()
            );

            if (dateText === today) {
                $(this).val("Today");
            } else {
                $(this).val(dateText);
            }
        }
    });

    $("#attendancePicker [data-input]").val("Today");

});
</script>

<script>
$(function() {

    /* =========================
       CHART STORAGE
    ========================== */
    const dashboardCharts = {};

    /* =========================
       DESTROY CHART
    ========================== */
    function destroy(id) {

        if (dashboardCharts[id]) {

            dashboardCharts[id].destroy();

            delete dashboardCharts[id];
        }
    }

    /* =========================
       TOTAL PROFIT CHART
    ========================== */
    function totalProfit() {

        const el =
            document.getElementById("totalProfitChart");

        if (!el || typeof Chart === "undefined") return;

        destroy("totalProfitChart");

        const track = "#EEF2F6";

        dashboardCharts.totalProfitChart =
            new Chart(el, {

                type: "doughnut",

                data: {

                    datasets: [

                        {
                            label: "Profit",
                            data: [75, 25],
                            backgroundColor: [
                                "#22C55E",
                                track
                            ],
                            borderWidth: 0,
                            weight: 3
                        },

                        {
                            label: "Income",
                            data: [65, 35],
                            backgroundColor: [
                                "#EAB308",
                                track
                            ],
                            borderWidth: 0,
                            weight: 2
                        },

                        {
                            label: "Expense",
                            data: [50, 50],
                            backgroundColor: [
                                "#EF4444",
                                track
                            ],
                            borderWidth: 0,
                            weight: 1
                        }
                    ]
                },

                options: {

                    responsive: true,
                    maintainAspectRatio: false,

                    cutout: "45%",

                    plugins: {

                        legend: {
                            position: "bottom",
                            onClick: null,

                            labels: {

                                usePointStyle: true,
                                padding: 20
                            }
                        },

                        tooltip: {
                            enabled: true,
                            backgroundColor: "#ffffff",
                            titleColor: "#000000",
                            bodyColor: "#000000",
                            borderColor: "#e5e7eb",
                            borderWidth: 1,
                            cornerRadius: 100,
                            padding: 12,
                            displayColors: false
                        }
                    }
                }
            });
    }

    /* =========================
       INITIAL LOAD
    ========================== */
    setTimeout(function() {

        totalProfit();

    }, 0);

});
</script>

<script>
/* =========================
   LINE CHART FUNCTION
========================== */
function createLineChart(
    id,
    color,
    bgColor,
    dataValues
) {

    const ctx = document.getElementById(id);

    if (!ctx || typeof Chart === "undefined") return;

    new Chart(ctx, {

        type: "line",

        data: {

            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul"
            ],

            datasets: [{
                data: dataValues,
                borderColor: color,
                backgroundColor: bgColor,
                fill: true,
                tension: 0.4,
                pointRadius: 0,
                borderWidth: 2
            }]
        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: false
                }
            },

            scales: {

                x: {
                    display: false
                },

                y: {
                    display: false
                }
            }
        }
    });
}

/* =========================
   LINE CHART CALLS
========================== */
$(document).ready(function() {

    createLineChart(
        "earningsChart",
        "#E8798C",
        "rgba(232,121,140,0.10)",
        [30, 20, 25, 40, 35, 50, 32]
    );

    createLineChart(
        "expensesChart",
        "#7C8CF8",
        "rgba(124,140,248,0.10)",
        [40, 30, 20, 45, 35, 50, 28]
    );

});
</script>

@endpush
