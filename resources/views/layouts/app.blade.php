<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.7.5/css/foundation.min.css" integrity="sha512-IyYpCJ+7aODR+LWiU+buuFnKg69IYu7SCmn+3IBNxvEcfsDC7z1xyWhAZTAFTGTlLMnDwcQBFWhhe7JiSw6TEg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    @include('inc.topbar')

    <div class="container">
        
   <div class="mt-1">
        @include('inc.messages')
   </div>

        <div class="card m-1">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</body>
</html>