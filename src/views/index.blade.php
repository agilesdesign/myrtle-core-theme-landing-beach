<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/public/assets/themes/landing/beach/css/app.css">

    <title>Myrtle</title>
</head>
<body class="body">
<div id="content" class="col-md-3">
    <div class="card animated zoomInDown">
        <div class="card-block">
            <div id="logo">
                <h1 class="card-text text-xs-center">
                    <span class="brand">Myrtle</span>
                    <span class="product tag tag-warning">WMS</span>
                </h1>
                @if(Gate::allows('register') || Gate::allows('login'))
                    <div class="text-xs-center">
                        <div id="auth-actions" class="btn-group btn-group-sm mt-2">
                            @if(Gate::allows('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
                            @endif
                            @if(Gate::allows('login'))
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}
<script src="/public/assets/themes/landing/beach/js/app.js"></script>
<script>
    $(function(){
        @foreach($alerts->messages() as $level => $alert)
            @foreach($alert as $message)
                 notie.alert(
                "@if($level == 'danger'){{ 'error' }}@else{{ $level }}@endif",
                "{{ $message }}",
                3
        );
        @endforeach
        @endforeach
    });
</script>
</body>
</html>
