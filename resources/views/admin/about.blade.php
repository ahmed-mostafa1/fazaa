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
            <div class="card" style="background: rgba(255,255,255,0.02); border-color: var(--border);">
                <h3 style="margin-top:0;">ميزاتنا (Features)</h3>
                <p class="muted">تم نقل إدارة الميزات إلى صفحة منفصلة.</p>
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">إدارة الميزات</a>
            </div>
            <div class="actions">
                <button class="btn btn-secondary" type="reset">تفريغ الحقول</button>
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const list = document.getElementById('featuresList');
            const addButton = document.getElementById('addFeature');
            if (!list || !addButton) return;

            const createFeature = (index) => {
                return `
                    <div class="feature-form" data-feature>
                        <label>Icon class</label>
                        <input type="text" name="features[${index}][icon]" placeholder="fa-solid fa-bolt">
                        <label>Title</label>
                        <input type="text" name="features[${index}][title]" placeholder="Feature title">
                        <label>Text</label>
                        <textarea name="features[${index}][text]" placeholder="Short text"></textarea>
                        <div class="actions">
                            <button class="btn btn-secondary" type="button" data-remove-feature>Remove feature</button>
                        </div>
                        <hr class="divider">
                    </div>
                `;
            };
            addButton.addEventListener('click', () => {
                const index = list.querySelectorAll('[data-feature]').length;
                list.insertAdjacentHTML('beforeend', createFeature(index));
            });

            list.addEventListener('click', (event) => {
                const target = event.target;
                if (target.matches('[data-remove-feature]')) {
                    const block = target.closest('[data-feature]');
                    if (block && list.children.length > 1) {
                        block.remove();
                    }
                }
            });
        });
    </script>
@endsection






