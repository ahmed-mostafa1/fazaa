@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="inline" style="justify-content: space-between; margin-bottom: 20px;">
            <h2>إعدادات شريط الأخبار</h2>
            <span class="pill">News Ticker</span>
        </div>

        <form action="{{ route('admin.newsTicker.update') }}" method="POST" class="stack">
            @csrf

            <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 10px; border: 1px solid var(--border);">
                <label class="inline" style="cursor: pointer;">
                    <input type="checkbox" name="enabled" value="1" {{ $newsTicker['enabled'] ? 'checked' : '' }} style="width: auto;">
                    <span>تفعيل شريط الأخبار</span>
                </label>
                <p class="small" style="margin-top: 5px; margin-right: 25px;">عند التفعيل، سيظهر الشريط أسفل القائمة العلوية مباشرة في الصفحة الرئيسية.</p>
            </div>

            <div>
                <label>نص الخبر</label>
                <textarea name="content" rows="3" placeholder="اكتب النص هنا..." required>{{ $newsTicker['content'] }}</textarea>
            </div>

            <div class="grid">
                <div>
                    <label>لون الخلفية</label>
                    <div class="inline">
                        <input type="color" name="bg_color" value="{{ $newsTicker['bg_color'] }}" style="height: 50px; padding: 5px; width: 60px;">
                        <input type="text" name="bg_color" value="{{ $newsTicker['bg_color'] }}" dir="ltr">
                    </div>
                </div>
                <div>
                    <label>لون النص</label>
                    <div class="inline">
                        <input type="color" name="text_color" value="{{ $newsTicker['text_color'] }}" style="height: 50px; padding: 5px; width: 60px;">
                        <input type="text" name="text_color" value="{{ $newsTicker['text_color'] }}" dir="ltr">
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="actions">
                <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
            </div>
        </form>
    </div>
@endsection
