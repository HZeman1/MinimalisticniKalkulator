<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Centering in Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<style>
    .vertical-center {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
<div class="vertical-center">
    <div class="row vertical col-7 pt-5 pb-5" style="border:1px solid #c9c6c6;">
        <div class="col-12 text-center" style="font-size:40px; color: #c2bcbc">Vaš osobni kalkulator</div>
        <div class="col-12 text-center pt-3 pb-4" style="color:blue; border: 0">
            <span onclick="location.href = 'NoviTrosak.php'" style="width: fit-content; cursor:default;">
                Izradite novi trošak
            </span>
            <span style="color:#c2bcbc" class="spacer">|</span>
            <span style=" cursor:default;" onclick="location.href = 'Svi_troškovi.php'" >
                Pogledaj sve troškove
            </span>
        </div>
    </div>
</div>
</body>
</html>