<li class="project" id="project-id-{{ $project->id }}">
  <h3 class="project-title">
    <a target="_blank" href="{{ $project->url }}">{{ $project->title }}</a>
  </h3>
  <p>
    {!! $project->description !!}<br><br>
    <span class="built-with">Built with:</span>
    @include('components.tools')
  </p>
</li>
