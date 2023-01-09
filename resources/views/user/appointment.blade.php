<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">
            @csrf
            <div class="mt-5 row ">
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
                    <select name="problem" id="departement" class="custom-select">
                        <option>----Select Maintenance----</option>
          <option value="Vehicle preventive maintenance">Vehicle preventive maintenance</option>
          <option value="Brake repair & maintenance">Brake repair & maintenance</option>
          <option value="Radiator maintenance & replacement">Radiator maintenance & replacement</option>
          <option value="Throttle body maintenance">Throttle body maintenance</option>
          <option value="Air conditioning repair & maintenance">Air conditioning repair & maintenance</option>
          <option value="Tyre Services">Tyre Services</option>
          <option value="Transmission repair & replacement">Transmission repair & replacement</option>
          <option value="Fuel system repair & replacement">Fuel system repair & replacement</option>
          <option value="Exhaust system repair & replacement">Exhaust system repair & replacement</option>
          <option value="Suspension repair & replacement">Suspension repair & replacement</option>
          <option value="Electrical diagnostics">Electrical diagnostics</option>
          <option value="Battery starting, charging, repair & replacement">Battery starting, charging, repair & replacement</option>
          <option value="Car body paint & repairs">Car body paint & repairs</option>
          <option value="Insurance claims & repairs">Insurance claims & repairs</option>

        </select>
                </div>
                <div class="py-2 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Number..">
                </div>
                <div class="py-2 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="mt-3 btn btn-primary wow zoomIn">Submit Request</button>
        </form>
    </div>
</div>

