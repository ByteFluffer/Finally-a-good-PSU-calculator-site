<!doctype html>
<html>
<head>
    <title>PC PSU berekenaar</title>
    <meta name="description" content="Bereken de PSU wattage">
    <meta name="keywords" content="PSU berekenaar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    <div class="container-fluid text-center" id="main_text">
        <h1> PC PSU berekenaar </h1>
        <p>Bereken eenvoudig de computer voeding wattage met daadwerkelijk IRL waardes.
    </div>


    <div class="container-fluid" id="main_form">
        <div class="row">
            <div class="col text-left" id="icon_hardware">
                <h3><img src="/assets/img/icons/cpu.png" width="70" alt="CPU icon" />Processor</h3>

                    <div class="container">
                        <div class="row" id="row_forms">

                            <div class="col-sm 2">
                                <h6>Merk:</h6>
                                <select class="form-select" aria-label="select" id="select_cpu_brand">
                                    <option value="amd">AMD</option>
                                    <option value="intel">Intel</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>Socket:</h6>
                                <select class="form-select" aria-label="select" id="select_cpu_socket">
                                </select>
                            </div>

                            <div class="col-sm 1">
                                <h6>Model:</h6>
                                <select class="form-select" aria-label="select" id="select_form">
                                </select>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col text-center">
                <div class="col text-left" id="icon_hardware">
                    <h3><img src="/assets/img/icons/motherboard.png" width="70" alt="Motherboard icon" />Systeem</h3>

                    <div class="container">
                        <div class="row" id="row_forms">

                            <div class="col-sm">
                                <h6>RAM:</h6>
                                <select class="form-select" aria-label="select" id="select_system_ram">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>SSD:</h6>
                                <select class="form-select" aria-label="select" id="select_system_ssd">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>FANS:</h6>
                                <select class="form-select" aria-label="select" id="select_system_fans">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>HDD:</h6>
                                <select class="form-select" aria-label="select" id="select_system_hdd">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="main_form">
        <div class="row">
            <div class="col text-left" id="icon_hardware">
                <h3><img src="/assets/img/icons/gpu.png" width="70" alt="GPU icon" />Videokaart</h3>

                    <div class="container">
                        <div class="row" id="row_forms">

                            <div class="col-sm">
                                <h6>Merk:</h6>
                                <select class="form-select" id="select_gpu_brand">
                                    <option selected disabled>Kies</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>Series:</h6>
                                <select class="form-select" aria-label="select" id="select_gpu_series">
                                    <option selected disabled>Kies</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>Model:</h6>
                                <select class="form-select" aria-label="select" id="select_gpu_model">
                                    <option selected disabled>Kies</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col text-center">
                <div class="col text-left" id="icon_hardware">
                    <h3><img src="/assets/img/icons/cooling-system.png" width="70" alt="Cooling icon" />Koeling</h3>

                    <div class="container">
                        <div class="row" id="row_forms">

                            <div class="col-sm">
                                <h6>Type:</h6>
                                <select class="form-select" aria-label="select" id="select_cooling_type">
                                    <option selected disabled>Kies</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <h6>Formaat:</h6>
                                <select class="form-select" aria-label="select" id="select_cooling_formfactor">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="form_submission">

        <hr>

        <button type="button" id="form_submit" class="btn btn-primary">Bereken wattage</button>  

        <button type="button" class="btn btn-primary disabled">Deel je ervaring</button>  

        <button type="button" class="btn btn-primary disabled">Download berekening in PDF</button>  

    </div>


    <div class="container-fluid" id="total_form">
        <h4>Aanbevolen voeding: <div id="total_value">...</div></h4>
    </div>


    <div class="container-fluid text-center" id="user_reactions">
        <h4>Gebruiker ervaringen</h4>
        <h6>T.b.c</h6
        <br>
    </div>



<script src="assets/js/main.js"></script>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">&copy; <?php echo date('Y');?> KelvinCodes</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
</div>

</body>
</html>