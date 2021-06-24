<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-3">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-success-custom">
                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-info-custom">{{ number_format($balance, 0, '', ' ') }}$</h3>
                    <h5 class="text-muted m-b-0">Доступная сумма</h5></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-primary">
                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-primary">{{ number_format($week, 0, '', ' ') }}$</h3>
                    <h5 class="text-muted m-b-0">Еженедельная  выплата</h5></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-success">
                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-success">{{ number_format($out, 0, '', ' ') }}$</h3>
                    <h5 class="text-muted m-b-0">Выведено</h5></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-inverse">
                    <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0">{{ number_format($all, 0, '', ' ') }}$</h3>
                    <h5 class="text-muted m-b-0">Оборот</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
