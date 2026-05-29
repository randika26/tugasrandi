<x-app-layout>
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('customers.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>

        <div class="col-md-6">
            <x-card title="Tambah Customer" subtitle="Masukkan data pelanggan baru">
                <form action="{{ route('customers.store') }}" method="post">
                    
                   @csrf <div class="mb-3">
                        <label for="kode_customer" class="form-label">Kode Customer</label>
                        <input type="text" name="kode_customer" id="kode_customer" class="form-control @error('kode_customer') is-invalid @enderror" value="{{ old('kode_customer') }}">
                        @error('kode_customer') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama_customer" class="form-label">Nama Customer</label>
                        <input type="text" name="nama_customer" id="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror" value="{{ old('nama_customer') }}">
                        @error('nama_customer') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Customer</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}">
                        @error('no_telp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Customer</button>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>