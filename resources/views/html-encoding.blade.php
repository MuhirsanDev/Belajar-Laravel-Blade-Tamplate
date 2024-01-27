<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Encoding</title>
</head>
<body>

    {{-- Cara ini kurang tepat karena akan menimbulkan serangan XSS --}}
    {{-- {!! $name !!} --}}



    {{-- Agar tidak terkena serangan XSS gunakan {{  }} untuk pemanggilan variabel karena ini sudah mengandung HTML SpecialShart --}}
    {{ $name }}
    
    

</body>
</html>