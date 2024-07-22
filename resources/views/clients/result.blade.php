@extends('clients.layouts.master')

@section('title')
    {{ $loaitin_name }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="h5 section-title">Chuyên Mục: {{ $loaitin_name }}</h2>
                    @foreach ($listtin as $t)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="/theme/images/post/post-7.jpg" class="card-img" alt="post-thumb"
                                            style="height:200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="mb-3">{{ $t->title }}</h3>
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <span>{{ $t->user_name }}</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-timer"></i>{{ $t->created_at }}
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-tag"></i>{{ $t->loaitin_name }}
                                        </li>
                                    </ul>
                                    <p>{{ $t->tomtat }}</p>
                                    <a href="{{ url('/tin', [$t->id]) }}" class="btn btn-outline-primary">Xem Ngay</a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    {{ $listtin->links('vendor.pagination.custom-pagination') }}
                </div>
            </div>
        </div>
    </section>
@endsection
