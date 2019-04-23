@extends('layouts.site_app')

<style>

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                border-bottom: 1px solid #d0cfcf5e;
                width: 100%;
            }

            .position-ref {
                position: absolute;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                /* margin-bottom: 30px; */
            }
</style>
@section('banner')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('image/imagep1.jpg') }}"></div>
<section>
    <div class="container desc" id="cursor">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
</section>

<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('image/nature4.jpg') }}"></div>

<section>
    <div class="container desc" id="cursor">
        <p>sample33</p>
    </div>
</section>

<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('image/imagep2.jpg') }}"></div>

   
@endsection