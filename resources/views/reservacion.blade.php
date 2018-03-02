    <!-- Check Rates Banner | START -->
    <div id="check">
        <div class="centre">
            <form action="contact.php" method="post">
                <div class="field calendar"><input name="arrival" type="text" placeholder="Arrival" id="arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field calendar"><input name="departure" type="text" placeholder="Departure" id="departure" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field select">
                    <select name="rooms">
                        <option value="1 Room">1 Room</option>
                        <option value="2 Rooms">2 Rooms</option>
                        <option value="3 Rooms">3 Rooms</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="adults">
                        <option value="1 Adult">1 Adult</option>
                        <option value="2 Adults">2 Adults</option>
                        <option value="3 Adults">3 Adults</option>
                        <option value="4 Adults">4 Adults</option>
                        <option value="5 Adults">5 Adults</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="children">
                        <option value="0 Children">0 Children</option>
                        <option value="1 Child">1 Child</option>
                        <option value="2 Children">2 Children</option>
                        <option value="3 Children">3 Children</option>
                        <option value="4 Children">4 Children</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <button><span data-hover="Book a Room">Book a Room</span></button>
            </form>
        </div>
    </div>
    <!-- Check Rates Banner | END -->