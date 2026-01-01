@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>تغيير كلمة المرور</h2>
        <p class="muted">حدث كلمة مرور حساب المشرف الحالي.</p>

        @if ($errors->any())
            <div class="card" style="border-color: rgba(239,68,68,0.6); background: rgba(239,68,68,0.08); color: #fecdd3;">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form class="stack" action="{{ route('admin.password.update') }}" method="POST">
            @csrf
            <div>
                <label>كلمة المرور الحالية</label>
                <input type="password" name="current_password" placeholder="أدخل كلمة المرور الحالية" required>
            </div>
            <div class="grid">
                <div>
                    <label>كلمة المرور الجديدة</label>
                    <input type="password" name="new_password" placeholder="كلمة مرور جديدة" required>
                </div>
                <div>
                    <label>تأكيد كلمة المرور الجديدة</label>
                    <input type="password" name="new_password_confirmation" placeholder="تأكيد كلمة المرور" required>
                </div>
            </div>
            <div class="actions">
                <button class="btn btn-primary" type="submit">تحديث</button>
            </div>
        </form>
    </div>
@endsection
