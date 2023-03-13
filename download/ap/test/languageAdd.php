<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Add Form</title>
</head>
<body>
    <form 
        action="https://onlineshop.ibmtal.com/api/?api=language_add" 
        method="post"
        target="sonuc"
    >
        Dil : <input type="text" name="name"><br>
        Bayrak URL : <input type="text" name="flag"><br>
        <input type="submit" value="Kaydet">
    </form>
    <iframe name="sonuc"></iframe>
</body>
</html>