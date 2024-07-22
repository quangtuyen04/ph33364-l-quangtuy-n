@extends('clients.layouts.master')

@section('title', 'Liên Hệ')

@section('content')
    <section class="section pb-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h2 class="h5 section-title">Liên Hệ Với Chúng Tôi:</h2>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label for="name">Họ Tên:</label>
                            <input type="text" name="name" class="form-control" id="name" required placeholder="Nhập họ tên...">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email..." required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="lydo">Lý Do:</label>
                            <input type="text" name="lydo" class="form-control" id="lydo" placeholder="Nhập lý do...">
                        </div>
                        <div class="form-group">
                            <label for="chitiet">Chi Tiết:</label>
                            <textarea name="chitiet" class="form-control" id="chitiet" placeholder="Nhập nội dung chi tiết..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
