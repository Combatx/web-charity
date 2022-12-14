@extends('layouts.app')

@section('title', 'Kategori')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}"> Kategori</a></li>
    <li class="breadcrumb-item active"> Edit</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <x-card>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name=" name" required
                            value="{{ old('name') ?? $category->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <x-slot name="footer">
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button class="btn btn-primary">Simpan</button>
                    </x-slot>
                </x-card>
            </form>
        </div>
    </div>
@endsection

@push('script')
@endpush
