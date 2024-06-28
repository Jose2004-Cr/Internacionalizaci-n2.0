@if ($errors->any())
@vite(['resources/js/validatiom.js', 'resources/css/validatiom.css'])
    <div id="alerta" class="alerta {{ $attributes }}">
        <div class="relative px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-lg">
            <div class="text-center">
                <img src="\images\cerca.png" alt="" style="width: 50px; height: 50px; display: inline-block;">
            </div>
            <div class="font-medium text-center text-red-600">{{ __('Proceso Denegado') }}</div>
            <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
