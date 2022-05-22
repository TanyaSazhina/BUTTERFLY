function disNone(){
    let html = document.getElementById('map_access');
    let html1 = document.querySelector('.class1');
    if(html){
        html.style.display = 'none';
    }
    if(html1){
        html1.style.display = 'none';
    }
}
setInterval(disNone, 1);
