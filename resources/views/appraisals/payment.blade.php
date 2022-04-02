<!DOCTYPE html>
<html>
<div>
    This is charge page
</div>
<div>
    {{ $appraisal->id }}
</div>
<div>
    {{ $appraisal->fee }}

</div>
<div>
    <form method="POST" action="{{ url('appraisals/' . $appraisal->id . '/purchase') }}" class="card-form mt-3 mb-3">
        @csrf
        <input type="hidden" name="payment_method" class="payment-method">
        <input class="mb-3" name="card_holder_name" placeholder="Name on Card" required>
        <input class="mb-3" name="card_number" placeholder="Card Number" required>
        <input class="mb-3" name="cvc" placeholder="CVC" required>
        <input class="mb-3" name="expiration_month" placeholder="MM" required>
        <input class="mb-3" name="expiration_year" placeholder="YY" required>



        <div class="col-lg-4 col-md-6">
            <div id="card-element"></div>
        </div>
        <div id="card-errors" role="alert"></div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary pay">
                Purchase
            </button>
        </div>
    </form>
</div>

@if (isset($alert))
    @if ($alert->any())
        <h4>{{ $alert->first() }}</h4>
    @endif
@endif

</html>
