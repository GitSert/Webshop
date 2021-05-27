@extends('layout')

@section('winery')Wine @endsection

@section ('content')

    <div style="text-align: center">

        <div>
            <h1 style="margin-top: 5%">Edit a wine</h1>

            <div style="margin: 5%">
                <form method="POST" action="{{ route('wines.update', $wine) }}">
                    @csrf
                    @method('PUT')

                    <label for="name">Name:</label><br>
                    <textarea name="name" class="text-field @error('name') is-danger @enderror" id="name" required> {{ $wine->name }} </textarea><br/>
                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror

                    <label for="winery">Brewery:</label><br>
                    <textarea name="winery" class="text-field @error('winery') is-danger @enderror" id="winery" required> {{ $wine->winery }} </textarea><br/>
                    @error('winery')
                    <p class="help is-danger">{{ $errors->first('winery') }}</p>
                    @enderror

                    <label for="ABV">ABV:</label><br>
                    <textarea name="ABV" class="text-field @error('ABV') is-danger @enderror" id="ABV" required> {{ $wine->ABV }} </textarea><br/>
                    @error('ABV')
                    <p class="help is-danger">{{ $errors->first('ABV') }}</p>
                    @enderror

                    <label for="image_path">Image link:</label><br>
                    <textarea name="image_path" class="text-field @error('image_path') is-danger @enderror" id="image_path" required> {{ $wine->image_path }} </textarea><br/>
                    @error('image_path')
                    <p class="help is-danger">{{ $errors->first('image_path') }}</p>
                    @enderror
                    <br><br>

                    <input type="submit" value="Save">
                </form>

                <form method="POST" action="/wines/{{ $wine->id }}">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete" class="form-delete-button">
                </form>

            </div>

        </div>

    </div>

@endsection()
