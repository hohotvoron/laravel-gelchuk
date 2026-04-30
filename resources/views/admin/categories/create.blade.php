@extends('admin.layouts.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Создание категории</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Категории</a></li>
                    <li class="breadcrumb-item active">Создание</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Форма создания категории</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <form role="form" method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название категории <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="title" 
                                       id="title" 
                                       class="form-control @error('title') is-invalid @enderror" 
                                       placeholder="Введите название категории"
                                       value="{{ old('title') }}">
                                
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @else
                                    <small class="form-text text-muted">Введите название категории (обязательное поле)</small>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Сохранить
                            </button>
                            <a href="{{ route('categories.index') }}" class="btn btn-default">
                                <i class="fas fa-times"></i> Отмена
                            </a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
