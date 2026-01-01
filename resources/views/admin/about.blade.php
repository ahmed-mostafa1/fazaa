@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>قسم من نحن</h2>
        <p class="muted">هيكل لإدارة النص التعريفي وبطاقات الرؤية والرسالة والقيم.</p>
        <form class="stack" action="{{ route('admin.about.update') }}" method="POST">
            @csrf
            <div>
                <label>فقرة تعريفية</label>
                <textarea name="intro" placeholder="اكتب وصفاً عاماً للمكتب وخدماته">{{ old('intro', $about['intro'] ?? '') }}</textarea>
            </div>
            <div class="grid">
                <div>
                    <label>عنوان الرؤية</label>
                    <input type="text" name="vision_title" value="{{ old('vision_title', $about['vision_title'] ?? '') }}" placeholder="الرؤية">
                    <label>نص الرؤية</label>
                    <textarea name="vision_text" placeholder="نص مختصر يوضح الرؤية">{{ old('vision_text', $about['vision_text'] ?? '') }}</textarea>
                </div>
                <div>
                    <label>عنوان الرسالة</label>
                    <input type="text" name="mission_title" value="{{ old('mission_title', $about['mission_title'] ?? '') }}" placeholder="الرسالة">
                    <label>نص الرسالة</label>
                    <textarea name="mission_text" placeholder="نص مختصر يوضح الرسالة">{{ old('mission_text', $about['mission_text'] ?? '') }}</textarea>
                </div>
                <div>
                    <label>عنوان القيم</label>
                    <input type="text" name="values_title" value="{{ old('values_title', $about['values_title'] ?? '') }}" placeholder="قيمنا">
                    <label>قائمة القيم (سطر لكل قيمة)</label>
                    <textarea name="values_list" placeholder="مثال:
الخصوصية والأمان
العلاقات طويلة الأمد
المهنية والاحترافية">{{ old('values_list', implode("\n", $about['values_list'] ?? [])) }}</textarea>
                </div>
            </div>
            <div class="actions">
                <button class="btn btn-secondary" type="reset">تفريغ الحقول</button>
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>
@endsection
