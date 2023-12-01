<section class="contact-form">
    <div class="container">
        <div class="innerwrap">
            <section class="section1">
                <div class="textcenter">
                    <h1>Drop Us a Mail</h1>
                </div>
            </section>
            <section class="section2">
                <div class="col2 column1 first">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div class="sec2map" style='overflow:hidden;'>
                        <iframe class="iframe-placeholder"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93721.40585006126!2d80.34356015935877!3d6.219401232793976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae165b44b69501b%3A0xf01c80d7beabf0b4!2sBase%20Hospital%20Udugama!5e0!3m2!1sen!2slv!4v1695900080948!5m2!1sen!2slv"
                            width="600" height="570" style="border-radius:10px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col2 column2 last">
                    <div class="sec2innercont">
                        <div class="sec2addr">
                            @foreach ($contacts as $contact)
                                <p><span class="collig">Address:</span>{{ $contact->address }}</p>
                                <p><span class="collig">Phone :</span>{{ $contact->phone }}</p>
                                <p><span class="collig">Email :</span>{{ $contact->email }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="sec2contactform">
                        <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                        <form action="" wire:submit.prevent="makeInquiry">
                            @error('form')
                                <span class="text-danger">Please Complete the form</span>
                            @enderror
                            <div class="clearfix">
                                <input wire:model="form.firstName" class="col2 first" type="text"
                                    placeholder="First Name">
                                <input wire:model="form.lastName" class="col2 last" type="text"
                                    placeholder="Last Name">
                            </div>
                            <div class="clearfix">
                                <input wire:model="form.email" class="col2 first" type="Email" placeholder="Email">
                                <input wire:model="form.contactNo" class="col2 last" type="text"
                                    placeholder="Contact Number">
                            </div>
                            <div class="clearfix">
                                <select wire:model="form.subject" aria-label="Default select example">
                                    <option selected>Select Subject</option>
                                    <option value="special event">Special Event</option>
                                    <option value="price">Prices</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>
                            <div class="clearfix">
                                <textarea wire:model="form.Message" name="textarea" id="" cols="30" rows="7"
                                    placeholder="Your message here..."></textarea>
                            </div>
                            <div class="clearfix"><input type="submit" value="Send"></div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('livewire.common.components.footer')
</section>
<script>
    window.addEventListener('Success', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })
</script>
