<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class</title>
</head>
<body>
    <table>
            <tr>
                <th>Klase</th>
                <th>Kodas</th>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>Kontroliniu darbu vidurkis</th>
                <th>Duomenu formatavimo data</th>
            </tr>
            <?php foreach($data as $key => $code):?>
                <?php foreach($code as $info):?>
                <tr>
                    <td><?=$key?></td>
                    <td><?=$info['code']?></td>
                    <td><?=$info['name']?></td>
                    <td><?=$info['lname']?></td>
                    <td><?=array_sum($info['results']) / count($info['results'])?></td>
                    <td><?=$info['data']?></td>
                </tr>

                <?php endforeach;?>
            <?php endforeach;?>
    </table>
</body>
<style> <?php include 'view/css/style.css'; ?> </style>
</html>
