<?php
include('index.php');
$query = mysqli_query($koneksi, "SELECT umur,  COUNT(umur) AS banyak_umur FROM biodata where jenis_kelamin = 'Wanita' GROUP BY umur;");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
$query = mysqli_query($koneksi, "SELECT umur,  COUNT(umur) AS banyak_umur FROM biodata where jenis_kelamin = 'Pria' GROUP BY umur;");
$row1 = mysqli_fetch_all($query, MYSQLI_ASSOC);  ?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
</head>

<body>
    <nav>
        <a href="input.php">Input Data</a>
        <a href="show_tabel.php"> Home</a>
        <a href="ChartData.php">Chart Data</a>
    </nav>
    <br>
    <br>
    </figure>
    <h1>Wanita</h1>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php
                            foreach ($row as $value) {
                                echo "'" . $value['umur'] . "',";
                            } ?>],
                datasets: [{
                    label: [<?php
                            foreach ($row as $value) {
                                echo "'" . $value['umur'] . "',";
                            } ?>],
                    data: [<?php foreach ($row as $value) {
                                echo $value['banyak_umur'] . ", ";
                            } ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false
            }
        });
    </script>
    <h1>Pria</h1>
    <canvas id="myChart1" width="400" height="400"></canvas>
    <script>
        var ctx = document.getElementById('myChart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php
                            foreach ($row1 as $value) {
                                echo "'" . $value['umur'] . "',";
                            } ?>],
                datasets: [{
                    label: [<?php
                            foreach ($row1 as $value) {
                                echo "'" . $value['umur'] . "',";
                            } ?>],
                    data: [<?php foreach ($row1 as $value) {
                                echo $value['banyak_umur'] . ", ";
                            } ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false
            }
        });
    </script>
</body>

</html>
</body>

</html>