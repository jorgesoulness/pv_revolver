//Scripts layoutScripts v1.0
$(document).ready(function() {
    var wow =  new WOW({
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: false        // default
    });
    $('#pageFullRevolver').fullpage({
        verticalCentered: true,
        sectionsColor: ['#dfce00', '#000000', '#dfce00', '#000000', '#dfce00', '#000000', '#dfce00', '#000000'],
        anchors: ['inicio', 'quieneSomos', 'disenoWeb', 'branding', 'SocialMedia', 'disenoGrafico', 'contacto', 'testomonio'],
        resize: false,
        continuousVertical: false,
        //animateAnchor: false,
		//scrollOverflow: true,
		//autoScrolling: true,
		responsive: 640,
		//fitSection: false,
        menu: '#menu',
        navigation: true,
        paddingTop: '20px',
        easingcss3: 'cubic-bezier(0.760, 0.005, 0.290, 1.005)',
        scrollBar: true,
        afterRender: function(index, anchor){
             wow.init();
        }
    });

    //validate form
    

});