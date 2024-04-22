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
            <form action="">
                <table class="mx-auto col-12 text-center">
                    <tr>
                        <td style="color:#c2bcbc" class="col-2">
                            Ime troška
                        </td>
                        <td class="col-10">
                            <input style="width: 100%; border:0;" type="text" class="pl-2 pt-3 pb-3" placeholder="Ime troška">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-2 d-flex align-items-stretch" style="border: 1px solid red;">Div ljevo</div>
    </div>
</div>
</body>
</html>