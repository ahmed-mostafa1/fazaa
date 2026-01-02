@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>إعدادات الفوتر</h2>
        <form class="stack" action="{{ route('admin.footer.updateSettings') }}" method="POST">
            @csrf
            <div>
                <label>وصف الفوتر</label>
                <textarea name="description" placeholder="النص الذي يظهر تحت الشعار">{{ $footerSettings['description'] ?? '' }}</textarea>
            </div>
            <div>
                <label>نص حقوق النشر</label>
                <input type="text" name="copyright_text" value="{{ $footerSettings['copyright_text'] ?? '' }}">
            </div>
            <div class="actions">
                <button class="btn btn-primary" type="submit">حفظ الإعدادات</button>
            </div>
        </form>
    </div>

    <div class="card">
        <h2>روابط التواصل الاجتماعي</h2>
        <p class="muted">أيقونات تظهر في الفوتر وفي صفحة التواصل.</p>
        
        <table style="width: 100%; text-align: right; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
                <tr style="border-bottom: 1px solid var(--border);">
                    <th style="padding: 10px;">الأيقونة</th>
                    <th style="padding: 10px;">الرابط</th>
                    <th style="padding: 10px;">إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($socialLinks as $link)
                    <tr style="border-bottom: 1px solid var(--border);">
                        <td style="padding: 10px;"><i class="{{ $link->icon }}"></i> <span class="muted small">({{ $link->icon }})</span></td>
                        <td style="padding: 10px;"><a href="{{ $link->url }}" target="_blank" style="color: var(--accent-2);">{{ Str::limit($link->url, 40) }}</a></td>
                        <td style="padding: 10px;">
                            <form action="{{ route('admin.footer.destroySocial', $link->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('حذف هذا الرابط؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="background: rgba(239,68,68,0.2); color: #fecdd3; border: none; padding: 5px 10px; cursor: pointer;">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="padding: 20px; text-align: center;">لا توجد روابط مضافة.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <hr class="divider">
        
        <h3>إضافة رابط جديد</h3>
        <form class="stack" action="{{ route('admin.footer.storeSocial') }}" method="POST">
            @csrf
            <div class="grid">
                <div>
                    <label>الأيقونة (FontAwesome)</label>
                    <input type="text" name="icon" placeholder="fa-brands fa-twitter" required>
                </div>
                <div>
                    <label>الرابط</label>
                    <input type="text" name="url" placeholder="https://twitter.com/..." required>
                </div>
                <div>
                    <label>المنصة (اختياري)</label>
                    <input type="text" name="platform" placeholder="Twitter">
                </div>
            </div>
            <div class="actions">
                <button class="btn btn-primary" type="submit">إضافة الرابط</button>
            </div>
        </form>
    </div>
@endsection
