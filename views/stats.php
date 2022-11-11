<?php
require_once "../controllers/NftController.php";
require_once "../controllers/CollectionController.php";

$data = new NftController();
$collections = new CollectionsController();
$expensive = $data->getMostExpensive();
$cheap = $data->getMostCheapest();
$counts = $data->getCountNft();
$celebritys = $collections->mostCelebrity();


foreach($expensive as $exp){
    echo '
    expensive name'.$exp['name'].'
    expensive price'.$exp['price'].'


';
}
foreach($cheap as $chp){
    echo '
        cheap name '.$chp['name'].'
        cheap price' .$chp['price'].'
    ';
}

foreach($counts as $count){
    echo '
        number of nfts is '.$count.'
    ';
}


?>

<?php

foreach($celebritys as $celebrity){
    $clc[] = $celebrity['name'];
    $repeats[] = $celebrity['TotalRepeat'];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body>

    <div style="width: 500px;">
    <canvas id="myChart"></canvas>
    </div>

    <script>
        const data = {
  labels: <?php echo json_encode($clc); ?>,
  datasets: [{
    label: 'My First Dataset',
    data: <?php echo json_encode($repeats); ?>,
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)',
      'rgb(30, 205, 86)',
      'rgb(130, 205, 86)',
      'rgb(130, 100, 22)'
    ],
    hoverOffset: 4
  }]
};
const config = {
  type: 'doughnut',
  data: data,
};
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</body>
</html>