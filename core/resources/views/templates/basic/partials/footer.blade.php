@php
    $footerContent = getContent('footer.content', true);
    $ctaContent = getContent('cta.content', true);
    $iconElement = getContent('social_icon.element', false, null, true);
    $policyPages = getContent('policy_pages.element', false, null, true);
@endphp
<!-- Footer  -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-logo text-center pb-5">
                        <img src="{{ getImage('assets/images/logoIcon/logo-white.png') }}" alt="{{ __($general->site_name) }}" class="img-fluid" style="width: 80%;" />
                    </div>
                    <!-- <h4 class="mt-0 t-text-white text-capitalize">{{ __($footerContent->data_values->title) }}</h4>
                    <p class="t-text-white t-short-para">
                        {{ __($footerContent->data_values->content) }}
                    </p> -->
                    <ul class="list list--row">
                        @foreach ($iconElement as $icon)
                            <li class="list--row__item">
                                <a href="{{ @$icon->data_values->url }}" class="t-link social-icon--alt" target="_blank">
                                    @php echo @$icon->data_values->social_icon; @endphp
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="mt-0 t-text-white text-capitalize">@lang('Important Link')</h4>
                    <ul class="list list--column">
                        <li class="list--column__item">
                            <a href="{{ route('loan') }}" class="t-link t-link--primary t-text-white text-capitalize">
                                @lang('Loan Plans')
                            </a>
                        </li>

                        @if (@$pages)
                            @foreach ($pages as $k => $data)
                                <li class="list--column__item">
                                    <a href="{{ route('pages', [$data->slug]) }}" class="t-link t-link--primary t-text-white text-capitalize">{{ __($data->name) }}</a>
                                </li>
                            @endforeach
                        @endif
                        <li class="list--column__item">
                            <a href="{{ route('contact') }}" class="t-link t-link--primary t-text-white text-capitalize">
                                @lang('Contact Us')
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="mt-0 t-text-white text-capitalize">@lang('Quick Link')</h4>
                    <ul class="list list--column">
                        @foreach ($policyPages as $link)
                            <li class="list--column__item">
                                <a class="t-link t-link--primary t-text-white text-capitalize" href="{{ route('policy.pages', [slug($link->data_values->title), $link->id]) }}">{{ __($link->data_values->title) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="mt-0 t-text-white text-capitalize">
                        {{ __($footerContent->data_values->subscription_heading) }}
                    </h4>
                    <p class="t-text-white t-short-para">
                        {{ __($footerContent->data_values->subscription_subheading) }}
                    </p>
                    <form class="newsletter t-mt-30">
                        @csrf
                        <input type="email" name="email" class="newsletter__input form-control" placeholder="@lang('Email address')" />
                        <button type="submit" class="newsletter__btn flex-shrink-0">
                            <i class="bx bxs-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p class="mb-0 t-text-white text-center text-capitalize">
            &copy; {{ date('Y') }}
            <a class="base--text" href="{{ route('home') }}">{{ __($general->site_name) }}</a>
            @lang('All Rights Reserved').
        </p>
    </div>
</footer>
<!-- Footer End -->

<a class="scroll-top"><i class="las la-arrow-up"></i></a>

@push('script')
    <script>
        (function($) {
            "use strict";

            $('.newsletter').on('submit', function(e) {
                e.preventDefault();
                var data = $('.newsletter').serialize();
                $.ajax({
                    type: "POST",
                    url: "{{ route('subscribe') }}",
                    data: data,
                    success: function(response) {
                        if (response.status == 'success') {
                            notify('success', response.message);
                            $('#email').val('');
                        } else {
                            notify('error', response.message);
                        }
                    }
                });
            });
        })(jQuery);
    </script>
@endpush
