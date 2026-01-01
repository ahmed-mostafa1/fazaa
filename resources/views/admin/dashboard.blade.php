@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>مرحباً بك</h2>
        <p class="muted">هذه لوحة تحكم بسيطة لإدارة محتوى الصفحة الرئيسية. استخدم الروابط بالأعلى لفتح كل قسم على حدة وتعبئة الحقول المطلوبة.</p>
        <hr class="divider">
        <div class="grid">
            <div class="pill">قسم البداية</div>
            <div class="pill">من نحن</div>
            <div class="pill">كيف نعمل</div>
            <div class="pill">الخدمات (3 تبويبات)</div>
            <div class="pill">التواصل</div>
        </div>
    </div>
@endsection
