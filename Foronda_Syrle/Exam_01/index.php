<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#btnsubmit").click(function() {

                const text = document.getElementById("inputtext").value;
                let tojson = JSON.stringify({
                    item: text
                });
                $.ajax({
                    url: "action.php",
                    method: "get",
                    data:{data: tojson},
                    success: (res) => {
                       $("#result").text(res);
                    },
                    error: (err) => {
                        console.log(err);
                    }
                })

            });
        });
    </script>
</head>

<body>
    <form>
        <input type="text" name="inputtext" placeholder="input text" id="inputtext">
        <button id="btnsubmit" type="button">submit</button>
        <h2 id="result"></h2>
    </form>

</body>

</html>