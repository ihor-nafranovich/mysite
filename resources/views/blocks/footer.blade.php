<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>О сайте</h3>
                <p class="mb-4">
                    <img src="/assets/images/Professiya_web_razrabotchik.png" alt="Image placeholder" class="img-fluid">
                </p>

                <p>Пусть впереди лишь светлые дороги,<br>
                    И радость сердце каждый день наполнит.<br>
                    Успех пребудет в деле, что ты тронешь,<br>
                    И будущее счастьем новым взглянет.
                    <a href="/assets/#">Подробнее</a>
                </p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Последние статьи</h3>
                        <div class="post-entry-sidebar">
                            <ul>

                                @foreach ($latestArticles as $article)
                                    <li>
                                        <a href="{{route('article.show', [$article->category->slug, $article->slug])}}">
                                            <img src="/storage/{{$article->preview_image}}" alt="{{$article->title}}"
                                                class="mr-4">
                                            <div class="text">
                                                <h4>{{$article->title}}</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">{{ $article->formatted_published_at }} </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-4">

                        <div class="mb-5">
                            <h3>Быстрые ссылки</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{asset('about')}}">О нас</a></li>
                                <li><a href="{{asset('category.article', 'novosti')}}">Новости</a></li>
                                <li><a href="{{asset('category.index')}}">Категории</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h3>Social</h3>
                            <ul class="list-unstyled footer-social">
                                <li><a href="/assets/#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                <li><a href="/assets/#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                <li><a href="/assets/#"><span class="fa fa-instagram"></span> Instagram</a>
                                </li>
                                <li><a href="/assets/#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                                <li><a href="/assets/#"><span class="fa fa-youtube-play"></span> Youtube</a>
                                </li>
                                <li><a href="/assets/#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row">
            <div class="col-md-12 text-center">
                <p class="small">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All Rights Reserved | This template is made with <i
                        class="fa fa-heart text-danger" aria-hidden="true"></i> by <a
                        href="/assets/https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>--}}
</footer>
