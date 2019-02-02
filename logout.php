<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    body {
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgba(255, 0, 0, 1));
    }

    .lds-dual-ring {
        display: inline-block;
        width: 64px;
        height: 64px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 46px;
        height: 46px;
        margin: 1px;
        border-radius: 50%;
        border: 5px solid #fff;
        border-color: #fff transparent #fff transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    .centered {
        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -50px;
        margin-left: -100px;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<body>
    <div class="lds-dual-ring centered "></div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        window.setTimeout(function () {

            // Move to a new location or you can do something else
            window.location.href = "index.php";

        }, 3000);
    });
</script>

</html>