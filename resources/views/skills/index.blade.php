<h1>Manage Skills</h1>

<form action="{{ route('skills.store') }}" method="POST">

    @csrf

    <input
        type="text"
        name="name"
        placeholder="Skill"
        required>

    <input
        type="number"
        name="percentage"
        placeholder="90"
        min="0"
        max="100"
        required>

    <button type="submit">
        Save
    </button>

</form>

<hr>

@foreach($skills as $skill)

<p>
    {{ $skill->name }}
    ({{ $skill->percentage }}%)
</p>

@endforeach