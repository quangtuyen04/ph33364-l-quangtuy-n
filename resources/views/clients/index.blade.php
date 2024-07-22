@extends('clients.layouts.master')

@section('title')
    home
@endsection

@section('content')
    <section class="section pb-0 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>
                    <article class="card mb-4">
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="#">Advice From a Twenty
                                    Something</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="card-meta-author">
                                        <img src="/theme/images/john-doe.jpg">
                                        <span>Mark Dinn</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="#">Decorate</a></li>
                                        <li class="list-inline-item"><a href="#">Creative</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>
                                It’s no secret that the digital industry is booming. From exciting startups to global
                                brands, companies
                                are reaching out to digital agencies, responding to the new possibilities available.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>


                    <ul class="pagination justify-content-center">
                        <li class="page-item page-item active ">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
                <aside class="col-lg-4 sidebar-home">
                    <!-- Search -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Tìm Kiếm</span></h4>
                        <form action="#!" class="widget-search">
                            <input class="mb-3" id="search-query" name="s" type="search"
                                placeholder="Tìm Kiếm....">
                            <i class="ti-search"></i>
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </form>
                    </div>

                    <!-- recent post -->
                    <!-- Top 5 Tin Có Lượt Xem Nhiều Nhất -->
                    <div class="widget">
                        <h4 class="widget-title">Top 5 Có Lượt Xem Nhiều Nhất</h4>

                        @foreach ($topPosts as $post)
                            <article class="widget-card">
                                <div class="d-flex">
                                    <img class="card-img-sm" src="/theme/images/john-doe.jpg">
                                    <!-- Thay bằng trường hình ảnh của bạn -->
                                    <div class="ml-3">
                                        <h5><a class="post-title" href="{{ route('post.detail', $post->id) }}">{{ $post->title }}</a></h5>
                                        <ul class="card-meta list-inline mb-0">
                                            <li class="list-inline-item mb-0">
                                                <i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
