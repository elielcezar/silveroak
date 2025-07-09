// Inicializar AOS (Animate On Scroll)
AOS.init({
    disable: 'mobile'
});

// Swiper para Hero Section
const swiper1 = new Swiper('.hero-swiper', {        
    loop: true,            
    pagination: {
        el: '.hero-swiper .swiper-pagination',
        clickable: true
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});       

// Swiper para Gallery Thumbnails
var swiper2 = new Swiper(".thumbs-swiper", {
    spaceBetween: 10,
    slidesPerView: 12,
    freeMode: true,
    watchSlidesProgress: true,
});

// Swiper para Gallery Principal
var swiper3 = new Swiper(".gallery-swiper", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper2,
    },
});

// Swiper para Attractions
const swiper4 = new Swiper('.attractions-swiper', {    
    loop: true, 
     // Navigation arrows
     navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.attractions-swiper .swiper-pagination',
        clickable: true
    },
    slidesPerView: 4,
      centeredSlides: true,
      spaceBetween: 5,      
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        300: {
        slidesPerView: 1,
          spaceBetween: 15,
        },
        768: {
            slidesPerView: 3,
          spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
          spaceBetween: 15,
        },
        360: {
            slidesPerView: 5,
          spaceBetween: 15,
        },
      },   
    /*loop: true,            
    pagination: {
        el: '.attractions-swiper .swiper-pagination',
        clickable: true
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }*/
});

// Função para inicializar o Google Maps com estilo azul escuro customizado
window.initMap = function() {
    // Verificar se o elemento do mapa existe
    const mapElement = document.getElementById("map");
    if (!mapElement) {
        console.log("Elemento do mapa não encontrado");
        return;
    }
    
    // Coordenadas exatas do Silver Oaks RV Park - 1376 Longoria Rd
    const silverOaksLocation = { lat: 27.9510133, lng: -97.1368 };

    // Estilo noturno customizado com tons de azul escuro
    const customMapStyle = [
        {
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ff2c2c"
                }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#1a237e"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#ff2c2c"
                }
            ]
        },
        {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#e3f2fd"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#1a3e56"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#3949ab"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#e8eaf6"
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#1e3a8a"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#3f51b5"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#2c466e"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#3d6573"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#3949ab"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#344978"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#0d47a1"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#bbdefb"
                }
            ]
        }
    ];

    // Criação do mapa
    const map = new google.maps.Map(mapElement, {
        zoom: 15,
        center: silverOaksLocation,
        styles: customMapStyle,
        mapTypeControl: false,
        streetViewControl: false,
        fullscreenControl: false,
        gestureHandling: 'greedy'  // Permite zoom com scroll do mouse sem Ctrl
    });

    // Marcador customizado (tamanho dobrado)
    const marker = new google.maps.Marker({
        position: silverOaksLocation,
        map: map,
        title: "Silver Oaks RV Park",
        icon: {
            url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#FDBC0E"/>
                </svg>
            `)
        }
    });

    // Info window com botão para abrir no Google Maps
    const infoWindow = new google.maps.InfoWindow({
        content: `
            <div style="
            color: #333; 
            font-family: 'Montserrat', sans-serif; 
            text-align: center;
            padding-top: 15px;">
                <h3 style=
                "margin: 0 0 10px 0; 
                font-weight: 700;                
                color: #273A1B;">
                    <a href="https://www.google.com/maps/place/1376+Longoria+Rd,+Aransas+Pass,+TX+78336" target="_blank">Silver Oaks RV Park</a>
                </h3>
                <p style="margin: 0 0 5px 0;"><strong>1376 Longoria Road</strong></p>
                <p style="margin: 0 0 5px 0;">Aransas Pass, TX 78336</p>
                <p style="margin: 0 0 15px 0;">(361) 717-0090</p>  
                <a href="https://www.google.com/maps/place/1376+Longoria+Rd,+Aransas+Pass,+TX+78336" target="_blank" 
                style=" padding: 4px 10px;
                        text-decoration: none;
                        border-radius: 40px;
                        font-size: 14px;
                        display: inline-block;
                        display: flex;
                        align-items: center;
                        gap: 15px;
                        border: 1px solid #939393;
                        font-weight: 500;
                        letter-spacing: 0px;
                        background: #ffffff;">              
                   <img src="../wp-content/themes/silveroaks/img/ico-maps.png"> <span>See on Google Maps</span>
                </a>
            </div>
        `
    });

    marker.addListener("click", () => {
        infoWindow.open(map, marker);
    });
};

// Garantir que a função esteja disponível globalmente
if (typeof window !== 'undefined') {
    window.initMap = window.initMap || function() {
        console.log("initMap chamada como fallback");
    };
}

// Aguardar o DOM estar carregado para inicializar outros componentes
document.addEventListener('DOMContentLoaded', function() {
    console.log("Silver Oaks theme scripts carregados");
}); 