@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>قسم البداية (الهيرو)</h2>
        <p class="muted">تحكم في العنوان الرئيسي والوصف وأزرار الدعوة لاتخاذ إجراء.</p>
        <form class="stack" action="{{ route('admin.hero.update') }}" method="POST">
            @csrf
            <div class="grid">
                <div>
                    <label>العنوان الرئيسي</label>
                    <input type="text" name="title" value="{{ old('title', $hero['title'] ?? '') }}" placeholder="مثال: إنهاء معاملاتك الحكومية بسهولة وسرعة">
                </div>
                <div>
                    <label>كلمة مميزة</label>
                    <input type="text" name="highlight" value="{{ old('highlight', $hero['highlight'] ?? '') }}" placeholder="مثال: سهولة وسرعة">
                </div>
            </div>
            <div>
                <label>وصف قصير</label>
                <textarea name="description" placeholder="اكتب وصفاً موجزاً للقسم الافتتاحي">{{ old('description', $hero['description'] ?? '') }}</textarea>
            </div>
            <div class="grid">
                <div>
                    <label>نص الزر الأول</label>
                    <input type="text" name="cta_primary_text" value="{{ old('cta_primary_text', $hero['cta_primary_text'] ?? '') }}" placeholder="مثال: ابدأ معاملتك الآن">
                </div>
                <div>
                    <label>رابط الزر الأول</label>
                    <input type="text" name="cta_primary_link" value="{{ old('cta_primary_link', $hero['cta_primary_link'] ?? '') }}" placeholder="#contact">
                </div>
                <div>
                    <label>نص الزر الثاني</label>
                    <input type="text" name="cta_secondary_text" value="{{ old('cta_secondary_text', $hero['cta_secondary_text'] ?? '') }}" placeholder="مثال: استكشف الخدمات">
                </div>
                <div>
                    <label>رابط الزر الثاني</label>
                    <input type="text" name="cta_secondary_link" value="{{ old('cta_secondary_link', $hero['cta_secondary_link'] ?? '') }}" placeholder="#services">
                </div>
            </div>
            <div class="actions">
                <button class="btn btn-secondary" type="reset">تفريغ الحقول</button>
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>
@endsection
