@extends('Layout.master')
@section('title', 'Home')

@section('style')

@endsection

@section('content')
    <div class="inscription-form">
        <div class="container mt-3">
            <h3>Inscription</h3>
            <p>Try to submit the form.</p>

            <form action="/action_page.php" class="was-validated text-secondary">
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                    <label class="form-check-label" for="myCheck">I agree on Conditions.</label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </div>
                {{-- concours --}}
                <div class="border border-success p-2 mb-2 p-3">
                    <p>Participer au concours</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                            checked required>
                        <label class="form-check-label" for="exampleRadios1">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Pas Maintenant
                        </label>
                    </div>
                    <select class="form-select mt-3" aria-label="Default select example">
                        <option selected>Categories</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                        <option value="3">Enfants</option>
                        <option value="3">Haute-Couture</option>
                        <option value="3">Accessoires</option>
                    </select>
                    <div class="mb-3 mt-3">
                        <label for="formFile" class="form-label">Telecharger le croquis</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </div>


@endsection

@section('script')

@endsection
