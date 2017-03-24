<?php ?>

@extends('layouts.template')
@section('header_title', $user->lastname)
@section('main_content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">

                    {!! Form::model($user, ['action' => ['ProfilController@save'], 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('firstname') ? 'has-error' : '' !!}">
                        {{Form::label('firstname','prenom:')}}
                        {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'prénom']) !!}
                        {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('lastname') ? 'has-error' : '' !!}">
                        {{Form::label('lastname','nom:')}}
                        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'nom']) !!}
                        {!! $errors->first('lastname', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {{Form::label('email','adresse email :')}}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('street') ? 'has-error' : '' !!}">
                        {{Form::label('street','rue :')}}
                        {!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'rue']) !!}
                        {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('city') ? 'has-error' : '' !!}">
                        {{Form::label('city','ville  :')}}
                        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'ville']) !!}
                        {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('tel') ? 'has-error' : '' !!}">
                        {{Form::label('tel','téléphone  :')}}
                        {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'téléphone']) !!}
                        {!! $errors->first('tel', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('comment') ? 'has-error' : '' !!}">
                        {{Form::label('comment','commentaire  :')}}
                        {!! Form::text('comment', null, ['class' => 'form-control', 'placeholder' => 'comment']) !!}
                        {!! $errors->first('comment', '<small class="help-block">:message</small>') !!}
                    </div>



                </div>
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
    </div>
@endsection
