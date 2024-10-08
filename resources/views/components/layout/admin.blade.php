<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/oro.min.css') }}" type="text/css">
    <script src="https://cdn.tiny.cloud/1/rxsffkdjenly82awb597asru9t6wxj98qruof2ilhydd1e72/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        tinymce.init({
            selector: '#editor'
        });
    </script>
</head>

<body class="bg-lighter">
    {{ $slot }}
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
<script src="{{ asset('js/adminJquery.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    feather.replace()
</script>

</html>
