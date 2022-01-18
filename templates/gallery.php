<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <section>
            <h2>Моя фотогалерея</h2>            
            <div class="gallery_group">
                {% for item in data %}
                <a class="photo" href="../../uploads/img_full/{{ item.src }}" data-fancybox="gallery" data-caption="{{ item.description }}"><img src="../../uploads/img_short/{{ item.src }}" alt="{{ item.description }}"></a>
                {% endfor %}

            </div>
            <a href="index.php?id={{ data[lastID].id }}" class="btn btn-primary btn-short" style="margin-top: 40px;">Еще</a>
        </section>
    </main>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>

</html>
