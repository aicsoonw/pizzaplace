<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post test suka</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.post("/test",
                    {
                        name: "Donald Duck",
                        city: "Duckburg"
                    },
                    function(data,status){
                        alert("Data: " + data + "\nStatus: " + status);
                    });
            });
        });
    </script>
</head>
<body>
@csrf
<form action="/test" method="POST">
    <input name="ebal" type="text" id="name">
    <input type="submit" value="submit">
</form>

<button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>
