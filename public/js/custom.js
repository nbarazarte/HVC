(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-114915179-1', 'auto');
ga('send', 'pageview');

function initialize() {
    
    var latlng = new google.maps.LatLng(10.997358,-63.7885197,17);
   
    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('googlemap'), myOptions);
    var marker = new google.maps.Marker({
        position: latlng, 
        map: map,
        //icon: "base-hotel/system/images/point.png"
        icon: ""
    });
}

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    //script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&'+'callback=initialize';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDZCSAgZFF_WxgDCDUy5cDtbr3dFGob4Sw&callback=initialize';
    document.body.appendChild(script);
}
window.onload = loadScript;

function diferencia(){

    var llegada = $("#contact-arrival").val();
    var salida = $("#contact-departure").val();
    var date1 = new Date(llegada);
    var date2 = new Date(salida);
    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

    if(diffDays == 0){

        var diffDays = 1;

    }

    $("#cant-dias").val(diffDays);

    var months = ["01", "02", "03", "04", "05", "06", "07", "08","09", "10", "11", "12"];

    var fe = new Date(llegada);
    var fs = new Date(salida);

    var namedMonth1 = months[fe.getMonth()];
    var namedMonth2 = months[fs.getMonth()];

    if (fe.getDate() <10) {

        var fecha_entrada = "0"+ fe.getDate();

    }else{

        var fecha_entrada = fe.getDate();
    }

    if (fs.getDate() <10) {

        var fecha_salida = "0"+ fs.getDate();

    }else{

        var fecha_salida = fs.getDate();

    }

    $("#contact-llegada").val(fe.getFullYear()+"-"+namedMonth1+"-"+ fecha_entrada);
    $("#contact-salida").val(fs.getFullYear()+"-"+namedMonth2+"-"+ fecha_salida);

}

function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
} 