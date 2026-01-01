@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>قسم كيف نعمل</h2>
        <p class="muted">نموذج لإدارة العنوان والوصف والخطوات الأربع.</p>
        <form class="stack" action="{{ route('admin.steps.update') }}" method="POST">
            @csrf
            <div class="grid">
                <div>
                    <label>العنوان</label>
                    <input type="text" name="title" value="{{ old('title', $steps['title'] ?? '') }}" placeholder="مثال: كيف نعمل؟">
                </div>
                <div>
                    <label>وصف قصير</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle', $steps['subtitle'] ?? '') }}" placeholder="أربع خطوات بسيطة بينك وبين إنهاء معاملتك">
                </div>
            </div>

            <div class="grid">
                @foreach ($steps['steps'] ?? [] as $i => $step)
                    <div>
                        <label>الخطوة {{ $i + 1 }} - رقم</label>
                        <input type="text" name="steps[{{ $i }}][number]" value="{{ old('steps.' . $i . '.number', $step['number'] ?? '') }}" placeholder="0{{ $i + 1 }}">
                        <label>الخطوة {{ $i + 1 }} - نص</label>
                        <textarea name="steps[{{ $i }}][text]" placeholder="وصف قصير للخطوة {{ $i + 1 }}">{{ old('steps.' . $i . '.text', $step['text'] ?? '') }}</textarea>
                    </div>
                @endforeach
            </div>

            <div class="grid">
                <div>
                    <label>عنوان الملاحظة</label>
                    <input type="text" name="note_title" value="{{ old('note_title', $steps['note_title'] ?? '') }}" placeholder="ملحوظة هامة">
                </div>
                <div>
                    <label>نص الملاحظة</label>
                    <textarea name="note_text" placeholder="نص الملاحظة">{{ old('note_text', $steps['note_text'] ?? '') }}</textarea>
                </div>
            </div>

            <div class="actions">
                <button class="btn btn-secondary" type="reset">تفريغ الحقول</button>
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>
@endsection
