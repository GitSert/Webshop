@extends('layout')

@section('title')Wine Creation @endsection

@section('content')
    <?php use App\Http\Controllers\BeerController ?>
    <div>
        <h1 class="margin-h1 center1 texttype1 text-red" id="shadow">Make a wine</h1>
        <div
            class="center2 margin-h1 texttype1 text-red"
            style="text-align: center;"
            id="shadow"
        >

            <form method="POST" action="/wines">
                @csrf
                <label for="name">Wine name:</label><br>
                <textarea name="name" class="text-field @error('name') is-danger @enderror" id="name" required>{{ old('name') }}</textarea><br/>
                @error('name')
                <p class="help is-danger">{{ $errors->first('name') }}</p>
                @enderror

                <label for="winery">Winery:</label><br>
                <textarea name="winery" class="text-field-winery  @error('winery') is-danger @enderror" id="winery" required>{{ old('winery') }}</textarea><br/>
                @error ('winery')
                <p class="help is-danger">{{ $errors->first('winery') }}</p>
                @enderror

                <label for="ABV">ABV:</label><br>
                <textarea name="ABV" class="text-field  @error('ABV') is-danger @enderror" id="ABV" required>{{ old('ABV') }}</textarea><br/>
                @error ('ABV')
                <p class="help is-danger">{{ $errors->first('ABV') }}</p>
                @enderror

                <label for="image_path">Image path:</label><br>
                <textarea name="image_path" class="text-field  @error('image_path') is-danger @enderror" id="image_path" required>{{ old('image_path') }}</textarea><br/>
                @error ('image_path')
                <p class="help is-danger">{{ $errors->first('image_path') }}</p>
                @enderror

                <br><br>
                <input type="submit" value="Submit">
            </form>

        </div>
    </div>
@endsection
