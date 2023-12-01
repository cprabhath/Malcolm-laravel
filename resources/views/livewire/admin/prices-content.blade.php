<div class="card">
    <div class="card-body">
        <h5>Customize Your Service Page Experience</h5>
        <hr>
        <div class="contact-info-section d-flex mt-2">
            <h5 style="padding-right:250px">Details</h5>
            <form style="width: 70%" wire:submit.prevent="personal_details">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="inlineFormInputGroupUsername">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">LKR</div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form mb-4">
                            <label class="form-label" for="form4Example3">Features</label>
                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block mb-4" style="background-color: #50017d; color:white">Save
                    info</button>
            </form>
        </div>
        <hr>
        <div class="contact-info-section d-flex mt-2">
            <h5 style="padding-right:150px">Your Current Details</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Price (LKR)</th>
                        <th>Feature</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>150,000</td>
                        <td>features</td>
                        <td>
                            <button class="btn btn-primary"><i class='bx bx-pencil me-2'></i>Update</button>
                            <button class="btn btn-danger"><i class='bx bx-trash me-2'></i>Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
