@extends('layouts.admin')

@section('title', 'Адмін: Деталі кредиту')
@section('page_title', 'Деталі кредиту')
@section('page_description', 'Перегляд інформації по кредиту.')

@section('content')
<div class="form-card">
    <div class="icon">💳</div>
    <h3 style="margin-bottom: 12px;">{{ $loan->name }}</h3>
    <p><strong>ID:</strong> {{ $loan->id }}</p>
    <p><strong>Ставка:</strong> {{ $loan->rate }}</p>
    <p><strong>Термін:</strong> {{ $loan->term }}</p>
    <p><strong>Сума:</strong> {{ $loan->amount }}</p>
    <div class="form-actions" style="margin-top: 20px;">
        <a href="{{ route('admin.loans.index') }}">Назад до списку</a>
        <a href="{{ route('admin.loans.edit', $loan) }}" class="secondary">Редагувати</a>
    </div>
</div>
@endsection