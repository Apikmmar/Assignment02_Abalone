<div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4" style="background-color: #F6E9FF">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="/abalonedata/genderfilter" method="get">
                    @csrf
                    <label class="fw-bold">Filter by Abalone Sex:</label>
                    <select class="form-select" aria-label="Default select example" name="sex">
                        <option selected disabled>Sex</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="I">Infant</option>
                    </select>
                    <br>
                    <button class="btn btn-primary" type="submit">FILTER</button>
                </form>
            </div>
            <div class="col-4">
                <form action="/abalonedata/ringsfilter" method="get">
                    @csrf
                    <label class="fw-bold">Filter by Abalone Rings:</label>
                    <select class="form-select" aria-label="Default select example" name="show">
                        <option selected disabled>Rings</option>
                        <option value="asc">Ascending</option>
                        <option value="desc">Descending</option>
                    </select>
                    <br>
                    <button class="btn btn-primary" type="submit">FILTER</button>
                </form>                
            </div>
        </div>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <h3 class="fw-bold text-light">VIEW ABALONE DATA</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>&nbsp;
            <span class="fw-bold text-light">filter</span>
        </button>
      
    </div>
  </nav>