@extends('layout.main')

@section('container')
{{-- Slider --}}
<div id="head" class="parallax-container scrollspy">
    <div class="parallax"><img src="https://source.unsplash.com/1920x1280?coffeeshop" alt="coffeeshop"></div>
    <div class="head">
        <div class="row">
            <div class="col m6 light">
                
            </div>
            <div class="col m6 light white-text headertext">
                <h2 class="light white-text" style="text-align:right"> {{ $head->title }}</h2>
                <h6>
                    {!! $head->article !!}
                </h6>
            </div>
        </div>
    </div>
</div>

{{-- About Us --}}
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light ">{{ $about->main_title }}</h3>
                <div class=" m6 light">
                    <h5>{{ $about->title }}</h5>
                    {!! $about->article !!}
                </div>
            </div>
        </div>
    </section>
{{-- Parallax/concept --}}
<div id="concept" class="parallax-container scrollspy">
    <div class="slider ">
        <ul class="slides">
        @foreach ($concept as $conceptm)
            <li>
                <img src="https://source.unsplash.com/1920x1280?{{ $conceptm['img'] }}" class="card-img-top" alt="{{ $conceptm['img'] }}"> <!-- random image -->
                <div class="caption right-align">
                <h3>{{ $conceptm['title'] }}</h3>
                <h5 class="light grey-text text-lighten-3">{{ $conceptm['slogan'] }}</h5>
                </div>
            </li>       
        @endforeach
        </ul>
    </div>
</div>
{{-- MENUS --}}
<section id="menus" class="menus scrollspy">
    <div  class="container">
        <h3 class="light center">Our Signatures</h3>
        <div class="row ">
            <div class="row">
                @foreach ($menu as $menum)
                <div class="col m3 s12">
                    <img src="https://source.unsplash.com/500x500?{{ $menum['menu_img'] }}" class="responsive-img materialboxed" alt="{{ $menum['menu_img'] }}"> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- plan --}}

<section id="services" class="services grey lighten-2 scrollspy">
    <div class="container">
        <div class="row">
            <h3 class="light center ">Plan</h3>
            <div class="col m3 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">all_inclusive</i>
                    <h5>ini 1</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam molestias maiores itaque nihil. Perspiciatis maiores dolor voluptatem quis enim.</p>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">beach_access</i>
                    <h5>ini 2</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam molestias maiores itaque nihil. Perspiciatis maiores dolor voluptatem quis enim.</p>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">call_split</i>
                    <h5>ini 3</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam molestias maiores itaque nihil. Perspiciatis maiores dolor voluptatem quis enim.</p>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">credit_card</i>
                    <h5>ini 4</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam molestias maiores itaque nihil. Perspiciatis maiores dolor voluptatem quis enim.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Parallax/team --}}
    <div id="team" class="parallax-container scrollspy" style="height: 20%" style="">
        <div class="parallax " style="filter:grayscale(1)"><img src="https://source.unsplash.com/1920x1280?anime" alt="anime"></div>

        <div class="container" >
            <h3 class="center light white-text">Our team</h3>
            <div class="row team1">
                @foreach ($team as $teamm)
                <div class="col m3 center">
                    <img src="https://source.unsplash.com/150x150?{{ $teamm['face_img'] }}" alt="{{ $teamm['face_img'] }}"> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- Contact Us --}}
<section id="contact" class="contact grey lighten-2 scrollspy">
    <div class="container">
        <h3 class="light">Contact Us</h3>
        <div class="row">
            <div class="col m5 s12">
                <div class="card-panel blue darken-4 center white-text">
                    <i class="material-icons">email</i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur iusto nesciunt mollitia sunt aliquam velit, laudantium perferendis eum nulla itaque.</p>
                </div>
                <ul class="collection with-header">
                    <li class="collection-header center"><h4>Our Headquarter</h4></li>
                    <li class="collection-item">dimana mana</li>
                    <li class="collection-item">Lorem ipsum dolor sit amet.</li>
                    <li class="collection-item">Lorem ipsum dolor sit amet consectetur.</li>
 
                </ul>
            </div>

            <div class="col m7 s12">
                <form action="">
                    <div class="card-panel">
                        <h5>gatau form buat apaan ini</h5>
                        <div class="input-field">
                            <input id="name" name="name" type="text" class="validate" >
                            <label for="name">Last Name</label>
                        </div>
                        <div class="input-field">
                            <textarea id="message" name="message" type="text" class="materialize-textarea" ></textarea>
                            <label for="message">message</label>
                        </div>
                        <button type="submit" class="btn blue darken-4">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

