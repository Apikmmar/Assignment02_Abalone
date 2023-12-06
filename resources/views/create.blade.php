@extends('component/master')

@section('title', 'Abalone')
    
@section('content')
    <div>
        <div class="row">
            <h3 class="fw-bold">INSERT NEW ABALONE DATA</h3>
        </div>
        <div class="row">
            <form action="{{ route('abalonedata.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="sex">
                            <option selected>Sex</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="I">Infant</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Length(mm)</label>
                            <input type="text" class="form-control" name="length" placeholder="Length(mm)">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Height(mm)</label>
                            <input type="text" class="form-control" name="height" placeholder="Height(mm)">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Shucked Weight(grams)</label>
                            <input type="text" class="form-control" name="shucked_weight" placeholder="Shucked Weight(grams)">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Shell Weight(grams)</label>
                            <input type="text" class="form-control" name="shell_weight" placeholder="Shell Weight(grams)">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Diameter(mm)</label>
                            <input type="text" class="form-control" name="diameter" placeholder="Diameter(mm)">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Whole Weight(grams)</label>
                            <input type="text" class="form-control" name="whole_weight" placeholder="Whole Weight(grams)">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Viscera Weight(grams)</label>
                            <input type="text" class="form-control" name="viscera_weight" placeholder="Viscera Weight(grams)">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Rings</label>
                            <input type="text" class="form-control" name="rings" placeholder="Rings">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col text-center">
                        <button class="btn btn-primary" type="submit">SUBMIT</button>&nbsp;&nbsp;
                        <button class="btn btn-warning" type="reset">RESET</button>
                    </div>
                </div>                
            </form>
        </div>
    </div>
@endsection