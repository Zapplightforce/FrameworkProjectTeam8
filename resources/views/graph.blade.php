@foreach($graph as $graph)

    <div class="card-header-title">Graph</div>

    <canvas id="myChart"></canvas>


    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Availability', 'Performance', 'Quality', 'OEE'],
                datasets: [{
                    label: 'Percentage',
                    data: [{{$graph->availability}}, {{$graph->performance}}, {{$graph->quality}}, {{$graph->OEE}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)'
                    ],
                    borderWidth: 1,
                    datalabels: {
                        color: 'black',
                        anchor: 'end',
                        align: 'top'
                    }

                }]
            },
            plugins: [ChartDataLabels],
            options: {
                scales: {
                    y: {
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                }
            }
        });
    </script>
@endforeach
