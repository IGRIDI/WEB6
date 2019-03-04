<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Персональный сайт Герцовской Карины. Главная страница.</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/script/onMenuHoverBackgr.js"></script>
    <script src="/script/sessionStorageHistory.js"></script>
    <script src="/script/globalHistory.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div class="currentTime" id="currentTime"></div>
        <a name="top"></a>
        <header>
            <h1>Страница загрузки файла</h1>
        </header>
        <section>
            <h2>Вы попали на страницу загрузки файла гостевой книги <br>выберите файл</h2>
        </section>
        <input class="fileButton" type="file" accept=".inc" name="records" id="form_file">
        <input type="submit" name="submit" class="submit" form="contacts" value="Отправить">
        <input type="reset" name="reset" class="reset" value="Сбросить" form="contacts" onclick="location.reload()">
        
        <a class="loadRecordsBtn" href="/guest_book" role="button">Назад</a>

    </div>
    <footer>
        <p class="footerNote1">&copy; 2019 GRIDI</p>
        <p class="footerNote2">г. Севастополь СевГУ</p>
        <p class="anchor1"><a href="#top">Наверх</a></p>
    </footer>
</div>
<script src="/script/jquery-3.3.1.min.js"></script>
<script src="/script/currentTime.js"></script>
</body>
</html>