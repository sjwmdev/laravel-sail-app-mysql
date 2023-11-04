<script>
    var usersCreatedData = @json($usersCreatedData);
    var ctx = document.getElementById('usersCreatedChart').getContext('2d');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: Object.keys(usersCreatedData),
            datasets: [{
                label: 'Users Created',
                data: Object.values(usersCreatedData),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Users Created Over Time'
            },
            subtitle: {
                display: true,
                text: 'Number of users created per day'
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
