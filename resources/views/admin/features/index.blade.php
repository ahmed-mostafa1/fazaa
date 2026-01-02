@extends('admin.layout')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2>ميزاتنا</h2>
            <a href="{{ route('admin.features.create') }}" class="btn btn-primary">إضافة ميزة جديدة</a>
        </div>
        
        @if(session('status'))
            <div class="alert success">{{ session('status') }}</div>
        @endif

        <table style="width: 100%; text-align: right; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 1px solid var(--border);">
                    <th style="padding: 10px;">ID</th>
                    <th style="padding: 10px;">العنوان</th>
                    <th style="padding: 10px;">النص</th>
                    <th style="padding: 10px;">الأيقونة</th>
                    <th style="padding: 10px;">إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($features as $feature)
                    <tr style="border-bottom: 1px solid var(--border);">
                        <td style="padding: 10px;">{{ $feature->id }}</td>
                        <td style="padding: 10px;">{{ $feature->title }}</td>
                        <td style="padding: 10px;">{{ Str::limit($feature->text, 50) }}</td>
                        <td style="padding: 10px;"><i class="{{ $feature->icon }}"></i></td>
                        <td style="padding: 10px;">
                            <a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-secondary btn-sm">تعديل</a>
                            <form action="{{ route('admin.features.destroy', $feature->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('هل أنت متأكد؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="background: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 20px; text-align: center;">لا توجد ميزات مضافة حالياً.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
