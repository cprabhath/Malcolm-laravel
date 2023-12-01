<section>
    <div class="background">
        <div class="pricing-container">
            <div class="panel pricing-table">
                @foreach ($currencies as $currency)
                <div class="pricing-plan">
                    <h2 class="pricing-header">{{ $currency->heading }}</h2>
                    <ul class="pricing-features">
                        <li class="pricing-features-item">Custom domains</li>
                        <li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>
                    </ul>
                        <span class="pricing-price">{{ $currency->currency }} {{ $currency->prices }}</span>
                    <button type="button" class="pricing-button" data-mdb-toggle="modal"
                        data-mdb-target="#staticBackdrop">Book now</button>
                </div>
                @endforeach
                <div class="pricing-plan">
                    <h2 class="pricing-header">Special Events</h2>
                    <ul class="pricing-features">
                        <li class="pricing-features-item">Never sleeps</li>
                        <li class="pricing-features-item">SLEEPS AFTER 30 MINS OF INACTIVITY</li>
                    </ul>
                    <span class="pricing-price">Custom</span>
                    <a href="/contact" class="pricing-button" wire:navigate>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-xl" id="staticBackdrop" data-mdb-backdrop="static"
    data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Your Event Today!</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form6Example1" class="form-control" />
                                    <label class="form-label" for="form6Example1">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form6Example2" class="form-control" />
                                    <label class="form-label" for="form6Example2">Last name</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example3" class="form-control" />
                            <label class="form-label" for="form6Example3">Company name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example4" class="form-control" />
                            <label class="form-label" for="form6Example4">Address</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="form6Example5" class="form-control" />
                            <label class="form-label" for="form6Example5">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" id="form6Example6" class="form-control" />
                            <label class="form-label" for="form6Example6">Phone</label>
                        </div>

                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                            <label class="form-label" for="form6Example7">Additional information</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-4">Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.common.components.footer')
</section>
