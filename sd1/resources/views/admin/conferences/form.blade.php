<div class="mb-3">
    <label>Pavadinimas</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $conference->title ?? '') }}">
</div>

<div class="mb-3">
    <label>Aprašymas</label>
    <textarea name="description" class="form-control">{{ old('description', $conference->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Data</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', $conference->date ?? '') }}">
</div>

<div class="mb-3">
    <label>Vieta</label>
    <input type="text" name="location" class="form-control" value="{{ old('location', $conference->location ?? '') }}">
</div>

<div class="mb-3">
    <label>Maksimalus dalyvių skaičius</label>
    <input type="number" name="max_participants" class="form-control" value="{{ old('max_participants', $conference->max_participants ?? '') }}">
</div>

<button class="btn btn-success">Išsaugoti</button>