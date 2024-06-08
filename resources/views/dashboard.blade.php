<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Parse data passed from the controller
            var revenueData = {!! json_encode($revenueData) !!};
            var quantitySoldData = {!! json_encode($quantitySoldData) !!};
            var mostSoldProducts = {!! json_encode($mostSoldProducts) !!};
            var mostSoldCategories = {!! json_encode($mostSoldCategories) !!};

            // Extract date labels and data values
            var dates = revenueData.map(function(data) { return data.date; });
            var revenue = revenueData.map(function(data) { return data.revenue; });
            var quantitySold = quantitySoldData.map(function(data) { return data.quantity_sold; });

            // Extract most sold products data
            var productNames = mostSoldProducts.map(function(product) { return product.product; });
            var productQuantities = mostSoldProducts.map(function(product) { return product.total_sold; });

            // Extract most sold categories data
            var categoryNames = mostSoldCategories.map(function(category) { return category.category; });
            var categoryQuantities = mostSoldCategories.map(function(category) { return category.total_sales; });

            // Render Revenue Generated Per Day chart with delay
            var delayed;
            var revenueChart = new Chart(document.getElementById('revenueChart'), {
                type: 'line',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Revenue Generated Per Day',
                        data: revenue,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    animation: {
                        onComplete: function() {
                            delayed = true;
                        },
                        delay: function(context) {
                            var delay = 0;
                            if (context.type === 'data' && context.mode === 'default' && !delayed) {
                                delay = context.dataIndex * 300 + context.datasetIndex * 100;
                            }
                            return delay;
                        }
                    },
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            beginAtZero: true,
                            stacked: true
                        }
                    }
                }
            });

            // Render Number of Products Sold Per Day chart with point styling
            var quantitySoldChart = new Chart(document.getElementById('quantitySoldChart'), {
                type: 'line',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Number of Products Sold Per Day',
                        data: quantitySold,
                        borderColor: 'rgba(153, 102, 255, 1)',
                        backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        pointStyle: 'circle',
                        pointRadius: 6,
                        pointHoverRadius: 10,
                        pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Render Most Sold Products chart
            var mostSoldProductsChart = new Chart(document.getElementById('mostSoldProductsChart'), {
                type: 'bar',
                data: {
                    labels: productNames,
                    datasets: [{
                        label: 'Most Sold Products',
                        data: productQuantities,
                        backgroundColor: 'rgba(255, 159, 64, 0.5)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Render Most Sold Categories chart with no axes
            var mostSoldCategoriesChart = new Chart(document.getElementById('mostSoldCategoriesChart'), {
                type: 'doughnut',
                data: {
                    labels: categoryNames,
                    datasets: [{
                        label: 'Most Sold Categories',
                        data: categoryQuantities,
                        backgroundColor: [
                            '#3498db',
                            '#9b59b6',
                            '#f1c40f',
                            '#1abc9c',
                            '#e74c3c',
                            '#34495e'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
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
        });
    </script>
<style>
    .chart-container {
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    canvas {
        width: 100% !important;
        height: auto !important;
        max-width: 100%;
    }

    #mostSoldCategoriesChart {
        max-width: 300px;
        max-height: 300px;
    }

    .chart-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }
</style>

<div class="pt-12 bg-gray-50 dark:bg-gray-900 sm:pt-20">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white sm:text-4xl sm:leading-10">
                Vending Machine Performance
            </h2>
            <p class="mt-3 text-xl leading-7 text-gray-600 dark:text-gray-400 sm:mt-4">
                This dashboard provides a real-time overview of your vending machine's performance.
            </p>
            <p> Quickly identify key metrics to optimize your stock, sales, and overall machine health.</p>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                    <div class="chart-container">
                        <div class="chart-title">Revenue Generated Per Day</div>
                        <canvas id="revenueChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <div class="chart-title">Most Sold Products</div>
                        <canvas id="mostSoldProductsChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <div class="chart-title">Number of Products Sold Per Day</div>
                        <canvas id="quantitySoldChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <div class="chart-title">Most Sold Categories</div>
                        <canvas id="mostSoldCategoriesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
