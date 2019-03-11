<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/layout.css" rel="stylesheet">
    <title>Персональный сайт Ильи Мжачева. Таблица ответов на тест</title>
</head>
<body>
    <div class="container">
        <a class="btn btn-default btn-primary" href="/test" role="button">Назад</a>
        <p class="lead">Ответы студентов на тест по дисциплине: "Безопасность жизнедеятельности" </p>
        <table class="table table-bordered table-responsive table-hover">
            <thead>
            <tr>
                <th>№</th>
                <th>Дата</th>
                <th>Ф.И.О.</th>
                <th>Группа</th>
                <th>Ответ 1</th>
                <th>Ответ 2</th>
                <th>Ответ 3</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $number = 1;
                foreach($args['models'] as $model) {
                    echo '<tr>';
                    echo '<td>' . $number++ . '</td>';
                    echo '<td>' . $model->DatePassage . '</td>';
                    echo '<td>' . $model->Fio . '</td>';
                    echo '<td>' . $model->Group . '</td>';
                    echo '<td>' . $model->Answer1 . '</td>';
                    echo '<td>' . $model->Answer2 . '</td>';
                    echo '<td>' . $model->Answer3 . '</td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>