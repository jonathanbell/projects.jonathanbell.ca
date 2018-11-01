@foreach ($project->tools as $tool)
@if(!$loop->last){{ $tool }}, @else{{ $tool }}@endif
@endforeach
