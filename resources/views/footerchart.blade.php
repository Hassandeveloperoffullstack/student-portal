<script>
    // Bar Chart
    var xValuess = ["Week 1", "Week 2", "Week 3","Week 4"];
    var yValuess = [3,5,2,6,0];
    var barColorss = [
        'rgb(255, 99, 132)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(153, 102, 255)',


    ];
   
    new Chart("myChar", {
        type: "bar",
        data: {
            labels: xValuess,
            datasets: [{
                label: 'Attendence Analysis',
                backgroundColor: barColorss,
                borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
    ],
                data: yValuess
            }]
        },
        options: {
            title: {
                display: true,
                text: "Attendence Records in Last Mounth 2024"
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
        borderWidth: 1
    });
    // Bar pie
    var xValuess = ["Mounth 1", "Mounth 2", "Mounth 3","Mounth 4","Mounth 5","Mounth 6","Mounth 7","Mounth 8","Mounth 9","Mounth 10","Mounth 11","Mounth 12"];
    var yValuess = [24,25,30,22,19,15,20,11,16,27,13,22];
    var barColorss = [
        'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(255, 0, 0)',     // Red
  'rgb(255, 165, 0)',   // Orange
  'rgb(255, 255, 0)',   // Yellow
  'rgb(0, 255, 0)',     // Green
  'rgb(0, 0, 255)',     // Blue
  'rgb(75, 0, 130)',    // Indigo
  'rgb(148, 0, 211)',   // Violet
  'rgb(238, 130, 238)', // Violet Red
  'rgb(255, 193, 203)', // Pink
  'rgb(255, 204, 0)',   // Light Goldenrod Yellow
  'rgb(128, 128, 128)', // Gray
  'rgb(0, 0, 0)'        // Black


    ];
   
    new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValuess,
            datasets: [{
                label: 'Attendence Analysis',
                backgroundColor: barColorss,
                data: yValuess
            }]
        },
        options: {
            title: {
                display: true,
                text: "Attendence Records in Year 2024"
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
