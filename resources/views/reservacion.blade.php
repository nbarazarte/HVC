    <!-- Check Rates Banner | START -->
    <div id="check">
        <div class="centre">
            <form action="{{ route('contact')}}" method="post">
                <div class="field calendar"><input name="arrival" type="text" placeholder="LLegada" id="arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field calendar"><input name="departure" type="text" placeholder="Salida" id="departure" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field select">
                    <select name="rooms">
                        <option value="Matrimonial">Matrimonial</option>
                        <option value="Matrimonial + Sofá">Matrimonial + Sofá</option>
                        <option value="Familiar">Familiar</option>
                        <option value="Duplex">Duplex</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="adults">
                        <option value="1 Adulto">1 Adulto</option>
                        <option value="2 Adultos">2 Adultos</option>
                        <option value="3 Adultos">3 Adultos</option>
                        <option value="4 Adultos">4 Adultos</option>
                        <option value="5 Adultos">5 Adultos</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="Niños">
                        <option value="0 Niños">0 Niños</option>
                        <option value="1 Niño">1 Niño</option>
                        <option value="2 Niños">2 Niños</option>
                        <option value="3 Niños">3 Niños</option>
                        <option value="4 Niños">4 Niños</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <button><span data-hover="Reservar Ahora">Reservar Ahora</span></button>

                {!! csrf_field() !!} 
                
            </form>
        </div>
    </div>
    <!-- Check Rates Banner | END -->