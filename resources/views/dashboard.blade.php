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
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
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
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        pointStyle: 'circle',
                        pointRadius: 10,
                        pointHoverRadius: 15,
                        pointBackgroundColor: 'rgba(255, 99, 132, 1)',
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
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        hoverOffset: 4,
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

            // Render Most Sold Categories chart
            var mostSoldCategoriesChart = new Chart(document.getElementById('mostSoldCategoriesChart'), {
                type: 'doughnut',
                data: {
                    labels: categoryNames,
                    datasets: [{
                        label: 'Most Sold Categories',
                        data: categoryQuantities,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
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
        });
    </script>

    <style>
        .chart-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }

        canvas {
            width: 100% !important;
            height: 400px !important;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                </div>
                <div class="chart-container mt-6">
                    <canvas id="quantitySoldChart"></canvas>
                </div>
                <div class="chart-container mt-6">
                    <canvas id="mostSoldProductsChart"></canvas>
                </div>
                <div class="chart-container mt-6">
                    <canvas id="mostSoldCategoriesChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
