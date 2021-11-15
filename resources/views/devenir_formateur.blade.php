@extends('layouts.app')

@section('content')


    <section class="contact-bottom-section mt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    @if(isset($success))
                        <div class="alert alert-success">
                            {{ $success }}
                        </div>
                    @endif
                    @if(isset($error))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif
                    <div class="contact-page-form">
                        <div class="contact-form-title">
                            <h3>write <span>to us</span></h3>
                        </div>
                        <form method="POST" action="{{ route("formateur.store") }}">
                            @csrf
                            <label class="label" for="nom">Nom</label>
                            <input id="nom" type="text" name="nom" placeholder="Votre Nom">

                            <label class="label" for="pnom">Prénom</label>
                            <input id="pnom" type="text" name="prenom" placeholder="Votre Prénom">

                            <label class="label" for="email">Email</label>
                            <input id="email" type="email" name="email" placeholder="Votre Email">

                            <label class="label" for="phone">Téléphone</label>
                            <input id="phone" type="number" name="tel" placeholder="Votre Téléphone">

                            <label class="label" for="photo">Photo</label>
                            <input id="photo" type="file" name="file" accept="image/*" />

                            <button type="submit" class="template-button">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
