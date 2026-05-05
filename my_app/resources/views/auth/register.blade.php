<x-guest-layout>
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #009245; font-size: 24px; margin-bottom: 5px;">Створити новий аккаунт</h2>
        <p style="color: #666; font-size: 14px;">УкрБанк - видача кредитів онлайн</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div style="margin-bottom: 16px;">
            <label style="display: block; font-weight: 600; color: #333; margin-bottom: 6px;">ПІБ</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
            @error('name')
                <p style="color: #dc3545; font-size: 13px; margin-top: 4px;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div style="margin-bottom: 16px;">
            <label style="display: block; font-weight: 600; color: #333; margin-bottom: 6px;">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
            @error('email')
                <p style="color: #dc3545; font-size: 13px; margin-top: 4px;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div style="margin-bottom: 16px;">
            <label style="display: block; font-weight: 600; color: #333; margin-bottom: 6px;">Пароль</label>
            <input type="password" name="password" required style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
            @error('password')
                <p style="color: #dc3545; font-size: 13px; margin-top: 4px;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div style="margin-bottom: 16px;">
            <label style="display: block; font-weight: 600; color: #333; margin-bottom: 6px;">Підтвердіть пароль</label>
            <input type="password" name="password_confirmation" required style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
            @error('password_confirmation')
                <p style="color: #dc3545; font-size: 13px; margin-top: 4px;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Create Account Button -->
        <button type="submit" style="width: 100%; background: #009245; color: white; padding: 10px; border: none; border-radius: 4px; font-size: 15px; font-weight: 600; cursor: pointer; margin-bottom: 16px;">
            Створити аккаунт
        </button>
    </form>

    <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd;">
        <p style="color: #666; margin-bottom: 10px; font-size: 14px;">Вже маєте аккаунт?</p>
        <a href="{{ route('login') }}" style="display: inline-block; background: #f0f0f0; color: #009245; padding: 10px 28px; border-radius: 4px; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #ddd;">
            Увійти
        </a>
    </div>
</x-guest-layout>
