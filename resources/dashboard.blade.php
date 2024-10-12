@extends('layouts.app')

@section('content')
    <h1>Data Analysis Panel</h1>
    <div class="row">
        <div class="col-md-6">
            <canvas id="chart1"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="chart2"></canvas>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartData1 = @json($chartsData1);
        const chartData2 = @json($chartsData2);

        const ctx1 = document.getElementById('chart1').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: chartData1.labels,
                datasets: [{
                    label: 'Data 1',
                    data: chartData1.values,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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

        const ctx2 = document.getElementById('chart2').getContext('2d');
        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: chartData2.labels,
                datasets: [{
                    label: 'Data 2',
                    data: chartData2.values,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
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
    </script>
@endsection
