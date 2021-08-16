function toggle(){
    let nav = document.getElementById('nav')
    console.log("Clicked")
    if(nav.className == ""){
        nav.className = "active";
    }
    else{
        nav.className = "";
    }
}