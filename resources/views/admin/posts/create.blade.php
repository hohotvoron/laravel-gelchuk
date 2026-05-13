
@extends('admin.layouts.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Создание статьи</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Статьи</a></li>
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
                        <h3 class="card-title">Форма создания статьи</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <form role="form" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название статьи <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="title" 
                                       id="title" 
                                       class="form-control @error('title') is-invalid @enderror" 
                                       placeholder="Введите название статьи"
                                       value="{{ old('title') }}">
                                
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @else
                                    <small class="form-text text-muted">Введите название статьи (обязательное поле)</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Цитата</label>
                                <textarea name="description" id="description" class="form-control" rows="3"
                                placeholder="Цитата..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Текст статьи</label>
                                <textarea name="content" id="content" class="form-control" rows="7"
                                placeholder="Текст статьи..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $k=>$v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Теги</label>
                                <select multiple name="tags[]" id="tags" class="select2"  data-placeholder="Выбор тегов"
                                style="width: 100%; color:black" >
                                    @foreach($tags as $k=>$v)
                                        <option value="{{ $k }}" >{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                        <label for="thumbnail">Изображение</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                                <label type="file" name="thumbnail" class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                            
                        </div>
                        <!-- /.card-body -->
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Сохранить
                            </button>
                            <a href="{{ route('posts.index') }}" class="btn btn-default">
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
