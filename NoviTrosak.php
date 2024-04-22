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
    .nopadding {
        padding: 0 !important;
        margin: 0 !important;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center" style="border: 1px solid red;">
            <div class="iskalnik pb-3 pt-3" contenteditable="true" aria-placeholder="Nekaj"></div>
        </div>
    </div>
    <div class="row" style="height: 95vh;">
        <div class="col-2 d-flex align-items-stretch" style="border: 1px solid red;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10" style="border: 1px solid red;">Div 1</div>
                </div>
            </div>
        </div>
        <div class="col-8 align-items-center" style="border: 1px solid red;">
            <div class="title text-center mt-5 pt-2 pb-2" style="border:1px solid red; font-size:25px;">
                Izradi novi trošak
            </div>
            <form action="">
                <div class="col-12 nopadding">
                    <div style="border:1px solid #c2bcbc; width: 100%;" class="pb-2 pt-2 no-gutters col-12 text-center mt-3"  contenteditable="true">Ime troška</div>
                    <input type="text" placeholder="Iznos" style="border:1px solid #c2bcbc; width: 100%; float:right;" class="pb-2 pt-2 no-gutters col-9 mt-4">
                    <input type="text" placeholder="Kategorija" style="border:1px solid #c2bcbc; width: 100%; float:right;" class="pb-2 pt-2 no-gutters col-9 mt-4">
                    <input type="text" placeholder="Datum plaćanja" style="border:1px solid #c2bcbc; width: 100%; float:right;" class="pb-2 pt-2 no-gutters col-9 mt-4">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>