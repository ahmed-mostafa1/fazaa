<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول المشرف</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { margin:0; font-family:'Cairo', system-ui, sans-serif; background:#0f172a; display:grid; place-items:center; min-height:100vh; color:#e2e8f0; }
        .card { width: min(420px, 92vw); background:#1e293b; border:1px solid rgba(255,255,255,0.08); border-radius:16px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,0.35); }
        h1 { margin:0 0 8px; font-size:1.25rem; }
        p { margin:0 0 18px; color:#cbd5e1; }
        label { display:block; margin-bottom:6px; font-weight:700; }
        input { width:100%; padding:12px 14px; border-radius:10px; border:1px solid rgba(255,255,255,0.08); background:rgba(255,255,255,0.03); color:#fff; margin-bottom:14px; }
        .btn { width:100%; border:none; padding:12px 16px; border-radius:10px; background:#22c55e; color:#0f172a; font-weight:700; cursor:pointer; }
        .errors { background:rgba(239,68,68,0.12); border:1px solid rgba(239,68,68,0.4); color:#fecdd3; padding:10px 12px; border-radius:10px; margin-bottom:12px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>تسجيل دخول المشرف</h1>
        <p>ادخل بيانات الدخول للوحة التحكم.</p>

        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <label>اسم المستخدم</label>
            <input type="text" name="username" value="{{ old('username') }}" placeholder="admin" required>

            <label>كلمة المرور</label>
            <input type="password" name="password" placeholder="••••••••" required>

            <button class="btn" type="submit">دخول</button>
        </form>
    </div>
</body>
</html>
