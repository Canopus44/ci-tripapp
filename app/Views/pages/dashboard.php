<div class="container">
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">TRIP APP</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">CORTOS, LARGOS, PLANEADOS O SIN RUMBO...</p>
            <p>¡LO IMPORTANTE ES VIAJAR!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5 container">
                <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
                <div class="row">
                    <div class="col-lg p-3">
                        <label>DEPARTAMENTO</label>
                        <select class="form-select" aria-label="Default select example" v-model="departamento">
                            <option v-for="dep in departamentos" v:bind="dep">{{dep}}</option>
                        </select>
                    </div>
                    <div class="col-lg p-3">
                        <label>REGION</label>
                        <select class="form-select" aria-label="Default select example" v-model="region">
                            <option v-for="reg in regiones" v:bind="reg">{{reg}}</option>
                        </select>
                    </div>
                    <div class="col-lg p-3">
                        <label>MUNICIPIO</label>
                        <select class="form-select" aria-label="Default select example" v-model="municipio">
                            <option v-for="mun in municipios" v:bind="muni">{{mun}}</option>
                        </select>
                    </div>
                </div>

            </div>
            <button type="button" class="btn btn-outline-primary mb-3 lg">Buscar</button>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://alkilautos.com/blog/wp-content/uploads/2019/03/D.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</div>