<?php
function dashboardIndex()
{
    $content  = "QUẢN LÝ WEB";
    adminRender('./dashboard/index.php', compact('content'));
}
function loadall_thongke()
{

    $sql = "select category.id as categoryName, category.name as tendm, count(product.id) as countsp, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice";
    $sql .= " from product left join category on category.id=product.id_category";
    $sql .= " group by category.id order by category.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if ($i == $tongdm) $dauphay = "";
                else $dauphay = ",";
                echo "['" . $thongke['categoryName'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                $i += 1;
            }

            ?>
        ]);

        var options = {
            'title': 'Biểu đồ thống kê sản phẩm danh mục',
            'width': 1200,
            'hight': 900,

        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
        <?php $thongke =  loadall_thongke();
        adminRender('./dashboard/index.php', compact('thongke'));
        ?>
    }
</script>