@csrf

<div class="mb-3">
    <label class="form-label fw-semibold">Nombres:</label>
    <input type="text" name="nombres" class="form-control rounded-3 shadow-sm" value="{{ old('nombres', $cliente->nombres) }}">
    <div class="form-text text-danger">{{ $errors->first('nombres') }}</div>
</div>

<div class="mb-3">
    <label class="form-label fw-semibold">Email:</label>
    <input type="email" name="email" class="form-control rounded-3 shadow-sm" value="{{ old('email', $cliente->email) }}">
    <div class="form-text text-danger">{{ $errors->first('email') }}</div>
</div>

<div class="mb-3">
    <label class="form-label fw-semibold">Dirección:</label>
    <input type="text" name="direccion" class="form-control rounded-3 shadow-sm" value="{{ old('direccion', $cliente->direccion) }}">
    <div class="form-text text-danger">{{ $errors->first('direccion') }}</div>
</div>

<div class="mb-3">
    <label class="form-label fw-semibold">Teléfono:</label>
    <input type="text" name="fono" class="form-control rounded-3 shadow-sm" value="{{ old('fono', $cliente->fono) }}">
    <div class="form-text text-danger">{{ $errors->first('fono') }}</div>
</div>

<div class="mb-4">
    <label class="form-label fw-semibold">Foto:</label>
    <input type="file" name="foto" class="form-control rounded-3 shadow-sm">
    <div class="form-text text-danger">{{ $errors->first('foto') }}</div>
</div>

@if($cliente->foto)
    <div class="mb-4">
        <p class="mb-1">Foto actual:</p>
        <img src="{{ asset('storage/'.$cliente->foto) }}" width="120" class="rounded shadow-sm">
    </div>
@endif

<div class="text-end">
    <button class="btn btn-outline-primary px-4 py-2 rounded-pill shadow-sm">
        {{ $btnText }}
    </button>
</div>
