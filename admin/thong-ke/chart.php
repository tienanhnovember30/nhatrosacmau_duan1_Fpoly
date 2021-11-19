<!DOCTYPE html>
<html lang="en-US">

<body>


    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);


        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Loại', 'Số lượng'],
                <?php foreach ($items as  $items) {
                    extract($items);
                ?>['<?= $items['ten_diadiem'] ?>', <?= $items['so_luong'] ?>],
                <?php } ?>
            ]);
            var options = {
                'title': 'My Average Day',
                'width': 1800,
                'height': 900
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>