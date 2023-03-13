<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Add Form</title>
</head>
<body>
    <form 
        action="https://onlineshop.ibmtal.com/api/?api=city_add" 
        method="post"
        target="sonuc"
    >
        Şehir Adı : <input type="text" name="city"><br>
        Plaka Kodu : <input type="text" name="plaka"><br>
        <input type="submit" value="Kaydet">
    </form>
    <iframe name="sonuc"></iframe>
</body>
</html>