@extends('layouts.app')

@section('content')
<!-- List of Courses -->
<section class="course-home-2 padding-top-115 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center margin-bottom-40">
                    <h2 class="home-2">Liste des cours</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="popular-course-tab">
                    <ul>
                        <li class="active" data-filter="*">Tous les cours</li>
                        @foreach($categories as $cat)
                            <li data-filter=".{{  $cat->id }}">{{ $cat->libelle }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row grid">
            @foreach($formations as $cours)
                <div class="col-lg-4 col-md-6 grid-item {{ $cours->categorie->id  }}">
                    <div class="single-course-item">
                        <div class="course-image">
                            <img src="{{ $cours->image }}" alt="image">
                        </div>
                        <div class="course-content margin-top-30">
                            <div class="course-title">
                                <h4 class="home-2">{{ $cours->titre }}</h4>
                            </div>
                            <div class="course-instructor-rating margin-top-20">
                                <div class="course-instructor">
                                    <img src="{{ $cours->user->photo }}" alt="instructor">
                                    <h6>{{ $cours->user->nom }} {{ $cours->user->prenom }}</h6>
                                </div>
                            </div>
                            <div class="course-info margin-top-20">
                                <div class="course-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>{{ $cours->duree }}</span>
                                </div>
                            </div>
                            <div class="course-price-cart margin-top-20">
                                <div class="course-price">
                                    <span class="span-big">{{ $cours->prix }} €</span>
                                </div>
                            </div>
                        </div>
                        <div class="hover-state">
                            <span class="heart-icon"><i class="fa fa-heart-o"></i></span>
                            <span class="title-tag">creé par {{ $cours->user->nom }} {{ $cours->user->prenom }}</span>
                            <div class="course-title margin-top-10">
                                <h4 class="home-2"><a href="{{ route("formation.show", $cours) }}">{{ $cours->titre }}</a></h4>
                            </div>
                            <div class="course-price-info margin-top-20">
                                <span class="course-category"><a href="#">{{ $cours->categorie->libelle  }}</a></span>
                                <span class="course-price">{{ $cours->prix }} €</span>
                            </div>
                            <div class="course-info margin-top-30">
                                <div class="course-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>{{ $cours->duree }}</span>
                                </div>
                            </div>
                            <p class="margin-top-20">{{ $cours->description }}</p>
                            <div class="preview-button margin-top-20">
                                <a href="{{ route("formation.show", $cours) }}" class="template-button">Detail du cours</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

