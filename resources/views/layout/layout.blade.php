<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freedom | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    @yield('bebas')
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

        const alert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                alert('Silahkan Masuk!', 'danger')
            })
        }
    </script>
</body>

</html>
