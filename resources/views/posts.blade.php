@extends('layouts.home')

@section('content')
    @include('layouts.parts.header')
    <div role="main" class="main">

        @include('layouts.parts.page_header_posts')

        <hr class="m-0">

        <div class="container py-5 mt-3">

            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-7 mb-0">Showing results for <strong
                            class="font-weight-extra-bold">test</strong></h2>
                    <p class="lead mb-0">6 results found.</p>
                </div>
            </div>
            <div class="row">
                <div class="col pt-2 mt-1">
                    <hr class="my-4">
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <ul class="simple-post-list m-0">
                        <li>
                            <div class="post-info">
                                <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    <span class="text-dark text-uppercase font-weight-semibold">Page</span> | Nov 10,
                                    2018
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    <span class="text-dark text-uppercase font-weight-semibold">Post</span> | Nov 10,
                                    2018
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                <div class="post-meta">
                                    <span class="text-dark text-uppercase font-weight-semibold">Post</span> | Nov 10,
                                    2018
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    <span class="text-dark text-uppercase font-weight-semibold">Page</span> | Nov 10,
                                    2018
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    <span class="text-dark text-uppercase font-weight-semibold">Page</span> | Nov 10,
                                    2018
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                <div class="post-meta">
                                    <span class="text-dark text-uppercase font-weight-semibold">Page</span> | Nov 10,
                                    2018
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="pagination float-right">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </ul>

                </div>
            </div>
        </div>

        <section class="section section-default border-0 m-0">
            <div class="container py-4">

                <div class="row pb-4">
                    <div class="col">
                        <form action="page-search-results.html" method="get">
                            <div class="input-group input-group-lg">
                                <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                                <span class="input-group-append">
											<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
										</span>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

    </div>
    @include('layouts.parts.footer')
@endsection
