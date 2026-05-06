<div class="mb-3">

    <label>Pavadinimas</label>

    <input
        type="text"
        name="title"
        class="form-control"
        value="{{ old('title', $conference['title'] ?? '') }}"
    >

    @error('title')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

</div>

<div class="mb-3">

    <label>Aprašymas</label>

    <textarea
        name="description"
        class="form-control"
    >{{ old('description', $conference['description'] ?? '') }}</textarea>

    @error('description')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

</div>

<div class="mb-3">

    <label>Lektoriai</label>

    <input
        type="text"
        name="speakers"
        class="form-control"
        value="{{ old('speakers', $conference['speakers'] ?? '') }}"
    >

</div>

<div class="mb-3">

    <label>Data</label>

    <input
        type="date"
        name="date"
        class="form-control"
        value="{{ old('date', $conference['date'] ?? '') }}"
    >

</div>

<div class="mb-3">

    <label>Laikas</label>

    <input
        type="time"
        name="time"
        class="form-control"
        value="{{ old('time', $conference['time'] ?? '') }}"
    >

</div>

<div class="mb-3">

    <label>Adresas</label>

    <input
        type="text"
        name="address"
        class="form-control"
        value="{{ old('address', $conference['address'] ?? '') }}"
    >

</div>

<button class="btn btn-success">
    Išsaugoti
</button>