@if (count($errors))
    <ul class="errors">
        @foreach($errors->all() as $e)
            <li class="error">{{ $e }}</li>
        @endforeach
    </ul>
@endif
