<script>
    var xValues = ["Students", "Departments", "Classes","Subjects","Sessions"];
    var yValues = [{{ $student }}, {{ $department }}, {{ $grade }},{{ $subject }},{{ $session }},0];
    var barColors = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 205, 86, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)'
    ];
    var border_color = [
        'rgb(255, 205, 86)',
        'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)'

    ];
    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: 'Students Analysis',

                backgroundColor: barColors,
                borderColor: border_color,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "Students Records in 2024"
            }
        }
    });



    
    // Bar Chart
    var xValuess = ["Students", "Departments", "Classes","Subjects","Sessions"];
    var yValuess = [{{ $student }}, {{ $department }}, {{ $grade }},{{ $subject }},{{ $session }},0];
    var barColorss = [
        'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)'
    ];
    var border_color = [
        'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)'

    ];
    new Chart("myChar", {
        type: "bar",
        data: {
            labels: xValuess,
            datasets: [{
                label: 'Students Analysis',
                backgroundColor: barColorss,
                borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
                data: yValuess
            }]
        },
        options: {
            title: {
                display: true,
                text: "Students Records in 2024"
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
        borderWidth: 1
    });
</script>
</body>

</html>
