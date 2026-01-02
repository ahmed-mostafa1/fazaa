@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>إضافة ميزة جديدة</h2>
        <form class="stack" action="{{ route('admin.features.store') }}" method="POST">
            @csrf
            <div>
                <label>العنوان</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="عنوان الميزة" required>
            </div>
            <div>
                <label>النص</label>
                <textarea name="text" placeholder="وصف الميزة">{{ old('text') }}</textarea>
            </div>
            <div>
                <label>أيقونة (FontAwesome)</label>
                <input type="text" name="icon" value="{{ old('icon') }}" placeholder="fa-solid fa-bolt">
            </div>
            <div class="actions">
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">إلغاء</a>
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>
@endsection
