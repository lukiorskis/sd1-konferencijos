<div class="mb-3">
    <label>Vardas</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $user['name'] ?? '') }}">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Pavardė</label>
    <input type="text" name="surname" class="form-control" value="{{ old('surname', $user['surname'] ?? '') }}">
    @error('surname') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>El. paštas</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user['email'] ?? '') }}">
    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<button class="btn btn-success">Išsaugoti</button>