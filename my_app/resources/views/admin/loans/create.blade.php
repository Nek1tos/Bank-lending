@extends('layouts.admin')

@section('title', 'Адмін: Додати кредит')
@section('page_title', 'Додати кредит')
@section('page_description', 'Створення нового кредитного продукту.')

@section('hero_buttons')
    <a href="{{ route('admin.loans.index') }}">Повернутися до списку</a>
@endsection

@section('content')
<div class="form-card">
    @if($errors->any())
        <div style="margin-bottom: 20px; color: #b02a37; background: #f8d7da; padding: 14px; border-radius: 6px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.loans.store') }}" method="POST">
        @csrf

        <label>Назва кредиту</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span style="color: #b02a37; display: block; margin-top: -10px; margin-bottom: 16px;">{{ $message }}</span>
        @enderror

        <label>Ставка (%)</label>
        <input type="number" name="rate" value="{{ old('rate') }}" step="0.01" min="0" required>
        @error('rate')
            <span style="color: #b02a37; display: block; margin-top: -10px; margin-bottom: 16px;">{{ $message }}</span>
        @enderror

        <label>Термін (місяців)</label>
        <input type="number" name="term" value="{{ old('term') }}" step="1" min="1" required>
        @error('term')
            <span style="color: #b02a37; display: block; margin-top: -10px; margin-bottom: 16px;">{{ $message }}</span>
        @enderror

        <label>Сума</label>
        <input type="number" name="amount" value="{{ old('amount') }}" step="0.01" min="1" required>
        @error('amount')
            <span style="color: #b02a37; display: block; margin-top: -10px; margin-bottom: 16px;">{{ $message }}</span>
        @enderror

        <div class="form-actions">
            <button type="submit">Зберегти</button>
            <a href="{{ route('admin.loans.index') }}" class="secondary">Скасувати</a>
        </div>
    </form>
</div>
@endsection