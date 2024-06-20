let elements = document.querySelectorAll('.handlediv');
elements.forEach(item => {item.addEventListener('click', event => {
    console.log("here");
    setTimeout(function(){route_map.invalidateSize();
    },50);
    setTimeout(function(){map.invalidateSize();
    },50); 
})})
