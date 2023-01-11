@extends('layout.admin')

@section('main-content')
    <!-- Page Heading -->

    <div class="card">
        <div class="card-header">
          <strong>Tambah Tanggal</strong>
        </div>
        <div class="card-body card-block">
          <form action="{{ route('service.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <div class="form-group">
                <label for="name" class="form-control-label">Nama Service</label>
                <input  type="text"
                        name="name" 
                        value="{{ old('name') }}" 
                        class="form-control @error('name') is-invalid @enderror"/>
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
              </div>
              
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">
                Tambah Service
              </button>
            </div>
          </form>
        </div>
      </div>
    

@endsection

