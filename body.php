<body class="position-absolute top-50 start-50 translate-middle">
    <div class="conteiner ">
        <div class="row">
            <div class="col border bg-primary text-light py-2">Iniciar Seccion</div>
        </div>
        <div class="row">
            <div class="col border">
            <form id="form"  method="get">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más..</div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="pass" required>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto my-3">
                    <button onclick="validar()"  type="submit" class="btn btn-primary btn-align-middle">ingresar</button>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>