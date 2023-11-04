<script>
    var postsPublishedData = @json($postsPublishedData);
    var ctx = document.getElementById('postsPublishedChart').getContext('2d');

    // Create a new Chart object
    var postsPublishedChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: Object.keys(postsPublishedData),
            datasets: [{
                label: 'Posts Published',
                data: Object.values(postsPublishedData),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 10, // This will ensure that the y-axis ticks are spaced evenly
                    }
                }
            },
            // Add a title to the chart
            title: {
                display: true,
                text: 'Posts Published Per Day'
            }
        }
    });
</script>
