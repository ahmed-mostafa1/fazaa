@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>تعديل الميزة</h2>
        <form class="stack" action="{{ route('admin.features.update', $feature->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>العنوان</label>
                <input type="text" name="title" value="{{ old('title', $feature->title) }}" placeholder="عنوان الميزة" required>
            </div>
            <div>
                <label>النص</label>
                <textarea name="text" placeholder="وصف الميزة">{{ old('text', $feature->text) }}</textarea>
            </div>
            <div>
                <label>أيقونة (FontAwesome)</label>
                <input type="text" name="icon" value="{{ old('icon', $feature->icon) }}" placeholder="fa-solid fa-bolt">
            </div>
            <div class="actions">
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">إلغاء</a>
                <button class="btn btn-primary" type="submit">تحديث</button>
            </div>
        </form>
    </div>
@endsection
