@if(Session::has('message'))
                    
    <div class="alert success">
        <i class="fa fa-check-circle"></i> 
        <strong>
            {{Session::get('message')}}
        </strong> 
        
    </div>                        

@endif

@if(Session::has('messageError'))
                    
    <div class="alert error">
        <i class="fa fa-exclamation-circle"></i> 
        <strong>
            {{Session::get('messageError')}}
        </strong> 
        
    </div>                        

@endif 