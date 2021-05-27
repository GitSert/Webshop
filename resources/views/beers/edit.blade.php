@extends('layout')

@section('brewery')Beer @endsection

@section ('content')

    <div style="text-align: center">

        <div>
            <h1 style="margin-top: 5%">Edit a beer</h1>

            <div style="margin: 5%">
                <form method="POST" action="{{ route('beers.update', $beer) }}">
                    @csrf
                    @method('PUT')

                    <label for="name">Name:</label><br>
                    <textarea name="name" class="text-field @error('name') is-danger @enderror" id="name" required> {{ $beer->name }} </textarea><br/>
                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror

                    <label for="brewery">Brewery:</label><br>
                    <textarea name="brewery" class="text-field @error('brewery') is-danger @enderror" id="brewery" required> {{ $beer->brewery }} </textarea><br/>
                    @error('brewery')
                    <p class="help is-danger">{{ $errors->first('brewery') }}</p>
                    @enderror

                    <label for="ABV">ABV:</label><br>
                    <textarea name="ABV" class="text-field @error('ABV') is-danger @enderror" id="ABV" required> {{ $beer->ABV }} </textarea><br/>
                    @error('ABV')
                    <p class="help is-danger">{{ $errors->first('ABV') }}</p>
                    @enderror

                    <label for="image_path">Image link:</label><br>
                    <textarea name="image_path" class="text-field @error('image_path') is-danger @enderror" id="image_path" required> {{ $beer->image_path }} </textarea><br/>
                    @error('image_path')
                    <p class="help is-danger">{{ $errors->first('image_path') }}</p>
                    @enderror
                    <br><br>

                    <input type="submit" value="Save">
                </form>

                <form method="POST" action="/beers/{{ $beer->id }}">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete" class="form-delete-button">
                </form>

            </div>

        </div>

    </div>

@endsection()
