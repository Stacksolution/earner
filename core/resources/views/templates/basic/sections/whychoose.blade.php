@php
    $content = getContent('whychoose.content', true);
@endphp
<!-- Status::ENABLE is for is_featured -->
<section class="section--sm section--bottom">
    <div class="section__head">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-8">
                    <div class="text-center">
                        <h2 class="text-capitalize">{{ __(@$content->data_values->heading) }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-cente">
            <div class="col-md-4">
                <div class="card w-choose">
                    <div class="card-icon">
                        <img class="card-img-top" style="width: 44px;" src="{{ getImage('assets/images/frontend/icons/1.png', '750x550') }}" alt="Card image cap">
                    </div>
                    <div class="card-body" style="padding: 0px;">
                        <h5 class="card-title">Lower Interest Rates</h5>
                        <p class="card-text">Get loans for multiple purposes at lower interest rates to suit your needs</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card w-choose">
                    <div class="card-icon">
                        <img class="card-img-top" style="width: 44px;" src="{{ getImage('assets/images/frontend/icons/2.png', '750x550') }}" alt="Card image cap">
                    </div>
                    <div class="card-body" style="padding: 0px;">
                        <h5 class="card-title">Fast Processing and Disbursal</h5>
                        <p class="card-text">Apply online, check your eligibility and get money directly in your bank in 10 minutes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card w-choose">
                    <div class="card-icon">
                        <img class="card-img-top" style="width: 44px;" src="{{ getImage('assets/images/frontend/icons/3.png', '750x550') }}" alt="Card image cap">
                    </div>
                    <div class="card-body" style="padding: 0px;">
                        <h5 class="card-title">Easy Repayment Options</h5>
                        <p class="card-text">Repay the loan amount in easy EMI with flexible tenure options</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-cente mt-4">
            <div class="col-md-4">
                <div class="card w-choose">
                    <div class="card-icon">
                        <img class="card-img-top" style="width: 44px;" src="{{ getImage('assets/images/frontend/icons/4.png', '750x550') }}" alt="Card image cap">
                    </div>
                    <div class="card-body" style="padding: 0px;">
                        <h5 class="card-title">100% Paperless</h5>
                        <p class="card-text">No paperwork or physical documentation is required, and you can apply and get a personal loan completely online.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card w-choose">
                    <div class="card-icon">
                        <img class="card-img-top" style="width: 44px;" src="{{ getImage('assets/images/frontend/icons/5.png', '750x550') }}" alt="Card image cap">
                    </div>
                    <div class="card-body" style="padding: 0px;">
                        <h5 class="card-title">Safe, Secure and Transparent</h5>
                        <p class="card-text">Our loan application process is fully secured and safe and there are no hidden charges.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card w-choose">
                    <div class="card-icon">
                        <img class="card-img-top" style="width: 44px;" src="{{ getImage('assets/images/frontend/icons/6.png', '750x550') }}" alt="Card image cap">
                    </div>
                    <div class="card-body" style="padding: 0px;">
                        <h5 class="card-title">Collateral Free</h5>
                        <p class="card-text">No collateral is required to apply for our personal loans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>