@foreach($projects as $project)

<h3>{{ $project->title }}</h3>

<p>{{ $project->description }}</p>

@if($project->image)

<img
src="{{ asset('storage/'.$project->image) }}"
width="200">

@endif

<form
action="{{ route('projects.destroy',$project->id) }}"
method="POST">

    @csrf
    @method('DELETE')

<button
class="btn btn-danger">

Delete

</button>
</form>

<hr>

@endforeach