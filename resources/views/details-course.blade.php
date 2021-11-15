@extends('layouts.app')

@section('content')

<!-- Course Details Section Starts -->
<section class="course-details-section padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="course-details-sidebar">
                    <div class="course-details-widget">
                        <div class="course-widget-title">
                            <h4>Details du cours</h4>
                        </div>
                        <div class="course-widget-items">
                            <div class="single-item">
                                <div class="item-left">
                                    <span><i class="fa fa-usd"></i> prix</span>
                                </div>
                                <div class="item-right">
                                    <span>{{ $formation->prix }} €</span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="item-left">
                                    <span><i class="fa fa-user-circle"></i> formateur</span>
                                </div>
                                <div class="item-right">
                                    <span>{{ $formation->user->nom }} {{ $formation->user->prenom }}</span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="item-left">
                                    <span><i class="fa fa-clock-o"></i> durée</span>
                                </div>
                                <div class="item-right">
                                    <span>{{ $formation->duree }}</span>
                                </div>
                            </div>

                            <div class="single-item">
                                <div class="item-left">
                                    <span><i class="fa fa-language"></i> langue</span>
                                </div>
                                <div class="item-right">
                                    <span>français</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="course-details-title">
                    <h2>{{ $formation->categorie->libelle }}</h2>
                </div>
                <div class="course-details-tab">
                    <div class="tab">
                        <ul>
                            <li class="tab-one active">
                                <span>overview</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content margin-top-30">
                        <div class="tab-one-content tab-content-bg overview-content lost active">
                            <h4>Description du cours</h4>
                            <div class="overview-video margin-top-30">
                                <img src="{{ $formation->image }}" style="width: 75%" alt="thumbnail">
                            </div>
                            <p class="margin-top-20">{{ $formation->description }}</p>
                            <h4>Contenu du cours</h4>
                            <div class="curriculum-accordion margin-top-30">
                                <div class="accordion-wrapper tab-margin-bottom-50" id="accordionExample">
                                    @foreach($formation->chapitres as $chapitre)
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <a href="#" role="button" data-toggle="collapse" data-target="#collapse{{$chapitre->id}}" aria-expanded="true" aria-controls="collapseOne">{{{ $chapitre->titre }}}</a>
                                            </div>
                                            <div id="collapse{{$chapitre->id}}" class="collapse show" aria-labelledby="heading{{$chapitre->id}}" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    {{ $chapitre->contenu }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
